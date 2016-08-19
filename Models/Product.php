<?php namespace Models;

class Product{
    private $id;
    private $product;
    private $con;
    
    public function __construct() {
            $this->con=new Conexion();
    }
    
    public function set($atributo,$contenido){
            $this->$atributo=$contenido;
    }

    public function get($atributo){
        return $this->atributo;
    }
    
    public function getList(){
        $sql="SELECT * FROM products";
        $datos=$this->con->dataQuery($sql);
        return $datos;
    }
    
    public function add(){
        $sql="INSERT INTO products (id, product)"
                . "VALUES (null, '{$this->product}')";
        return $this->con->execute($sql);
    }
    
    public function delete(){
        $sql="DELETE FROM products WHERE id='{$this->id}'";
        return $this->con->execute($sql);
    }
    
    public function edit(){
        $sql="UPDATE `products` SET `product`='{$this->product}' WHERE id= '{$this->id}'";
        return $this->con->execute($sql);
        
    }

    public function view(){
        $sql="SELECT * FROM products WHERE id='{$this->id}'";
        //con PDO
        $datos=  $this->con->dataQuery($sql)->fetchAll();
        //con Mysqli
        //$datos=  $this->con->dataQuery($sql)->fetch_array(MYSQLI_ASSOC);
        return $datos;
    }
    
}


