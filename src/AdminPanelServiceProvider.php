<?php

namespace Cart53\AdminPanel;

use Cart53\AdminPanel\Commands\AdminPanelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AdminPanelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('adminpanel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_adminpanel_table')
            ->hasCommand(AdminPanelCommand::class);
    }
}
