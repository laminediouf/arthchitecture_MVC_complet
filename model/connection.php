<?php
//Connexion a la base de donnees
try
{
    $bdd=new PDO('mysql:host=localhost;dbname=annuaire_film.sql','root','');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}