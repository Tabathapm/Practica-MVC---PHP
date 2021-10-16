<?php
//  PARA LA CONEXIÓN A LA BASE DE DATOS
    const SERVER = "localhost";
    const DB = "prestamos";
    const USER = "root";
    const PASS = "";

//  Sistema de Gestor de Base de Datos = SGBD
//  cuando se quiera usar la bdd se usara esta variable
    const SGBD = "mysql:host=".SERVER.";dbname=".DB;

//  constantes para procesar por 'hash' o algunos encriptación
    const METHOD = "AES-256-CBC";
    const SECRET_KEY = '$PRESTAMOS@2021';
    const SECRET_ID = '123456';
