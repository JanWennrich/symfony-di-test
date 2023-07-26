<?php

namespace Jan\SymfonyDiTest;

class HelloWorld
{
    public function __construct(protected FooProvider $fooProvider)
    {
    }

    public function sayHello(): void
    {
        echo $this->fooProvider->getFoo();
    }
}