<?php namespace Config;

    class Router{
        private static $controller;
        private static $method;
        private static $arg;
        private static $view;
        public static $pathController;

        public static function run(Request $request){
            if($request->getType()=="view"){
                if(is_readable($request->getView())){
                    $data=$request->getArg();
                    require_once $request->getView();
                }else{
                    print "<h1>".E404."<h1>";
                }
            }else if($request->getType()=="source"){
                self::$arg=$request->getArg();
                self::$controller=$request->getController();
                self::$method=$request->getMethod();
                self::$pathController=ROOT."Controllers".DS.self::$controller.".php";
                if(is_readable(self::$pathController)){
                    require_once self::$pathController;
                    $instantiate="Controllers\\".self::$controller;
                    $loadController=new $instantiate;
                    if(!isset(self::$arg)){
                        $data=call_user_func(array($loadController,self::$method));
                    }else{
                        $data=call_user_func_array(array($loadController, self::$method), self::$arg);
                    }

                    if(is_readable($request->getView())){
                        require_once $request->getView();
                    }else{
                        print "<h1>".E404."<h1>";
                    }
                }
            }else{
                print "<h1>".E404."<h1>";
            }

            
        }
        
        
    }

