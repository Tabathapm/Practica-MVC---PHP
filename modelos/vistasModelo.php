<?php
    class vistasModelo{

        // ------ Modelo para obtener las vistas -----
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca = ["home", "client-list"];

            if (in_array($vistas, $listaBlanca)){ //Si está dentro de nuestra lista de permitidos
                if (is_file("./vistas/contenidos/".$vistas."-view.php")){ //si encuentra este archivo
                    $contenido = "./vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido = "404";
                }
            }elseif ($vistas == "login" || $vistas == "index"){
                // si es igual a 'login' o 'index' lo lleva a 'login'
                $contenido = "login";
            }else{
                $contenido = "404";
            }
            return $contenido;
        }
    }