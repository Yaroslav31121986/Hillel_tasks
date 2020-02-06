<?php

//spl_autoload_register('Autoload::loadFromDir');
spl_autoload_register('Autoload::loadCustom');

class Autoload
{
    public static function loadFromDir(string $name)
    {
        $path =  str_replace('\\', '/', $name) . '.php';
//        var_dump($path);
        if (file_exists($path)) {
            require_once $path;
            return true;
        }
        return false;
    }

    public static function loadCustom(string $name)
    {
        $loadClass = [

            'Weapons' => 'Manager\Weapons.php',
            'Equipment' => 'Manager\Equipment.php',
            'Soldier' => 'Manager\Soldier.php',
            'Commander' => 'Manager\Commander.php'

        ];
        if (array_key_exists($name, $loadClass)) {
//            var_dump($loadClass[$name]);
            require_once $loadClass[$name];
            return true;
        }
        return false;
    }
}

//            'Manager\User' => 'Manager.php',
//            'Manager\Weapons' => 'Weapons.php',
//            'Manager\Equipment' => 'Equipment.php',
//            'Manager\Soldier' => 'Soldier.php',
//            'Manager\Commander' => 'Commander.php'