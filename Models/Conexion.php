<?php namespace Models;

    class Conexion{
        private $datos=array(
            "host"=>host,
            
//            "host"=>'hola',
            "user"=>user,
            "pass"=>pass,
            "db"=>db
        );
        private $con;
        private $state;
        public function __construct()
        {
            try {
                $this->con=new \mysqli($this->datos['host'],  $this->datos['user'],  $this->datos['pass'],  $this->datos['db']);
                $this->state = true; 
             } catch (mysqli_sql_exception $e) { 
                $this->state=false;
//                throw $e;

             }
//            return $this->state;
        }
        
        function stateConection()
        {
            return $this->con->connect_errno;
        }


        public function consultaSimple($sql){
            $this->con->query($sql);
        }
        public function consultaRetorno($sql){
            $datos=$this->con->query($sql);
            return $datos;
        }
    }

?>