<?php namespace Controllers;

    use Models\Product as Product;

    class ProductsController{
        
        private $products;
        
        public function __construct() {
            $this->products=new Product();
        }
        
        public function index()
        {
            $data['categories']=$this->products->getCategories();
            $data['products']=  $this->products->getList();
            return $data;
        }
        
        public function add()
        {
            if($_POST){
                $this->products->set("product", $_POST['product']);
                $this->products->set("category", $_POST['category']);
                $validate=$this->products->add();
                if(is_numeric($validate)){
                    header("Location: " .URL."products");
                }else{
                    echo $validate;
                }
            }else{
                header("Location: " .URL."products");
            }
        }
        
        public function edit($id)
        {
            
            if($_POST)
            {
                print_r($_POST);
                $this->products->set("id", $_POST['id']);
                $this->products->set("product", $_POST['product']);
                $this->products->set("category", $_POST['category']);
                $validate=$this->products->edit();
                if(is_numeric($validate)){
                    header("Location: " .URL."products");
                }else{
                    echo $validate;
                }
            }else{
                $this->products->set("id", $id);
                $data=  $this->products->view();
                return $data;
            }
        }
        
        public function delete($id)
        {
            $this->products->set("id", $id);

            $validate=$this->products->delete();
            if(is_numeric($validate)){
                header("Location: " .URL."products");
            }else{
                echo $validate;
            }
        }
        
    }

?>
