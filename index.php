<?php
// rtrim(), array_keys(), implode()
//1. создание отдельных переменных
$name = "Миша";
$surname = "Иванов";


echo $name;
echo $name;
echo $name;

echo $surname;

//2. Как объединить разные переменные, чтобы компьютер понял, что они относятся к чему-то целостному =  создать массив

$name_2 = "Миша2";
$surname_2 = "Иванов2";

$person = [
    "name" => "Миша22",
    "surname" => "Иванов22"
];
echo $name_2;
echo $person['name'];

//3. Действия

echo 'Привет';
echo 'Как дела?';

//3. Действия = объединить действия в отдельную функцию

function sayHello()
{
    echo "Привет";
    echo "Как дела?";
}
sayHello();

//4. Действия и переменные связать и добавить к целостному = создать класс

class Person
{
    public $name_4 = "Миша";
    public $surname_4 = "Иванов";
    
    function sayHello_4()
    {
        echo 'Привет';
        echo 'Как дела?';
    }
}
$user = new Person;
echo $user->name_4;
$user->sayHello_4();
$user->name_44='Oleg';
echo $user->name_44;
?>
