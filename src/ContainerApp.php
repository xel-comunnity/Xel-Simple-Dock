<?php

namespace Xel\Container;

use DI\Container;

interface ContainerApp
{
    public function useAutoWiring(bool $use = false);
    public function useAttributes(bool $use = false);
    public function useDefinition(array $config);
    public function build():Container;

}