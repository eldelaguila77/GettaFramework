<?php namespace Controllers;
    
    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;
    
    class secciones{
        
        
        private $seccion;
        
        public function __construct() {
            
            $this->seccion=new Seccion();
        }


        public function listarSecciones()
        {
            $datos= $this->seccion->listar();
            return $datos;
        }
    }
    
    class estudiantesController{
        
        private $estudiante;
        private $secciones;
        
        public function __construct() {
            $this->estudiante=new Estudiante();
            $this->secciones= new secciones();
        }
        
        public function index()
        {
            $datos=  $this->estudiante->listar();
            return $datos;
        }
        
        public function agregar()
        {
            if(!$_POST)
            {
                //$datos=  $this->seccion->listar();
                $datos=  $this->secciones->listarSecciones();
                return $datos;
            }else{
                $permitidos=array("image/jpeg","image/png","image/gif", "image/jpg");
                $limite=700;
                if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size']<=$limite*1024)
                {
                    $nombre=date('is').$_FILES['imagen']['name'];
                    $ruta="Views".DS."template".DS."img".DS.$nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    $this->estudiante->set("nombre", $_POST['nombre']);
                    $this->estudiante->set("edad", $_POST['edad']);
                    $this->estudiante->set("promedio", $_POST['promedio']);
                    $this->estudiante->set("imagen", "img/".$nombre);
                    $this->estudiante->set("seccion", $_POST['id_seccion']);
                    $this->estudiante->add();
                    header("Location: " .URL."estudiantes");
                }
            }
        }
        
        
        
//        public static function listarSecciones()
//        {
//            $datos=  $this->seccion->listar();
//            return $datos;
//        }
        
        public function editar($id)
        {
            if(!$_POST)
            {
                $this->estudiante->set("id", $id);
                $datos=  $this->estudiante->view();
                $regreso['datos']=$datos;
                //$regreso['secciones']=$this->secciones=  $this->seccion->listar();
                //$regreso['secciones']=  self::listarSecciones();
                $regreso['secciones']= $this->secciones->listarSecciones();
                return $regreso;
            }else{
                $this->estudiante->set("id", $_POST['id']);
                $this->estudiante->set("nombre", $_POST['nombre']);
                $this->estudiante->set("edad", $_POST['edad']);
                $this->estudiante->set("promedio", $_POST['promedio']);
                $this->estudiante->set("seccion", $_POST['id_seccion']);
                $this->estudiante->edit();
                header("Location: ".URL."estudiantes");
            }
        }
        
        public function ver($id)
        {
            $this->estudiante->set("id", $id);
            $datos=  $this->estudiante->view();
            return $datos;
        }
             
        public function eliminar($id)
        {
            $this->estudiante->set("id", $id);
            $this->estudiante->delete();
            header("Location: ".URL."estudiantes");
        }
        
    }
    //$estudiantes=new estudiantesController();

?>

