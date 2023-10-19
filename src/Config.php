<?php declare(strict_types=1);

    namespace STDW\Config;

    use STDW\Contract\ConfigInterface;
    use STDW\Contract\ConfigHandlerInterface;


    class Config extends ConfigInterface
    {
        protected ConfigHandlerInterface $handler;


        public function __construct(ConfigHandlerInterface $handler)
        {
            $this->handler = $handler;
        }


        public function get(string $path): mixed
        {
            return $this->handler->get($path);
        }
    }