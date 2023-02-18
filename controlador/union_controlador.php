<?php

    //require_once("modelo/funciones_modelo.php");
    require __DIR__. "/../modelo/conexion.php";
    
    require __DIR__. "/../modelo/funciones_modelo.php";

   
    
    if (isset($_GET["confirmacion_borrar"])){

        $persona=new Personas_modelo();

        $borrar=$persona->borrar_personas();


    }

    

    if (isset($_GET["confirmacion_actualizar"]) || isset($_POST["bot_actualizar"])){


        switch (isset($_GET["confirmacion_actualizar"])){

            case TRUE:
                //require_once("vista/actualizar_view.php");
                require __DIR__. "/../vista/actualizar_view.php";
                break;   

            case FALSE:
                $persona=new Personas_modelo();
                $actualizar=$persona->actualizar_personas();
                break;
        
        }
    }




    if (isset($_POST["crear"])){

        $persona=new Personas_modelo();

        $insertar=$persona->insertar_personas();
        

    }


/*-------------------------------------------------------------------------------------*/



    if (!isset($_GET["confirmacion_actualizar"])) {
    


    $persona=new Personas_modelo();

    $matrizpersonas=$persona->get_personas();
    
    //require("modelo/paginacion.php");
    require __DIR__. "/../modelo/paginacion.php";

    //require_once("vista/inicio_view.php");  
    require __DIR__. "/../vista/inicio_view.php";


    }






?>