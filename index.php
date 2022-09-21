<?php

use Ramsey\Uuid\Uuid;
use Symfony\Component\Dotenv\Dotenv;
use Vehicule\Car;
require_once './vendor/autoload.php';
require_once('./Classes/User.php');
require_once('./Classes/Car.php');

$user1 = new User('mohamed',87);

dump($user1);


$uuid = Uuid::uuid4();


printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
   $uuid->getFields()->getVersion()
);

echo "<br>";
$faker = Faker\Factory::create();

echo $faker->name();

echo "<br>";
echo $faker->safeEmail();
echo "<br>";
echo $faker->text();

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

echo "<br>";


echo 'Le nom dans le .env est '.$_ENV["NAME"] . '!';

echo "<br>";
$citroen = new Car();
dump($citroen);



?>