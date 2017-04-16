<?php namespace Config;
require './Config/Routes.php';
    class Request{

        private $first;
        private $second;

        private $controller;
        private $method;
        private $arg;
        
        private $view;
        private $RealUrlController;
        private $type;


        public function __construct() {

            $routes=new Routes();

            if(isset($_GET['url'])){
                $uri=  filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $uri=  explode("/", $uri);
                $uri=  array_filter($uri);
                if($uri[0] =="index.php"){
                    $this->first="home";
                }else{
                    $this->first=  strtolower(array_shift($uri));
                }
                
                $secondTemp=$this->second= strtolower(array_shift($uri));
                if(!$this->second){
                    $this->second="index";
                }
                $this->arg= $uri;
            }else{
                $this->first="home";
                $this->second="";
                //$this->arg="";
            }

            foreach($routes->routes()['views'] as $keyPref=>$valueRoute){
                if(@$secondTemp==""){
                    $this->second="";
                    //echo "<br/>".strtolower($keyPref);
                    //echo "<br/>".strtolower($this->first);
                    if(strtolower($keyPref)==strtolower($this->first)){
                        $this->type="view";
                        $this->view=ROOT."Views".DS.$valueRoute.".php";
                        continue;
                    }{
                        //echo "no es view";
                    }
                }else{

                    //echo "<br/>".strtolower($keyPref);
                    //echo "<br/>".strtolower($this->first."/".$this->second);
                    if(strtolower($keyPref)==strtolower($this->first."/".$this->second)){
                        $this->type="view";
                        $this->view=ROOT."Views".DS.$valueRoute.".php";
                        continue;
                    }{
                        //echo "no es view";
                    }
                }
                
            }

            if($this->type!="view"){
                foreach($routes->routes()['sources'] as $keyPref=>$valueRoute){
                    if(strtolower($keyPref)==strtolower($this->first."/".$this->second)){

                        //echo strtolower($keyPref);
                        $this->type="source";
                        $this->view=ROOT."Views".DS.$valueRoute.".php";
                        $parseUri=explode("/", $valueRoute);
                        $this->controller=$parseUri[0]."Controller";
                        $this->method=$parseUri[1];
                        //$this->RealUrlController=$keyPref;
                        continue;
                    }else{
                        //echo "no es source";
                    }
                }
            }

        }
        

        public function getView(){
            return $this->view;
        }

        public function getType(){
            return $this->type;
        }

        public function getController(){
            return $this->controller;
        }
        
        public function getMethod(){
            return $this->method;
        }
        
        public function getArg(){
            return $this->arg;
        }
    }

?>

