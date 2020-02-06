<?php
error_reporting(-1);

require_once 'autoload.php';

var_dump(spl_autoload_functions());
spl_autoload_unregister('loadCustom');

echo "<hr>";
echo "<br>";
var_dump(spl_autoload_functions());
echo "<hr>";
echo "<br>";

//require_once ("Weapons.php");
//require_once ("echo_dump.php");
//require_once ("Equipment.php");
//require_once ("Soldier.php");
//require_once ("Commander.php");

//создаем оружие
$assault_rifle = new Weapons ("Автомат", 25, 4);
$knife = new Weapons ("Нож", 15, 2, 1);//это оружие добавляеться каждому юниту и оно изначально активно
$machine_gun = new Weapons ("Пулемет", 30, 6);
$grenade_launcher = new Weapons ("Гранатомёт ", 40, 8);
$bayonet_shovel= new Weapons ("Штыковая лопата ", 10, 2);

//создаем амуницию
$body_armor = new Equipment ("Бронежелет", 30);
$helmet = new Equipment ("Шлем", 15);

//создаем юнитов
$unit1 = new Soldier ("Петя",180);
$unit2 = new Soldier ("Вася",120);
$unit3 = new Soldier ("Коля",110);
$unit4 = new Soldier ("William",120);
$unit5 = new Soldier ("Ethan",120);
$unit6 = new Soldier ("Michael",120);
$unit7 = new Commander ("Кутузов");//командир 1
$unit8 = new Commander ("John");//командир 2
$unit9 = new Soldier ("Liam",115);
$unit10 = new Soldier ("Jacob",110);
$unit11 = new Soldier ("Рома",125);
$unit12 = new Soldier ("Витя",130);

//передаем оружие юниту
$unit1->setWeapons($assault_rifle->getWeapons());
$unit1->setWeapons($knife->getWeapons());
$unit1->setWeapons($machine_gun->getWeapons());
//передаем амуницию юниту
$unit1->setEquipment($body_armor->getEquipment());
$unit1->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit2->setWeapons($knife->getWeapons());
$unit2->setWeapons($machine_gun->getWeapons());
//передаем амуницию юниту
$unit2->setEquipment($body_armor->getEquipment());
$unit2->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit3->setWeapons($knife->getWeapons());
$unit3->setWeapons($machine_gun->getWeapons());
//передаем амуницию юниту
$unit3->setEquipment($body_armor->getEquipment());
$unit3->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit4->setWeapons($assault_rifle->getWeapons());
$unit4->setWeapons($knife->getWeapons());
$unit4->setWeapons($machine_gun->getWeapons());
//передаем амуницию юниту
$unit4->setEquipment($body_armor->getEquipment());
$unit4->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit5->setWeapons($assault_rifle->getWeapons());
$unit5->setWeapons($knife->getWeapons());
$unit5->setWeapons($machine_gun->getWeapons());
//передаем амуницию юниту
$unit5->setEquipment($body_armor->getEquipment());

//передаем оружие юниту
$unit6->setWeapons($knife->getWeapons());
//передаем амуницию юниту
$unit6->setEquipment($body_armor->getEquipment());
$unit6->setEquipment($helmet->getEquipment());


//передаем оружие юниту
$unit7->setWeapons($knife->getWeapons());
$unit7->setWeapons($grenade_launcher->getWeapons());
//передаем амуницию юниту
$unit7->setEquipment($body_armor->getEquipment());
$unit7->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit8->setWeapons($knife->getWeapons());
$unit8->setWeapons($bayonet_shovel->getWeapons());
//передаем амуницию юниту
$unit8->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit9->setWeapons($knife->getWeapons());
$unit9->setWeapons($machine_gun->getWeapons());
$unit9->setWeapons($grenade_launcher->getWeapons());
//передаем амуницию юниту
$unit9->setEquipment($body_armor->getEquipment());
$unit9->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit10->setWeapons($knife->getWeapons());
//передаем амуницию юниту
$unit10->setEquipment($body_armor->getEquipment());
$unit10->setEquipment($helmet->getEquipment());

