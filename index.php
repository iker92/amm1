<?php
session_start(); 
include("config.php"); 


include("header.php");  
       
        
 $livello=0;
$user2=0;
?> <center><?php
           
            if(isset($_SESSION['ID'])) {
            
               
              $livello=$_SESSION['LIV'];
              $user2=$_SESSION['ID'];
              $nomeu=$_SESSION['USER'];
            
            
              if($livello>1) {    
                          
                          
                
$q_c="SELECT * from canzone where Eliminata=0";
 $risultato=mysqli_query($conn,$q_c);  
     
                                                  
   print("<h2>CANZONI<hr></h2> Clicca sull'ID della canzone per cancellarla "); 
  print("<table align=\"center\" cellpadding=2 border=1> ") ;
   
  print("<tr><td>ID</td><td>Titolo</td><td>Artista</td><td>Album</td><td>Anno</td><td>Prezzo</td> ") ; 
  while ($q_c=mysqli_fetch_array($risultato))
  
  {   $codice=$q_c['Codice'];
       $titolo=$q_c['Titolo'];
        $artista=$q_c['Artista'];
         $album=$q_c['Album'];
          $anno=$q_c['Anno'];
           $prezzo=$q_c['Prezzo'];
           
   print(" <tr> ");
     print(" <td><A href=\"cancella.php?codice=$codice\">$codice</a></td> "); 
      print(" <td>$titolo</td> "); 
       print(" <td>$artista</td> "); 
        print(" <td>$album</td> "); 
         print(" <td>$anno</td> ");
        print(" <td>$prezzo €</td> ");
         
                                       
  }
        print("</table><br>"); 
  
  
        print("<br>");     
                
                
          }
           else 
          {
            
            
                      
$q_c="SELECT * from canzone where Eliminata=0";
 $risultato=mysqli_query($conn,$q_c);  
     
                                                  
   print("<h2>CANZONI<hr></h2> Clicca sull'ID della canzone per aggiungerla al carrello "); 
  print("<table align=\"center\" cellpadding=2 border=1> ") ;
   
  print("<tr><td>ID</td><td>Titolo</td><td>Artista</td><td>Album</td><td>Anno</td><td>Prezzo</td> ") ; 
  while ($q_c=mysqli_fetch_array($risultato))
  
  {   $codice=$q_c['Codice'];
       $titolo=$q_c['Titolo'];
        $artista=$q_c['Artista'];
         $album=$q_c['Album'];
          $anno=$q_c['Anno'];
           $prezzo=$q_c['Prezzo'];
           
   print(" <tr> ");
     print(" <td><A href=\"ordina.php?codice=$codice\">$codice</a></td> "); 
      print(" <td>$titolo</td> "); 
       print(" <td>$artista</td> "); 
        print(" <td>$album</td> "); 
         print(" <td>$anno</td> ");
        print(" <td>$prezzo €</td> ");
         
                                       
  }
        print("</table><br>"); 
  
  
        print("<br>");     
            
            
         
                
           }
              
              
              
  } ELSE 
  {
              
           
              
            ?>        <center><H2> Benvenuto, Accedi per continuare.</H2>
            <form action="login.php" method="post">
            <table align="center"><tr>
            <tr align="right"><td><font size="4">Username</font></td><td> <input type="text" name="username" size="10"></td>
            <tr><td><font size="4">Password</font></td><td> <input type="password" name="password" size="10"> </td>
            </table><center><button type="submit"> VAI </button> </center>
            </form>
            <?php  
     }
            ?>
 
               <?php
include("down.php");   
 

               ?>