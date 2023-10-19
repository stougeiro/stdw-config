<?php declare(strict_types=1);

    namespace STDW\Config\Handler;

    use STDW\Contract\ConfigHandlerInterface;
    use STDW\Config\Exception\ItemNotFoundException;


    class NullHandler extends ConfigHandlerInterface
    {
        private static array $collection = [];


        public function __construct()
        { }


        public function get(string $item): mixed
        {
            return null;
        }
    }