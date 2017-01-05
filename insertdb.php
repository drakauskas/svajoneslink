<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ("assets/pdo/pdo-database.php");

   
   $dream = $_POST['dream'];
   
   if ($dream !== "")
   {

   $database = new Database();

   try
   {

      $sql = "SELECT lastid FROM settings WHERE id=1";
      $database->query ($sql);
      $sqlrow = $database->single();   
      $lastdreamid = $sqlrow['lastid'];
      $lastdreamid++;

      $database->query('INSERT INTO svajoniusarasas (svajone) VALUES (:dream)');
      $database->bind(':dream', $dream);
      $database->execute();


      $database->query('UPDATE settings SET lastid = :lastid WHERE id=1');
      $database->bind(':lastid', $lastdreamid);
      $database->execute();

   } catch(PDOException $e)
   {
      $database->cancelTransaction();
      echo $e->getMessage();
   };
   
   $database = null;

   } else { echo "Neperduotas kintamasis ";};
   
?>