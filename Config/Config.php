<?php namespace Config;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Config{
    public static function init(){
        define('DS', DIRECTORY_SEPARATOR);
        // Si estuviera en el index sería así: define('ROOT', realpath(dirname(__FILE__)) . DS); ya que el __file__ es el archivo actual
        define('ROOT', realpath(dirname("../")) . DS);
        define('URL', "http://localhost/mimvc/");

        /* Conexion BD */
        define("host", "localhost");
        define("user", "root");
        define("pass", "");
        define("db", "mimvc");
    }
}
