<?php namespace Controllers;

    use Models\Product as Product;

    class productsController{
        
        private $products;
        
        public function __construct() {
            $this->products=new Product();
        }
        
        public function index()
        {
            $datos=  $this->products->getList();
            return $datos;
        }
        
        public function add()
        {
            if($_POST){
                $this->products->set("product", $_POST['product']);
                $this->products->add();
                header("Location: " .URL."products");
            }else{
                header("Location: " .URL."products");
            }
        }
        
        public function edit($id)
        {
            if($_POST)
            {
                $this->products->set("id", $_POST['id']);
                $this->products->set("product", $_POST['product']);
                $this->products->edit();
                header("Location: " .URL."products");
            }else{
                $this->products->set("id", $id);
                $datos=  $this->products->view();
                return $datos;
            }
        }
        
        public function delete($id)
        {
            $this->products->set("id", $id);
            $this->products->delete();
            header("Location: ".URL."products");
        }
        
    }

?>
