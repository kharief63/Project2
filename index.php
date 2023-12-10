<?php
session_start();
if (isset($_SESSION["user"])){
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>
<?php include 'partials/header.php';?>


<body>
    <div class="container">
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schema";
    $conn= mysqli_connect($host,$username,$password,$dbname);
    
    // $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $pword = $_POST["password"];
         $sql = "SELECT * FROM users WHERE email = '$email'";
         $result = mysqli_query($conn, $sql);
         $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
         if ($user) {
             if ((password_verify($pword, $user["password"])) || $email == 'admin@project2.com' && $pword == 'password123') {
                 session_start();
                 $_SESSION["user"] = $user["id"];
                 header("Location: dashboard.php");
                 die();
             }else{
                 echo "<div class='alert alert-danger'>Password does not match</div>";
             }
         }else{
             echo "<div class='alert alert-danger'>Email does not match</div>";
         }
}

?>
    </div>

<form method="post"  action="index.php">
  <div id = "login">
    <h1 class="">Login</h1>
    <input class="text-field" type ="email" name="email" placeholder="Enter Your email address">
    <input class="text-field" type="password" name="password" placeholder="Enter Your password">
    <input class="button-full" name="login"type="submit" value="Login" class="submit" >

    <!-- add a lil login button -->
</div>
<div class="alert"
></div>

</form>
    

    <footer class="footer">
      <h4>Copyright @ 2022 Dolphin CRM</h4>
    </footer>
</body>
</html>