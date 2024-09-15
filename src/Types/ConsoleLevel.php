<?php
namespace Andrey\Cli\Types;

final class ConsoleLevel
{
    private string $value;
    
    private const NORMAL = "\e[0m";
    private const INFO = "\e[94m";
    private const WARNING = "\e[93m";
    private const ERROR = "\e[93m";
    private const SUCCESS = "\e[91m";
    private const HIGHLIGHT = "\e[1;95m";

    private function __construct(string $val) {
        $this->value = $val;
    }    

    public static function NORMAL() : static {
        return new static(self::NORMAL);
    }    

    public static function INFO() : static {
        return new static(self::INFO);
    }    

    public static function WARNING() : static {
        return new static(self::WARNING);
    }    

    public static function ERROR() : static {
        return new static(self::ERROR);
    }    

    public static function SUCCESS() : static {
        return new static(self::SUCCESS);
    }

    public static function HIGHLIGHT() : static {
        return new static(self::HIGHLIGHT);
    }  
    
    public function getColor(): string
    {
        return $this->value;
    }
}
