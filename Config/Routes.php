<?php namespace Config;

	class Routes{
		public $routes;

		public function routes(){
			$this->routes=array("views"=>array(
					//Put like "home page" a view
					"home"=>"welcome/index",
					"home/index"=>"welcome/index"
					
				),
				"sources"=>array(
					//Put like "home page" a source, use / at the end of the word
					//"home/"=>"Products/index",
					"Products/"=>"Products/index",
					"Products/index"=>"Products/index",
					"Products/add"=>"Products/add",
					"Products/edit"=>"Products/edit",
					"Products/delete"=>"Products/delete",
					"prueba/index"=>"Prueba/index"
				));
			return $this->routes;
		}
	}