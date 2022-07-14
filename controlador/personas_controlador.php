<?php

    require_once("modelo/personas_modelo.php");



    if (isset($_GET["confirmacion_borrar"])){

        $persona=new Personas_modelo();

        $borrar=$persona->borrar_personas();

    }


    if (isset($_GET["confirmacion_actualizar"]) || isset($_POST["bot_actualizar"])){


        switch (isset($_GET["confirmacion_actualizar"])){

            case TRUE:          /* En caso haya $_GET["confirmacion_actualizar"]*/
                include("vista/actualizar_view.php");
                break;   


            case FALSE:      /* en caso haya $_POST["bot_actualizar"] */
                $persona=new Personas_modelo();
                $actualizar=$persona->actualizar_personas();
                break;

        }
    }


    if (isset($_POST["cr"])){

        $persona=new Personas_modelo();

        $insertar=$persona->insertar_personas();
        
    }


/*-------------------------------------------------------------------------------------*/



    if (!isset($_GET["confirmacion_actualizar"])) {

    $persona=new Personas_modelo();

    $matrizpersonas=$persona->get_personas();


    require_once("vista/personas_view.php");  

    }






?>