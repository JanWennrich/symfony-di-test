<?php

namespace Jan\SymfonyDiTest;

class MyFooProvider implements FooProvider
{
    public function __construct(protected string $foo)
    {
    }

    public function getFoo(): string
    {
        return $this->foo;
    }
}