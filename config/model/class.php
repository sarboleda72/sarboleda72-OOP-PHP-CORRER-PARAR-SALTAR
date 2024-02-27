<?php
class Runner
{
    // Attributes
    private $name;
    private $age;
    private $number;

    // Methods
    public function __construct($name, $age, $number)
    {
        $this->name   = $name;
        $this->age    = $age;
        $this->number = $number;
    }

    public function run()
    {
        return ["assets/img/gif/correr.gif","assets/img/gif/piso.gif"];
    }

    public function stop()
    {
        return ["assets/img/gif/parar.gif","assets/img/escenario/piso.png"];
    }

    public function jump()
    {
        return ["assets/img/gif/saltar.gif","assets/img/escenario/piso.png"];
    }
}

$runner = new Runner('Usain Bolt', 35, 105);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $botonPresionado = $_POST["boton"];
        if($botonPresionado=="correr"){
            $link=$runner->run();
        }elseif($botonPresionado=="parar"){
            $link=$runner->stop();
        }elseif($botonPresionado=="saltar"){
            $link=$runner->jump();
        }
}else{
    $link=["assets/img/gif/parar.gif","assets/img/escenario/piso.png"];
}

?>