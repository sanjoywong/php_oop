<?php

namespace Ceppic;

class User{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo "C'est ceppic user";
    }

}


?>