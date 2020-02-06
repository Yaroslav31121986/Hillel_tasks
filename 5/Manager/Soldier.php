<?php
class Soldier
{
//класс солдат
    public $health; //очки жизни
    public $weapons = [];//арсенал
    public $equipment = [];//экипировка
    public $name; //имя
    public $variable; //временная переменная

    public function __construct($name,$health){
        $this->health = $health;
        $this->name = $name;
    }

    public function setWeapons($weapon){//добавляем оружие в наш арсенал
        $this->weapons[] = $weapon;
    }

    public function setEquipment($equipment){//добавляем экипировку
        $this->equipment[] = $equipment["equipment_name"];//добавляем экипировку в рюкзак
        $this->health += $equipment["protection_factor"];//увеличиваем очки жизни которые добавляет нам экипировка
    }

    public function chooseWeapon(){

        $this->variable =0;

        for ($i = 0; $i <= count($this->weapons)-1; $i++){
            $this->weapons[$i]["recharge_timer"]++;

            if($this->weapons[$i]["recharge_timer"] == $this->weapons[$i]["reload_time"]){
                $this->weapons[$i]["recharge_timer"] = 0;
                $this->variable = $this->weapons[$i]["damage"];
            }
        }

        return $this->variable;
    }

    public function damageTaken($damage){

        $this->health -= $damage;

    }

}
