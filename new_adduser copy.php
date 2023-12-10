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
        <div class="title"><h2> New Contact </h2></div>
    </div>

    <div class="content-container">
    
	<form action:"newcontact.php" method:"get">
				

				   <div class="row">
						<div class="col-md-6">
						<div class="field-group">
                        <label>First Name</label>
                    <input type="text" name="FirstName" placeholder="" id="fname">
                    <div class="fnameMsg error"></div>
				             <label for: "fname">First Name<label/><br>
				             <input class="inpw mt" id="fname" type = "text" aria-required = "true" required name="firstname" placeholder="First Name" />
					    </div>
					    </div>
						<div class="col-md-6">

						<div class="field-group">
				             <label for:"lname">Last Name<label/> <br>
				             <input class="inpw mt " id="lname" type = "text" aria-required = "true" required name="lastname" placeholder="Last Name" />
					     </div>
					     </div>
				    </div>

					<div class="row">
						<div class="col-md-6">
						<div class="field-group">
						<label for: "emailaddr">Email Address<label/><br>
                           <input class="inpw mt" id="email" type = "email" aria-required = "true" required name="emailaddr" placeholder="something@website.com" />
					  </div>
					    </div>
						<div class="col-md-6">

						<div class="field-group">
						<label for: "tele">Telephone Number<label/><br>
				            <input class="inpw mt" id="telephone" type = "tel" aria-required = "true" required name="tele" placeholder="10 digits" />
					    </div>
					     </div>
				    </div>


					<div class="row">
						<div class="col-md-6">
						<div class="field-group">
						<label for: "company">Company<label/><br>
				            <input class="inpw mt" id="comp" aria-required = "true" required name="company" />
						  </div>
					    </div>
						<div class="col-md-6">

						<div class="field-group">
						<label for="types">Type</label> <br>
                           <select class="tip mt" name="types" id="type">
					       <option value="Sales Lead"selected = "selected">Sales Lead
					       <option value="Support">Support
				 
				            </select>
						
						</div>
					     </div>
				    </div>

					<div class="row">
						
						<div class="col-md-6">

						<div class="field-group">
						<label for="assigned">Assigned To</label> <br>
                             <select class="tip mt select-first-col-arrow-position" name="assigned" id="assign">
					         </select>
						
						</div>
					     </div>
				    </div>
					<div class="row">
						    <button class="form-save-btn" type="submit" id="btn">Save</button>
			                <p id = "error"></p>
					    </div>
				</div>
				 

					
                    
                                  

					




				
				
				
			</form>
   
    
        
        
        
        </div>



    <div class="container">
    
    
        <main>
            <h1>New User</h1>
            <div class="form">
    
                <section>
                    <h2>First Name</h2>
                    <input type="text" name="FirstName" placeholder="" id="fname">
                    <div class="fnameMsg error"></div>
                </section>
    
                <section>
                    <h2>Last Name</h2>
                    <input type="text" name="LastName" placeholder="" id="lname">
                    <div class="lnameMsg error"></div>
                </section>
    
                <section>
                    <h2>Email</h2>
                    <input type="text" name="Email" placeholder="" id="email">
                    <div class="emailMsg error"></div>
                </section>
    
                <section>
                    <h2>Password</h2>
                    <input type="text" name="Password" id="password">
                    <div class="passwordMsg error"></div>
                </section>
    
                <section>
                    <h2>Role</h2>
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
                </section>
    
                <div class="controls">
                    <div class="msg">Message</div><button>Save</button>
                </div>
    
            </div>
    
        </main>
    </div>
    
</body>
</html>