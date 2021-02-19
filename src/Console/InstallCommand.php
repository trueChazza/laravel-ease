<?php

namespace Cgnetwork\Ease\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ease:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Ease';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        (new Filesystem)->ensureDirectoryExists(resource_path('js'));
        (new Filesystem)->ensureDirectoryExists(resource_path('js/pages'));
        (new Filesystem)->ensureDirectoryExists(resource_path('js/pages/ease'));

        copy(__DIR__.'/../../stubs/ease/index.vue', resource_path('js/pages/ease/index.vue'));

        $this->updateNodeScripts(function ($scripts) {
            return [
                    'ease' => 'yarn --cwd vendor/cgnetwork/ease/vite vite'
                ] + $scripts;
        });
    }

    protected static function updateNodeScripts(callable $callback)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = 'scripts';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }
}
