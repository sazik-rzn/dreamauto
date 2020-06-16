<?php

class Core
{
    public $config = [];

    public function __construct()
    {
        $this->getConfig();
    }

    public function getUrl()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            $expl = explode('/', $_SERVER['REQUEST_URI']);
            if (isset($expl[1])) {
                return $expl[1];
            }
        }
        return 'main';
    }

    public function getConfig()
    {
        $page = $this->getUrl();
        $this->config = require(__DIR__ . "/../config/main.php");
        if (file_exists(__DIR__ . "/../config/{$page}.php")) {
            $pageConfig = require(__DIR__ . "/../config/{$page}.php");
            $this->config = array_merge($this->config, $pageConfig);
        }
    }

    public function render()
    {
        extract($this->config);
        ob_start();
        $view = $this->getConfigField('view');
        if ($view && file_exists(__DIR__ . "/../templates/{$view}.php")) {
            require __DIR__ . "/../templates/{$view}.php";
        } else {
            require __DIR__ . "/../templates/main.php";
        }
        $output = ob_get_clean();
        return $output;
    }

    public function getConfigField($name)
    {
        if (isset($this->config[$name])) {
            return $this->config[$name];
        }
        return false;
    }

    public function getClearPhone($phone){
        return preg_replace('/[\)\(\-_\s]+/', '', $phone);
    }
}

$APP = new Core();
$APP->config['APP'] = &$APP;
