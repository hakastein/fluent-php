<?php

namespace Major\Fluent\Bundle;

use Closure;
use Exception;
use Major\Fluent\Bundle\Types\FluentNone;
use Major\Fluent\Bundle\Types\FluentNumber;
use Major\Fluent\Exceptions\Bundle\FunctionExistsException;
use Major\Fluent\Exceptions\Bundle\MessageExistsException;
use Major\Fluent\Exceptions\Bundle\TermExistsException;
use Major\Fluent\Exceptions\Resolver\ResolverException;
use Major\Fluent\Node\Syntax\Entries\Message;
use Major\Fluent\Node\Syntax\Entries\Term;
use Major\Fluent\Node\Syntax\FluentResource;
use Major\Fluent\Node\Syntax\Patterns\Pattern;
use Major\Fluent\Parser\FluentParser;
use Major\Fluent\Resolver\PatternResolver;

final class FluentBundle
{
    /** Unicode BiDi isolation characters. */
    public const FSI = "\u{2068}";

    public const PDI = "\u{2069}";

    /** @var array<string, Message> */
    private array $messages = [];

    /** @var array<string, Term> */
    private array $terms = [];

    /** @var array<string, Closure> */
    private array $functions = [];

    /** @var list<ResolverException> */
    private array $errors = [];

    public function __construct(
        private string $locale,
        private bool $strict = false,
        private bool $useIsolating = true,
        private bool $allowOverrides = false,
    ) {
        $this->functions = [
            'NUMBER' => Closure::fromCallable([$this, 'numberFunction']),
            'DATETIME' => Closure::fromCallable([$this, 'dateTimeFunction']),
        ];
    }

    /**
     * @return $this
     */
    public function addResource(
        FluentResource $resource,
        ?bool $allowOverrides = null,
    ): static {
        $allowOverrides ??= $this->allowOverrides;

        foreach ($resource->body as $entry) {
            if ($entry instanceof Message) {
                if (! $allowOverrides && $this->hasMessage($entry->id->name)) {
                    throw new MessageExistsException($entry->id->name);
                }

                $this->messages[$entry->id->name] = $entry;
            }

            if ($entry instanceof Term) {
                if (! $allowOverrides && $this->hasTerm($entry->id->name)) {
                    throw new TermExistsException($entry->id->name);
                }

                $this->terms[$entry->id->name] = $entry;
            }
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function addFtl(string $ftl, ?bool $allowOverrides = null): static
    {
        $parser = new FluentParser($this->strict);

        $this->addResource($parser->parse($ftl), $allowOverrides);

        return $this;
    }

    /**
     * @return $this
     */
    public function addFunction(string $name, Closure $function): static
    {
        if ($this->hasFunction($name)) {
            throw new FunctionExistsException($name);
        }

        $this->functions[$name] = $function;

        return $this;
    }

    /**
     * @param array<string, Closure> $functions
     * @return $this
     */
    public function addFunctions(array $functions): static
    {
        foreach ($functions as $name => $function) {
            $this->addFunction($name, $function);
        }

        return $this;
    }

    public function hasMessage(string $id): bool
    {
        return array_key_exists($id, $this->messages);
    }

    public function hasTerm(string $id): bool
    {
        return array_key_exists($id, $this->terms);
    }

    public function hasFunction(string $id): bool
    {
        return array_key_exists($id, $this->functions);
    }

    /**
     * @internal
     */
    public function reportError(ResolverException $error, string $value = '???'): FluentNone
    {
        $this->errors[] = $this->strict ? throw $error : $error;

        return new FluentNone($value);
    }

    /**
     * @return list<ResolverException>
     */
    public function popErrors(): array
    {
        $errors = $this->errors;

        $this->errors = [];

        return $errors;
    }

    public function message(string $_message, mixed ...$arguments): ?string
    {
        if (
            count($arguments) === 1
            && array_key_exists(0, $arguments)
            && is_array($arguments[0])
        ) {
            $arguments = $arguments[0];
        }

        $messageId = explode('.', $_message, limit: 2);

        $message = $this->messages[$messageId[0]] ?? null;

        if (! $message) {
            return null;
        }

        $attributeId = $messageId[1] ?? null;

        if ($attributeId === null) {
            return $this->resolvePattern($message->value, $arguments);
        }

        foreach ($message->attributes as $attribute) {
            if ($attribute->id->name === $attributeId) {
                return $this->resolvePattern($attribute->value, $arguments);
            }
        }

        return null;
    }

    private function resolvePattern(?Pattern $pattern, array $arguments): string
    {
        $resolver = new PatternResolver($this, $arguments);

        return $resolver->resolvePattern($pattern);
    }

    /**
     * @internal
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @internal
     */
    public function usesIsolating(): bool
    {
        return $this->useIsolating;
    }

    /**
     * @internal
     */
    public function getMessage(string $message): ?Message
    {
        return $this->messages[$message] ?? null;
    }

    /**
     * @internal
     */
    public function getTerm(string $term): ?Term
    {
        return $this->terms[$term] ?? null;
    }

    /**
     * @internal
     */
    public function getFunction(string $function): ?Closure
    {
        return $this->functions[$function] ?? null;
    }

    private function numberFunction(
        int|float|FluentNumber $number,
        int|string|bool ...$options,
    ): FluentNumber {
        if (! $number instanceof FluentNumber) {
            $number = new FluentNumber($number);
        }

        return $number->setLocale($this->locale)->setOptions($options);
    }

    private function dateTimeFunction(): void
    {
        throw new Exception('DATETIME() function is not implemented.');
    }
}
