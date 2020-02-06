<?php
class Commander extends Soldier{

    public function __construct($name)
    {
        $this->name = $name;
        $this->health = 110;
        $this->weapons[] = Array("name_gun"=>"Пистолет", "damage"=>20, "reload_time"=>3, "recharge_timer"=>0);
    }
}