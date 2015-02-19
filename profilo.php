<?php
session_start(); 
include("config.php"); 

                 
include("header.php");  
   
        
          if(isset($_SESSION['ID'])) {
        $codice=$_GET['codice'];
       print("<center><h2>Profilo</h2>");       
                    
 $q_ut="SELECT * from utente where Codice=$codice";
 $risultatout=mysqli_query($conn,$q_ut);
   print("<table align=\"center\" cellpadding=2 border=1> ") ;
   
  print("<tr><td>Username</td><td>Email</td><td>Indirizzo</td><td>Telefono</td> ") ; 
  while ($q_ut=mysqli_fetch_array($risultatout))
  
  {   $codice=$q_ut['Codice'];
       $usern=$q_ut['User'];
        $email=$q_ut['Email'];
            $indirizzo=$q_ut['Indirizzo'];
            $telefono=$q_ut['Cellulare'];
  
   print(" <tr> ");
    // print(" <td><a href=\"\">   </A></td> "); 
     print(" <td>$usern</td> "); 
      print(" <td>$email</td> "); 
        print(" <td>$indirizzo</td> ");
        print(" <td>$telefono</td> ");
         
                                       
  }
        print("</table><br>"); 
                 
           
        
                
                
                
  
                  }   ELSE {   print("<script>location.replace('index.php'); </script>"); }
                 
include("down.php");   
 

            