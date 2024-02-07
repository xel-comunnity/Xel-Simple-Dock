<?php

namespace Xel\Container;
use DI\Container;

class Dock
{
    private $getter;
    public function __construct
    (
        public ContainerApp $containerBuilder,
        public array $config,
    )
    {}

    public function launch(): Container
    {

        $this->containerBuilder->useAutowiring(true);
        $this->containerBuilder->useAttributes(true);

        $this->containerBuilder->useDefinition(
            $this->config
        );

       return $this->getter = $this->containerBuilder->build();

    }

    public function get(string $class): void
    {
        $this->getter->get($class);
    }

}