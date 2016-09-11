<?php
//use \Conexion;
//require "/src/Conexion.php";
include_once "Conexion.php";

class parcialDb{
	static $_instance;
    private $sql;
    private $dbcon;

    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    private function __construct($con = null) {
        if ($con === null) {
            $con = Conexion::getInstance();
        }
        $this->dbcon = $con;
    }

    /*Evitamos el clonaje del objeto. Patrón Singleton*/
    private function __clone(){ }

    /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance=new self();
        }
        return self::$_instance;
    }

	//Obtencion de todos los parciales
    public function obtenerParciales(){
    	$results = $this->dbCon->query("SELECT * FROM parcial;"); 
        return $results;
    }
	
	//Obtencion de un parcial por su nombre
    public function obtenerParcialPorNombre($nombreParcial){
        $this->sql = "SELECT * FROM parcial WHERE nombre = $nombreParcial;";
    	$results = $this->dbcon->query($this->sql);
        return $results;
    } 

    //Obtencion de los parciales de un determinado curso
    public function obtenerParcialesCurso($idCurso){
        $this->sql = "SELECT * FROM parcial WHERE id_curso = $idCurso;";
    	$results = $this->dbcon->query($this->sql);
        return $results;
    }

	//Obtencion de la suma de los pesos de los parciales de un determinado curso
	public function obtenerPesoTotalParcialesCurso($idCurso){
        $this->sql = "SELECT sum(peso) as pesoTotal FROM parcial WHERE id_curso = $idCurso ;";
    	$results = $this->dbcon->query($this->sql);
        return $results;
	}
	
    //Dar de alta un nuevo parcial
    public function nuevo($nombre, $idCurso, $peso) {
        $this->sql = "INSERT INTO parcial (id, nombre, id_curso, peso) VALUES (null, '$nombre', '$idCurso', '$peso');";
        $this->dbcon->query($this->sql);
    }

    //Eliminar un parcial
    public function eliminar($idParcial){
        $this->sql = "DELETE FROM parcial WHERE id = $idParcial";
        $this->dbcon->query($this->sql);
    }

}


