<?php
session_start(); 
include("config.php"); 

                 
include("header.php");  
   
   $codice=$_GET['codice'];

             
          if(isset($_SESSION['ID'])) {  
            
             $q_2="UPDATE canzone SET Eliminata=1 where Codice=$codice";     
     
        $ris2=mysqli_query($conn,$q_2);

                
                print("<script>location.replace('index.php'); </script>"); 
  
                  }   ELSE {   print("<script>location.replace('index.php'); </script>"); }
                 
include("footer.php");   
 

            