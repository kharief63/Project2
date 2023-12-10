<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    
    <link rel="stylesheet" href="addUser.css">
    <link rel="stylesheet" href="custom.css">
    <script src="login.js"></script>
   
     
</head>

<body>

<?php include 'partials/header.php';?>
<?php include 'partials/left-navbar.php';?>

<div class="dashboard content-area">
<div class="bradcram">
        <div class="title"><h2> DASHBOARD </h2></div>
        <div class="page-btn"><button class="Addcontact" onclick="window.location.href='new_contact.php'"><i>+</i> Add Contact</button></div>
    </div>

    <div class="content-container">
    
        
    <div class="filter">
    <ul class="dashboard-filter">
        <li><span class="material-symbols-outlined">filter_alt</span> <b>Filter by:</b></li>
        <li><a href="#"> All</a></li>
        <li><a href="#"> Sales Lead</a></li>
        <li><a href="#"> Support</a></li>
        <li><a href="#"> Assigned to me</a></li>
    </ul>
    </div>    
    
   
    
        
        <table>
        <thead>
            <tr>
            <th id = "t1"> Name </th>
            <th id = "t2"> Email </th>
            <th id = "t3"> Company </th>
            <th id = "t4"> Type </th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "schema"; 
            $conn= new mysqli($host,$username,$password,$dbname);
            // $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $sql = "SELECT * FROM contacts";
            $results = $conn -> query($sql);
            while($row = $results->fetch_assoc()){
                echo "<tr>
                <td>".$row["title"].$row["firstname"]." ".$row["lastname"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["company"]."</td>
                <td>";
                if($row["type"]=="Sales Lead"){
                    echo "<lable class='badge-warning'>".$row["type"]."</lable>";
                }else{
                    echo "<lable class='badge-primray'>".$row["type"]."</lable>";
                }
                echo"</td>
                <td> <a class='views' href='#'>VIEW</a></td>
                </tr>";
            }
            
            ?>
            
            
        </tbody>
        </table>
        
        </div>

        </div>
</div>

</body>

</html>