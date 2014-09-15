<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link
            rel="stylesheet"
            type="text/css"
            href="Style.css"
            media="screen">
        <title> Il Canzoniere</title>
    </head>
    <body>
       
        <h1>Il Canzoniere di PIP</h1>
         <div id="menu">
            <ul>
                <li><a href="lista canzoni.html">lista canzoni</a></li>
                <li><a href="Store.html">Store</a></li>
                <li><a href="contatti.html">contatti</a></li>
            </ul>
        </div>
     
        <form action="login.php" method="POST" target="_blank">

            <input type="text" name="corto" value="utente" onfocus="this.value='';" />
            <br />

            <input type="text" name="pswd" value="password" onclick="this.type='password',this.value=''"
                   accept=""/>
            <input type="submit" value="Invio" />
            <br />
        </form>
        <?php
        
        // put your code here
        ?>
    </body>
</html>
