<?php
session_start(); 
include("config.php"); 


include("header.php");  
   

 
       print("<center>"); 
$titolo=$_POST["titolo"];
$artista=$_POST["artista"];
$album=$_POST["album"];
$prezzo=$_POST["prezzo"];
$anno=$_POST["anno"];
    
           
$q_="INSERT INTO canzone (Titolo,Artista,Album,Anno,Prezzo,Eliminata)
     values ('$titolo','$artista','$album','$anno',$prezzo,0);";
   $ris2=mysqli_query($conn,$q_);
            
        if($ris2)
        { 
        print("<script> location.replace('index.php'); </script> <br></font>"); }
        else
        {          print("ERRORE");   print(" <BR>$titolo <BR>$artista <BR>$album<BR> $anno<BR>$prezzo");            }          
       
        
        
         
                    
                                 
                                                                     
                                  
                                 
                                  
                                  
             
                             
             
        include("down.php");   
 
       