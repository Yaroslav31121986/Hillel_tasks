<?php
class Worker {

    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        if($this->checkAge($age))
        {
            $this->age = $age;
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }
    //метод который будет проверять возраст на корректность (от 1 до 100 лет)
    private function checkAge ($age)
    {
        if ($age >=1 && $age <= 100)
        {
            return true;
        } else {
            return false;
        }
    }
}

$ivan = new Worker();
$vasya = new Worker();

$ivan->setName("Иван");
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasya->setName("Вася");
$vasya->setAge(26);
$vasya->setSalary(2000);

$sumSalary += $ivan->getSalary();
$sumSalary += $vasya->getSalary();

echo "Сумма зарплат Ивана и Васи " . $sumSalary;

$sumAge += $ivan->getAge();
$sumAge += $vasya->getAge();

echo "<br>";
echo "Сумма возрастов Ивана и Васи " . $sumAge;
echo "<br>";

//функцию которая будет выводить Имя и возраст
function getNameAge (Worker $nameAge)
    {
        echo "Возраст " . $nameAge->getName() . " " . $nameAge->getAge();
    }

getNameAge ($ivan);
echo "<br>";
getNameAge ($vasya);