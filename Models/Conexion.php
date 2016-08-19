<?php namespace Models;

    class Conexion{
        private $datos=array(
            "host"=>host,
            "user"=>user,
            "pass"=>pass,
            "db"=>db
        );
        private $con;
        private $state;
        public function __construct()
        {
            if(typeDB=='mysqli')
            {
                try {
                    $this->con=new \mysqli($this->datos['host'],  $this->datos['user'],  $this->datos['pass'],  $this->datos['db']);
                    $this->state = true; 
                 } catch (mysqli_sql_exception $e) { 
                    $this->state=false;
    //                throw $e;
                 }
    //            return $this->state;
            }else if(typeDB=='PDO')
            {
                try {
                    $this->con = new \PDO("mysql:dbname=".$this->datos['db'].";host=".$this->datos['host']."", $this->datos['user'], $this->datos['pass']);
                    $this->state=1;
                    
                } catch (PDOException $e) {
                    //echo 'Falló la conexión: ' . $e->getMessage();
                    echo $this->state=0;
                }
            }
        }
        
        function stateConection()
        {
            if(typeDB=='mysqli')
            {
                $error=$this->con->connect_errno;
            }
            
            if(typeDB=='PDO')
            {
                if(!$this->con){
                    $error=1;
                }else{
                    $error=0;
                }
               
            }
            return $error;
        }

        //retorna el numero de filas afectadas, usar en update, delete, insert
        public function execute($sql){
            //retornar filas afectadas si se usa PDO
            return $this->con->exec($sql);
            //retornar filas afectadas si se usa mysqli
            //$this->con->query($sql);
            //return $this->con->affected_rows;
        }
        
        //retorna los datos de la consulta, usar SELECT
        public function dataQuery($sql){
            $datos=$this->con->query($sql);
            return $datos;
        }
    }

?>