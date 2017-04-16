<?php namespace Models;

class Product{
    private $id;
    private $product;
    private $category;
    private $con;
    
    public function __construct() {
            $this->con=new Connection();
    }
    
    public function set($attr,$content){
            $this->$attr=$content;
    }

    public function get($attr){
        return $this->$attr;
    }
    
    public function getCategories(){
        $sql="SELECT * FROM categories";
        $data=$this->con->dataQuery($sql);
        return $data;
    }

    public function getList(){
        $sql="SELECT * FROM products";
        $data=$this->con->dataQuery($sql);
        return $data;
    }
    
    public function add(){
        $sql="INSERT INTO products (id, product, date, category)"
                . "VALUES (null, '{$this->product}', now(), '{$this->category}')";
        return $this->con->execute($sql);
    }
    
    public function delete(){
        $sql="DELETE FROM products WHERE id='{$this->id}'";
        return $this->con->execute($sql);
    }
    
    public function edit(){
        $sql="UPDATE `products` SET `product`='{$this->product}', `category`='{$this->category}' WHERE id= '{$this->id}'";
        return $this->con->execute($sql);
        
    }

    public function view(){
        $sql="SELECT * FROM products WHERE id='{$this->id}'";
        $sql2="SELECT * FROM categories";
        //con PDO
        $data['product']=  $this->con->dataQuery($sql)->fetchAll();
        $data['categories']=  $this->con->dataQuery($sql2)->fetchAll();
        //con Mysqli
        //$datos=  $this->con->dataQuery($sql)->fetch_array(MYSQLI_ASSOC);
        return $data;
    }
    
}


