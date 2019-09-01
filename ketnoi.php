<?php

$connection = pg_connect("host=ec2-54-235-208-103.compute-1.amazonaws.com port=5432 dbname=dcpimk1h3359uq user=gwsltdzfcfttmd password=1dea06845bb4e32e02ce752470895898c470c7216db4ef3f27c71155a7b0fbcd");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
