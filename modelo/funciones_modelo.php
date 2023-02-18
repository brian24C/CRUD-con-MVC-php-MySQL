<?php

    class Personas_modelo{

        private $db;

        private $personas;

        public function __construct(){

            //require_once("modelo/conexion.php");
            

            $this->db=Conectar::conexion();

            $this->personas=array();


            }

        public function get_personas(){

            //require_once("modelo/paginacion.php");
            require __DIR__. "/../modelo/paginacion.php";
            $sql="SELECT * FROM contactos ORDER BY ID ASC LIMIT $a,$b";  #DATO CURIOSO PHP, si yo no pongo el "order by" entonces borrar alguna registro en la página y luego inserta un registro, ahí  verás que sucede
            $resultado=$this->db->prepare($sql);
            $resultado->execute(array($a,$b));

            while ($filas=$resultado->fetch(PDO::FETCH_ASSOC))
                $this->personas[]=$filas;                                  
            
            return $this->personas;
            

        }


        /*-------------------------------------------------------------------------------------*/


        public function borrar_personas(){    

            /*$id=$_GET["id"];
            $consulta=$this->db->query("DELETE FROM contactos WHERE id='$id'");*/

           
            $id=$_GET["id"];
            $sql="DELETE FROM contactos WHERE id='$id'";
            $consulta=$this->db->prepare($sql);
            $consulta->execute(array($id));
            
            
        }


        public function actualizar_personas(){ 

            $id=$_POST["id"];
            $apellido=$_POST["apellido"];
            $nombre=$_POST["nombre"];
            $direccion=$_POST["direccion"];
            $poblacion=$_POST["poblacion"];
            $telefono=$_POST["telefonos"];
            
            $sql="UPDATE contactos SET APELLIDOS=:MIapellido, NOMBRE=:MInombre, DIRECCION=:MIdireccion, POBLACION=:MIpoblacion, TELEFONOS=:MItelefono where ID=:MIid ";

            $resultado=$this->db->prepare($sql);

            $resultado->execute(array(":MIid"=>$id, ":MIapellido"=>$apellido, ":MInombre"=>$nombre, ":MIdireccion"=>$direccion, ":MIpoblacion"=>$poblacion, ":MItelefono"=>$telefono));

            
        }


        public function insertar_personas(){ 

            $apellido=$_POST["apellido"];
            $nombre=$_POST["nombre"];
            $direccion=$_POST["direccion"];
            $poblacion=$_POST["poblacion"];
            $telefono=$_POST["telefonos"];

            $sql="INSERT INTO contactos (apellidos,nombre,direccion,poblacion,telefonos) VALUES (:n,:a,:d,:p,:t)"; 

            $resultado=$this->db->prepare($sql);

            $resultado->execute(array(":n"=>$nombre, ":a"=>$apellido, ":d"=>$direccion,":p"=>$poblacion, ":t"=>$telefono));

        
        }

    }

        
        
        

    

?>