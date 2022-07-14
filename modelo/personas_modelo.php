<?php

    class Personas_modelo{

        private $db;

        private $personas;

        public function __construct(){

            require_once("modelo/Conectar.php");

            $this->db=Conectar::conexion();

            $this->personas=array();


            }

        public function get_personas(){

            require("modelo/paginacion.php");

            $consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $a,$b");

            while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

                $this->personas[]=$filas;
        
            }

            return $this->personas;
        }


        /*-------------------------------------------------------------------------------------*/


        public function borrar_personas(){    

           
            $id=$_GET["id"];
            $sql="DELETE FROM DATOS_USUARIOS WHERE id='$id'";
            $consulta=$this->db->prepare($sql);
            $consulta->execute(array($id));
            
            
        }


        public function actualizar_personas(){ 

            $id=$_POST["id"];
            $nombre=$_POST["nom"];
            $apellido=$_POST["ape"];
            $direccion=$_POST["dir"];
            
            $sql="UPDATE DATOS_USUARIOS SET nombre=:MInombre, apellido=:MIapellido, direccion=:MIdireccion where id=:MIid ";

            $resultado=$this->db->prepare($sql);

            $resultado->execute(array(":MIid"=>$id, ":MInombre"=>$nombre, ":MIapellido"=>$apellido, ":MIdireccion"=>$direccion));

        }


        public function insertar_personas(){ 

            $nombre=$_POST["Nom"];
            $apellido=$_POST["Ape"];
            $direccion=$_POST["Dir"];

            $sql="INSERT INTO DATOS_USUARIOS (nombre,apellido,direccion) VALUES (:n,:a,:d)"; 

            $resultado=$this->db->prepare($sql);

            $resultado->execute(array(":n"=>$nombre, ":a"=>$apellido, ":d"=>$direccion,));


        }


    }

        
        
        

    

?>