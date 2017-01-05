<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ("assets/pdo/pdo-database.php");
   
   $dream = $_POST['dream'];
   $sqldeleterowid = $_POST['deleterowid'];
   
   if ($dream !== "") 
   {

   $database = new Database();

   // Išpildytų svajonių sąrašo papildymas 

   try
   {
      $database->query('INSERT INTO ispildytossvajones (svajone) VALUES (:dream)');
      $database->bind(':dream', $dream);
      $database->execute();

   } catch(PDOException $e)
   {
      $database->cancelTransaction();
      echo $e->getMessage();
   };
   
   // svajonės eilutės ištrynimas esamų svajonių lentelėje

      try
   {

      $database->query("DELETE FROM svajoniusarasas WHERE id =  :id");
      $database->bind(':id', $sqldeleterowid, PDO::PARAM_INT);   
      $database->execute();

   } catch(PDOException $e)
   {
      echo $e->getMessage();
   };

   $database = null;

   } else { echo "Neperduotas kintamasis ";};
   
?>
