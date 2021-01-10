<?php

namespace Major\Fluent\Bundle\Types;

use Stringable;

class FluentNone implements Stringable
{
    public function __construct(
        protected string $value = '???',
    ) { }

    public function __toString(): string
    {
        return "{{$this->value}}";
    }
}
