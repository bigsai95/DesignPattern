<?php

class Loader
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    /**
     * 自動載入Class功能
     * Class loader.
     */
    public function loadClass($namespace_classname)
    {
        $class_path = $namespace_classname.'.php';
        $_path_file = str_replace(array('\\', '/'), '/', $class_path);
        if (file_exists($_path_file)) {
            require_once($_path_file);
        }
    }
}

$Loader = new Loader();