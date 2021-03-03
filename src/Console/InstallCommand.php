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
        (new Filesystem)->ensureDirectoryExists(resource_path('js/laravel'));
        (new Filesystem)->ensureDirectoryExists(resource_path('js/laravel/ease'));
        (new Filesystem)->ensureDirectoryExists(resource_path('js/laravel/ease/example'));

        copy(__DIR__.'/../../stubs/laravel/ease/index.vue', resource_path('js/laravel/ease/index.vue'));
        copy(__DIR__.'/../../stubs/laravel/ease/example/index.vue', resource_path('js/laravel/ease/example/index.vue'));

        $this->updateJsonFile('package.json', 'scripts', function($scripts) {
            return [
                    'ease:install' => 'yarn --cwd vendor/cgnetwork/ease/vite',
                    'ease' => 'yarn --cwd vendor/cgnetwork/ease/vite vite'
                ] + $scripts;
        });
    }

    public static function updateJsonFile(string $filePath, string $configurationKey, callable $callback)
    {
        if (! file_exists(base_path($filePath))) {
            return;
        }

        $packages = json_decode(file_get_contents(base_path($filePath)), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        self::updateFileContents($filePath, $packages);
    }

    public static function updateFileContents(string $filePath, array $content)
    {
        file_put_contents(
            base_path($filePath),
            json_encode($content, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }
}
