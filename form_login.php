<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
    <link rel="stylesheet" style="main.css">
</head>
<body>
        
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>"; }
    ?>
    
      <h1>Login to Web App</h1>
      <form method="post" action="cek_login.php">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
          
        <p><input type="password" name="password" value="" placeholder="Password"></p>
          
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
          
      </form>
</body>
</html>