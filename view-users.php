<?php

header('Access-Control-Allow-Origin: *');

$host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "schema"; 

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$statementb = 'SELECT firstname, lastname, email, role, created_at FROM users';
$statement = $conn-> query ($statementb);
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="view-users.css" > -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="Adduser.css">
    <link rel="stylesheet" href="custom.css">

        <title>View Users</title>
    </head>
   


<body>
<?php include 'partials/header.php';?>
<?php include 'partials/left-navbar.php';?>
    

<div class="dashboard content-area">
<div class="bradcram">
        <div class="title"><h2> Users </h2></div>
        <div class="page-btn"><button class="Addcontact" onclick="window.location.href='Adduserpage.php'"><i>+</i> Add User</button></div>
    </div>

    <div class="content-container">
    
   
    
   
    
        
    <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created</th>
                </tr>
                
                <?php foreach ($results as $row): ?>
                    <tr>
                      <td><?= $row['firstname']." ".$row['lastname']?></td>
                      <td><?= $row['email']?></td>
                      <td><?= $row['role']?></td>
                      <td><?= $row['created_at']?></td>
                  </tr>
                  <tr>
                      <td><?= $row['firstname']." ".$row['lastname']?></td>
                      <td><?= $row['email']?></td>
                      <td><?= $row['role']?></td>
                      <td><?= $row['created_at']?></td>
                  </tr>
                  <?php endforeach; ?>
                   
            </table>  
        
        </div>

        </div>

      
            </body>
            </html>
