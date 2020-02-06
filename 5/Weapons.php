<?php
//класс оружия
class Weapons {

    public $name_gun;
    public $damage;
    public $reload_time;
    public $recharge_timer;


    public function __construct($name_gun, $damage, $reload_time, $recharge_timer = 0)
    {
        $this->name_gun = $name_gun; //название оружия
        $this->damage = $damage; //наносимый урон
        $this->reload_time = $reload_time; //время перезарядки
        $this->recharge_timer = $recharge_timer; //таймер перезарядки
    }

    public function getWeapons () {

        return Array(
            "name_gun" => $this->name_gun,
            "damage" => $this->damage,
            "reload_time" => $this->reload_time,
            "recharge_timer" => $this->recharge_timer);//передаем оружие

    }

}