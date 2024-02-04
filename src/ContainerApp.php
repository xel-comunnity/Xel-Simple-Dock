<?php

namespace Xel\Container;

interface ContainerApp
{
    public function useAutoWiring(bool $use = false);
    public function useAttributes(bool $use = false);
    public function useDefinition(array $config);
    public function build();

}