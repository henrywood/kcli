<?php
namespace Andrey\Cli\Types;

class Param
{
    /** @var mixed $value */
    public $value;

    public string $key;
    public string $flag;
    public bool $required = false;
    public ?string $defaultValue = null;
    public ?string $helpText = null;
    public bool $isBool = false;
    
    public function __construct(
        string $key,
        string $flag,
        bool $required = false,
        ?string $defaultValue = null,
        ?string $helpText = null,
        bool $isBool = false
    ) {
        $this->key = $key;
        $this->flag = $flag;
        $this->required = $required;
        $this->defaultValue = $defaultValue;
        $this->helpText = $helpText;
        $this->isBool = $isBool;
    }

    /**
     * @param mixed $value
     */
    public function withValue($value): self
    {
        $clone = clone $this;
        $clone->value = $value;
        return $clone;
    }
}
