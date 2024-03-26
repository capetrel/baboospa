<?php

namespace App;

use Dotenv\Dotenv;

class App
{

    private string $basepath;
    protected object $config;

    public function __construct()
    {
        $this->basepath = dirname(__DIR__);

        $dotenv = Dotenv::createImmutable($this->basepath);
        $dotenv->safeLoad();

        $this->config = (object) include $this->basepath . DIRECTORY_SEPARATOR . 'config'. DIRECTORY_SEPARATOR . 'app.php';

        if($this->config->debug) {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }

    public function getConfig(): object
    {
        return $this->config;
    }

    public function viteAssets(string $mainJsFile = 'resources/js/main.js', bool $noJS = false): string
    {
        if($this->config->debug) {
            return <<<HTML
                <script type="module" src="http://localhost:5173/assets/@vite/client"></script>
                <script type="module" src="http://localhost:5173/assets/{$mainJsFile}"></script>
            HTML;
        } else {
            $manifest = json_decode(
                file_get_contents($this->basepath . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . '.vite' . DIRECTORY_SEPARATOR . 'manifest.json'),
                true
            );
            if($noJS) {
                return <<<HTML
                    <link rel="stylesheet" href="/assets/{$manifest[$mainJsFile]['css'][0]}">
                HTML;
            } else {
                return <<<HTML
                    <script type="module" src="/assets/{$manifest[$mainJsFile]['file']}"></script>
                    <link rel="stylesheet" href="/assets/{$manifest[$mainJsFile]['css'][0]}">
                HTML;
            }
        }
    }
}
