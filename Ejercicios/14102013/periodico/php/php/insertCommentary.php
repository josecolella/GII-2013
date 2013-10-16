<?php
        //ini_set('display_errors', true);
        //error_reporting(E_ALL);
        /**
         * Este script habilita la inserción de comentarios
         *
         * @author Jose Miguel Colella <josecolella@correo.ugr.es>
         * @version 1.0
         */
        session_start();

        include_once('Commentary.php');
        $commentary = new Commentary();
        $commentary->connect();

            //Si el usuario esta conectado insertamos
            //el correspondiente comentario, con el
            //usuario y la fecha
        if(isset($_SESSION['username'])) {
            if(isset($_POST["post-text"]) && !empty($_POST["post-text"]) && $_POST["post-text"] != "") {
                date_default_timezone_set('Europe/Madrid');
                $date = new DateTime();
                $commentary->insertCommentary($_SESSION['username'],$date->format('Y-m-d H:i:s'), $_POST["post-text"]);

                $url = '../internacional/Compromiso_llegado_creacion_gobierno_20130427.php';

                header( "Location: $url" );

            }
            else
                echo "<script>alert('Los comentarios no pueden estar vacios'); location.href='../internacional/Compromiso_llegado_creacion_gobierno_20130427.php';</script>";
        }
        else
            echo "<script>alert('Solo usuarios registrados pueden hacer comentarios'); location.href='../internacional/Compromiso_llegado_creacion_gobierno_20130427.php';</script>";

        $commentary->close();



?>