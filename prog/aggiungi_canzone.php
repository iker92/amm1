<?php
session_start(); 
include("config.php"); 


include("header.php");  
   
?>
       <center> <H2>Inserimento canzone</H2> 
                         <form action="canzone2.php" method="post">
    	                               <center>
                  <table align="center">
        <tr><td>Titolo :</td><td><input type="text" name="titolo"></td>
        <tr><td>Artista :</td><td> <input type="text" name="artista"></td>        
         <tr><td>Album :</td><td><input type="text" name="album"></td>
         <tr><td>Anno :</td><td><input type="text" name="anno"></td>
            <tr><td>Prezzo :</td><td><input type="text" name="prezzo"></td>
           </table>
        
                    
<br>
 <button type="submit">
              AGGIUNGI
               </button>
              </form> 
              
     
        
   <?php           
   include("footer.php");   
 
  