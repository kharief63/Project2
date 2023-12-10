<?php
session_start();
if(!isset($_SESSION['id'])){
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="addUser.css">
    <script src="addUser.js"></script>
    <link rel="stylesheet" href="custom.css">

    
</head>
<body>

	
<?php include 'partials/header.php';?>
<?php include 'partials/left-navbar.php';?>

   
<div class="dashboard content-area">
<div class="bradcram">
        <div class="title"><h2>New User</h2></div>
    </div>

    <div class="content-container">
    
	<form action:"#">
				

				   <div class="row">
						<div class="col-md-6">
						<div class="field-group">
                        <label>First Name</label>
                    <input type="text" name="FirstName" placeholder="" id="fname">
                    <div class="fnameMsg error"></div>
                       </div>
					    </div>
						<div class="col-md-6">

						<div class="field-group">
                        <label>Last Name</label>
                    <input type="text" name="LastName" placeholder="" id="lname">
                    <div class="lnameMsg error"></div>
                 </div>
					     </div>
				    </div>

					<div class="row">
						<div class="col-md-6">
						<div class="field-group">
						<label>Email</label>
                    <input type="text" name="Email" placeholder="" id="email">
                    <div class="emailMsg error"></div>
                  </div>
					    </div>
						<div class="col-md-6">

						<div class="field-group">
                        <label>Password</label>
                        <input type="text" name="Password" id="password">
                    <div class="passwordMsg error"></div>
                 </div>
					     </div>
				    </div>


					<div class="row">
						<div class="col-md-6">
						<div class="field-group">
                        <label>Role</label>
                    <div class="dropdown">
                        <div class="select">
                            <span class="selected">Member</span>
                            <div class="caret"></div>
                        </div>
                        <ul class="menu">
                            <li class="active">Member</li>
                            <li>Admin</li>
                        </ul>
                    </div>	
                    </div>
					    </div>
						
				    </div>

					
					<div class="row">

                    <div class="controls">
                    <div class="msg">Message</div><button class="form-save-btn">Save</button>
                </div>
						       </div>
				</div>
				 

					
                    
                                  

					




				
				
				
			</form>
   
    
        
        
        
        </div>



    
    
</body>
</html>