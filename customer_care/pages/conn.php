<?php

  try{
        $bdd = new PDO("mysqli:host = localhost;dbname = chat","root","");
    }catch(Exception $e){

    	die("ERROR : ".$e->getMessage());
    }


  ?>