//передаем оружие юниту
$unit11->setWeapons($knife->getWeapons());
$unit11->setWeapons($machine_gun->getWeapons());
$unit11->setWeapons($grenade_launcher->getWeapons());
$unit11->setWeapons($assault_rifle->getWeapons());
$unit11->setWeapons($bayonet_shovel->getWeapons());
//передаем амуницию юниту
$unit11->setEquipment($body_armor->getEquipment());
$unit11->setEquipment($helmet->getEquipment());

$unit11->setWeapons($knife->getWeapons());
$unit11->setWeapons($machine_gun->getWeapons());
$unit11->setWeapons($grenade_launcher->getWeapons());
$unit11->setWeapons($assault_rifle->getWeapons());
//передаем амуницию юниту
$unit11->setEquipment($helmet->getEquipment());

//создаем команды
$command1 = [$unit1, $unit2, $unit3, $unit7, $unit11, $unit12];
$command2 = [$unit4, $unit5, $unit6, $unit8, $unit9, $unit10];

while (count($command1) != 0 && count($command2) != 0) {

    $amount_of_damage1 = 0; //сумма урона наносимый командой 1
    $amount_of_damage2 = 0; //сумма урона наносимый командой 2

    $damage1;//временные переменные
    $damage2;//

    echo "<br>";
    echo "Команда 1";
    echo "<br>";
    echo "<br>";

//команда 1
    foreach ($command1 as $command) {
        echo $command->name . " Очки жизни " . $command->health;
        echo "<br>";
        echo " Нанесет урона " . $damage1 = $command->chooseWeapon();
        echo "<br>";
        echo "<br>";
        $amount_of_damage1 += $damage1;
    }
    echo "Cуммарный наносимый урон командой " . $amount_of_damage1;
    echo "<br>";
    echo "<br>";

    echo "<br>";
    echo "<br>";
    echo "Команда 2";
    echo "<br>";
    echo "<br>";

//команда 2
    foreach ($command2 as $command) {
        echo $command->name . " Очки жизни " . $command->health;
        echo "<br>";
        echo " Нанесет урона " . $damage2 =  $command->chooseWeapon();
        echo "<br>";
        echo "<br>";
        $amount_of_damage2 += $damage2;
    }
    echo "Cуммарный наносимый урон командой " . $amount_of_damage2;
    echo "<hr>";
    echo "<br>";


//считаем средний урон
    if ($amount_of_damage2 != 0) {
       $amount_of_damage2 = $amount_of_damage2 / count($command1);
       $amount_of_damage2 = intval($amount_of_damage2);
    }

    if ($amount_of_damage1 != 0) {
        $amount_of_damage1 = $amount_of_damage1 / count($command2);
        $amount_of_damage1 = intval($amount_of_damage1);
    }

//отнимаем очки жизни
    foreach ($command2 as $command) {
        $command->damageTaken($amount_of_damage1);
    }

    foreach ($command1 as $command) {
        $command->damageTaken($amount_of_damage2);
    }

//проверяем очки жизни, если 0 то удаляем с команды
    foreach ($command1 as $k => $command) {
        if ($command->health <= 0) {
            unset($command1[$k]);
        }
    }

    foreach ($command2 as $k => $command) {
        if ($command->health <= 0) {
            unset($command2[$k]);
        }
    }

}

//выводим результат
if (count($command1) != 0){
    echo "<br>";
    echo "Выграла команда 1";
    echo "<br>";
    echo "<br>";
    echo "Статистика выживших";
    echo "<br>";
    echo "<br>";
    foreach ($command1 as $command){
        echo $command->name . " Очки жизни " . $command->health;
        echo "<br>";
    }
}
if (count($command2) != 0){
    echo "<br>";
    echo "Выграла команда 2";
    echo "<br>";
    echo "<br>";
    echo "Статистика выживших";
    echo "<br>";
    echo "<br>";
    foreach ($command2 as $command){
        echo $command->name . " Очки жизни " . $command->health;
        echo "<br>";
    }
}
