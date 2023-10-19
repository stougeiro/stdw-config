<?php declare(strict_types=1);

    namespace STDW\Config\Provider;

    use STDW\Contract\ContainerInterface;
    use STDW\Contract\ServiceProviderAbstracted;
    use STDW\Contract\ConfigInterface;
    use STDW\Contract\ConfigHandlerInterface;
    use STDW\Config\Config;
    use STDW\Config\Handler\NullHandler;


    class ConfigServiceProvider extends ServiceProviderAbstracted
    {
        public function __construct(ContainerInterface $container)
        {
            parent::__construct($container);
        }


        public function register(): void
        {
            $this->container->singleton(ConfigHandlerInterface::class, NullHandler::class);
            $this->container->singleton(ConfigInterface::class, Config::class);
        }

        public function boot(): void
        {
        }

        public function terminate(): void
        {
        }
    }