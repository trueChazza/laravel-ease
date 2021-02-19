<?php

namespace Cgnetwork\Ease\Tests\Unit;

use Cgnetwork\Ease\Console\InstallCommand;
use Cgnetwork\Ease\Tests\TestCase;

class InstallCommandTest extends TestCase
{
    protected string $filePath = 'tests/stubs/package.json';

    protected array $content;

    protected function setUp(): void
    {
        parent::setUp();

        $this->content = json_decode(file_get_contents(base_path('tests/stubs/package.json')), true);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        InstallCommand::updateFileContents($this->filePath, $this->content);
    }

    public function test_it_can_update_node_scripts()
    {
        InstallCommand::updateNodeScripts('tests/stubs/package.json', function($scripts) {
            return [
                'someKey' => 'someValue'
            ] + $scripts;
        });

        $updated = json_decode(file_get_contents(base_path('tests/stubs/package.json')), true);

        $this->assertEquals([
            "scripts" => [
                "dev" => "npm run development",
                "someKey" => "someValue"
            ]
        ], $updated);
    }
}
