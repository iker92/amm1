

   	</div>
			<div class="col2">
              <?php
              if(isset($_SESSION['ID'])) {
            
               $livello=$_SESSION['LIV'];
              $user2=$_SESSION['ID'];
              $nomeu=$_SESSION['USER'];
            
              if($livello>1) {
              
              print("<H3>ADMIN CONNESSO</H3>");
              print("<a href=\"ordini.php\">Vedi ordini</a><br>");
              print("<a href=\"aggiungi_canzone.php\">Aggiungi canzone</a><br>");
                     print("<A href=\"index.php\">HOME</a><br>");    
                    print("<A href=\"logout.php\">logout</a><br>");        
                          
                            }
           else 
          {
            
   $q_ut="SELECT * from utente where Codice=$user2";
  $risultatout=mysqli_query($conn,$q_ut);
   
  while ($q_ut=mysqli_fetch_array($risultatout))
  
  {   $codice=$q_ut['Codice'];
       $usern=$q_ut['User'];
        $email=$q_ut['Email'];
     
            $indirizzo=$q_ut['Indirizzo'];
            $telefono=$q_ut['Cellulare'];
                                     
  }
     
        
              print("<H3><u>$nomeu</u> connesso</H3>");
               print("<H3>Email:$email <br> $indirizzo <br> $telefono</H3>");
              // print("<A href=\"index.php\">HOME</a><br>"); 
                print("<A href=\"index.php\">HOME</a><br>");      
              print("<A href=\"logout.php\">Logout</a>");
                
           }     } else {}
              ?>

	</div>
  
  
			<div class="col3">
			
       <?PHP
             if(isset($_SESSION['ID'])) {     if($livello<2) {
  $q_o="SELECT * from ordine where Codice_Utente=$user2";
 $risultatoo=mysqli_query($conn,$q_o);  
     
                                                  
   print("<h2>CARRELLO<hr></h2> "); 
                                        
  print("<table align=\"center\" cellpadding=2 border=1> ") ;
   
  print("<tr><td>ID ORDER</td><td>Titolo</td><td>Artista</td><td>Prezzo</td><td>Status</td>  ") ; 
  while ($q_o=mysqli_fetch_array($risultatoo))
  
  {   $codicec=$q_o['Codice_Canzone'];
  $codiceoo=$q_o['Codice'];
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
      print(" <td>$titolo</td> "); 
       print(" <td>$artista</td> "); 
        print(" <td>$prezzo €</td> ");
        
         if ($pay>0) { print(" <td>OK</td> "); } else {print(" <td><A href=\"paga.php?codice=$codiceoo\">Paga</a></td> "); }
        
       
                                       
  }   }
        print("</table><br>"); 
      
                  } else {}           } else {}
              ?>
      
      
      
			</div>
      
      
		</div>
	</div>
</div>
<div id="footer">
<center>	<p> <b>Alessio Pili</p>
</div>

</body>
</html>
