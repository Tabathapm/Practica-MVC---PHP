<?php
    class vistasModelo{

        // ------ Modelo para obtener las vistas -----
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca = ["home", "client-list", "client-new", "client-search", "client-update", "company",
                "item-list",  "item-new", "item-search", "item-update", "reservation-list", "reservation-new",
                "reservation-pending", "reservation-reservation", "reservation-search", "reservation-update",
                "user-list", "user-new", "user-search", "user-update"];

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


