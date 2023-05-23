<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>video upload php and mysql</title>
	<link rel="stylesheet" href="indupload.css">
	<style>
	
       body{
		padding:15px;
	   }

	   .aview-tag {
			text-decoration: none;
			color: #006CFF;
			padding-left:25px;	

		}
		a{
			text-decoration: none;
			color: #006CFF;	
		}
	</style>
</head>
<body>
	<a href="index.php" class="aview-tag">Videos</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>
	 <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">
     <div class="container">
	 <h2>Upload File</h2>	
	 <hr>

        <label>choose file:</label>    
	 	<input type="file"
	 	       name="my_video"  required/><br/>
		<label>Title:</label>    
	 	<input type="text"
	 	       name="title"  required/>	<br/>   
		<label>Description:</label>    
	 	<input type="text"
	 	       name="description"  required/>	<br/>   
	 	
	<div class="clearfix">
	 <button type="button" class="cancelbtn"><a href="index.php">Cancel<a></button>
	  <!-- <input type="submit"
	 	       name="Upload" 
	 	       value="Upload" class="signupbtn">   -->
	<button type="submit" name="submit" value="Upload" class="signupbtn">upload</button>			   
    </div>			   
	</div>			   
	</form> 
			 
</body>
</html>