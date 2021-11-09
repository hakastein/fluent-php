<?php

namespace Major\Fluent\Tests\Bundle\Resolver\Terms;

use Major\Fluent\Tests\TestCase;
use PHPUnit\Framework\Attributes\TestDox;

final class ReferencesAndCallsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->bundle->addFtl(<<<'ftl'
            -bar = Bar
            term-ref = { -bar }
            term-call = { -bar() }
            ftl);
    }

    #[TestDox('terms can be referenced without parens')]
    public function testNoParams(): void
    {
        $this->assertTranslation('Bar', 'term-ref');
    }

    #[TestDox('terms can be parameterized')]
    public function testParams(): void
    {
        $this->assertTranslation('Bar', 'term-call');
    }
}
