<?php
    require './Config/Config.php';
    Config\Config::init();
    require_once './Config/Autoload.php';
    Config\Autoload::run();
    
    //Verificar si se usara BD
    if(useDB==true)
    {
        //Ver estado conexion de BD
        require './Models/Connection.php';
        $conexion=new Models\Connection();
        if($conexion->stateConection()>0){
            echo "<h1>".EDBConnection."</h1>";
        }else{
            require_once './Views/template.php';
            Config\Router::run(new Config\Request());
        }
    }else if(useDB==false)
    {
        require_once './Views/template.php';
        Config\Router::run(new Config\Request());
    }
    
    
    
    /*$esc=new Models\Estudiante();
    $esc->set("id", 1);
    $datos=$esc->view();
    print $datos['nombre'];*/
?>
