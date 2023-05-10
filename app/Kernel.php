<?php

namespace Dev\App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

/**
 * Symfony Kernel
 */
class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    /**
     * @inheritDoc
     */
    public function getProjectDir(): string
    {
        return \dirname(__DIR__);
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    protected function configureContainer(ContainerConfigurator $container): void
    {
        $container->import('../config/{packages}/*.yaml');
        $container->import('../config/services.yaml');
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->import('../config/routes.yaml');
    }
}
