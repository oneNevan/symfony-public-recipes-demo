<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Yiisoft\Validator\Validator;
use Yiisoft\Validator\ValidatorInterface;

return static function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()
        ->defaults()
            ->autowire()
            ->autoconfigure();

    // configure service container according to your needs...

    $services->set(ValidatorInterface::class, Validator::class);
};
