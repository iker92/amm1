<?php
session_start(); 
include("config.php"); 

                 
include("header.php");  

if(isset($_SESSION['ID']))
{
print("<script> location.replace('index.php'); </script>");  
} 
else 
{     


$user=$_POST['username'];
$password=$_POST['password'];

if($password==""||$user=="")
{
print("Dati mancanti<br>");
}
else
{
$query="SELECT * FROM utente WHERE User='$user' and Password='$password'";
$risultato=mysqli_query($conn,$query);  
if($risultato){$count=mysqli_num_rows($risultato);} else {$count=0;}
    
    if($count==0)
     {print("Dati errati");}
     else  {
          while ($utente=mysqli_fetch_array($risultato))
           {  $id=$utente['Codice'];   
              $user2=$utente['User']; 
              $livello=$utente['Livello']; }
           $_SESSION['ID'] = $id;
            $_SESSION['USER'] = $user2;
             $_SESSION['LIV'] = $livello;
            print("<script>location.replace('index.php'); </script>");
             }
                                        
     }
                                
 }                               
                                  
                                    
                                
              
?> 
<BR>      
</body>
</html> 


