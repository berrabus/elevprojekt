<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Logga in</title>
    
   <script type="text/javascript" src="fieldtest.js"></script>
   </head>
   <body>
     <form action="index2.php" method="post">
       <table>
         <tr><td>Användarnamn:</td><td><input type="text" name="username" id="username"></td></tr>
         <tr><td>Lösenord:</td><td><input type="text" name="password" id="password"></td></tr>
         <tr><td>Logga in:</td><td><input type="submit" value="OK!" onclick="return kolla(document.getElementById('username').value,document.getElementById('password').value)"></td></tr>


       </table>



   </body>
   </html>
