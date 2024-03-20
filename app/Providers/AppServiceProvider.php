<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->fixPermissionOnPrivateDirectory();
    }

    private function fixPermissionOnPrivateDirectory()
    {
        $directoryPath = config('private_directory');

        if (! $directoryPath || ! is_readable($directoryPath)) {
            return;
        }

        $worldHasExecuteBit = fileperms($directoryPath) & 0x0001;

        if (! $worldHasExecuteBit) {
            chmod($directoryPath, '0711');
        }
    }
}
