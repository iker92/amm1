<?php
session_start(); 
include("config.php"); 

                 
include("header.php");  
   
        
          if(isset($_SESSION['ID'])) {
       
       print("<center><h2>Ordini</h2>");       
         
       print("Clicca sul codice dell'utente per visualizzarne il profilo");          
       
       $q_o="SELECT * from ordine";
 $risultatoo=mysqli_query($conn,$q_o);    
             
            
   print("<table align=\"center\" cellpadding=2 border=1> ") ;
   
  print("<tr><td>ID ORDER</td><td>Codice utente</td><td>Codice canzone</td><td>Titolo</td><td>Artista</td><td>Data</td><td>Prezzo</td><td>Status</td>  ") ; 
  while ($q_o=mysqli_fetch_array($risultatoo))
  
  {   $codicec=$q_o['Codice_Canzone'];
  $codiceuu=$q_o['Codice_Utente'];
  $codiceoo=$q_o['Codice'];
  $dataa=$q_o['Data'];
      $pay=$q_o['Pagata']; 
  
        
                                    
$q_c="SELECT * from canzone where Codice=$codicec";
 $risultato=mysqli_query($conn,$q_c);  
     

  while ($q_c=mysqli_fetch_array($risultato))
  
  {   $codice=$q_c['Codice'];
       $titolo=$q_c['Titolo'];
        $artista=$q_c['Artista'];
         $album=$q_c['Album'];
          $anno=$q_c['Anno'];
           $prezzo=$q_c['Prezzo'];
           
           
   print(" <tr> ");
     print(" <td>$codiceoo</td> "); 
      print(" <td><A href=\"profilo.php?codice=$codiceuu\">$codiceuu</a></td> "); 
      print(" <td>$codice</td> "); 
      print(" <td>$titolo</td> "); 
       print(" <td>$artista</td> "); 
        print(" <td>$dataa</td> "); 
        print(" <td>$prezzo €</td> ");
        
         if ($pay>0) { print(" <td>PAGATO</td> "); } else {print(" <td>NON PAGATO</td> "); }
        
       
                                       
  }   }
        print("</table><br>"); 
                 
           
        
                
                
                
  
                  }   ELSE {   print("<script>location.replace('index.php'); </script>"); }
                 
include("footer.php");   
 

            