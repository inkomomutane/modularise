<?php

namespace InkomoMutane\Modularise;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use InkomoMutane\Modularise\Commands\ModulariseCommand;

class ModulariseServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('modularise')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_modularise_table')
            ->hasCommand(ModulariseCommand::class);
    }
}
