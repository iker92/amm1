<?php
session_start(); 
include("config.php"); 

                 
include("header.php");  
   
   $codice=$_GET['codice'];

             
          if(isset($_SESSION['ID'])) {
            $data=(date("Y-m-d"));    
            $user2=$_SESSION['ID'];    
            
             $q_2="INSERT INTO ordine (Codice_Canzone,Codice_Utente,Data,Pagata)      
      values ($codice,$user2,'$data',0);";
        $ris2=mysqli_query($conn,$q_2);

                
                print("<script>location.replace('index.php'); </script>"); 
  
                  }   ELSE {   print("<script>location.replace('index.php'); </script>"); }
                 
include("footer.php");   
 

            