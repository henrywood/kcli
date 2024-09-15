<?php
namespace Andrey\Cli\Types;

class Context
{
    public function __construct(private array $params)
    { }

    public function get(string $key): string|bool|null
    {
        return ($this->params[$key] ?? null)?->value;
    }
}
