<?php

namespace Xel\Container;

use DI\Container;
use DI\ContainerBuilder;
use Exception;

readonly class XelContainer implements ContainerApp
{
    public function __construct
    (
        private ContainerBuilder $containerBuilder
    )
    {}

    public function useAutoWiring(bool $use = false): void
    {
       if($use){
           $this->containerBuilder->useAutowiring($use);
       }
    }

    public function useAttributes(bool $use = false): void
    {
        if($use){
            $this->containerBuilder->useAttributes($use);
        }
    }

    public function useDefinition(array $config = []): void
    {
        if (isset($config)){
            $this->containerBuilder->addDefinitions(
                $config
            );
        }
    }

    /**
     * @throws Exception
     */
    public function build(): Container
    {
       return $this->containerBuilder->build();
    }
}