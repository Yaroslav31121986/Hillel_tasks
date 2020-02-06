<?php
//класс экипировка
class Equipment {
    public $equipment_name;
    public $protection_factor;

    public function __construct($equipment_name, $protection_factor)
    {
        $this->equipment_name = $equipment_name;//название экипировки
        $this->protection_factor = $protection_factor;//очки жызни которое она добавляет
    }

    public function getEquipment() {
        return Array("equipment_name" => $this->equipment_name, "protection_factor" => $this->protection_factor);
    }

}