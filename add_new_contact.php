<?php
      session_start();
  ?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<title>New Contact Page</title>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    	<link rel="stylesheet" href="Adduser.css">
		<link rel="stylesheet" href="custom.css">

		<script src="newcontact.js" type="text/javascript"></script>
		
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
				<div class="dropdown row mtop dropdown-mr-mrs field-group">
                    <label for="titles">Titles:</label>
                    <select class="tip mt" name="titles" id="title">
					<option value="Mr."selected = "selected">Mr.
					<option value="Mrs.">Mrs.
					<option value="Ms.">Ms.
				</select>
 				  </div>

				   <div class="row">
						<div class="col-md-6">
						<div class="field-group">
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

        </div>


	</body>
</html>