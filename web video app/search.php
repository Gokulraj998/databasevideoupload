<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Bar Page</title>
  <link rel="stylesheet" href="search.css">

</head>
<body>
  <div class="div">
   <h2>Search title video:</h2>

   <!-- search video form -->
   <form method="post" class="example" style="margin:auto;max-width:300px">
  
  <input type="text" name="search" placeholder="Search.."/>
  <button type="submit" name="submit">search</button> 
  <!-- <input type="submit" name="submit"/> -->
</form>
   <div class="btn">
   <button><a href="index.php">back</a></button>
   </div>
  </div>

  
   <!-- <form method="post" class="example" style="margin:auto;max-width:300px">
  
    <input type="text" name="search" placeholder="Search.."/>
    <button type="submit" name="submit">search</button> 
    <input type="submit" name="submit"/>
  </form> -->

<?php
 // set connection
$conn=new PDO("mysql:host=localhost;dbname=gokul",'root','');

//check the connection
if(!$conn){
  die("connection failed:" .mysqli_connect_error());
}

// submit the search
if(isset($_POST['submit'])){
    $search=$_POST['search'];
    $sth=$conn->prepare("SELECT * FROM `videos` WHERE title ='$search' ");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    if($row=$sth->fetch())
    {
       ?> 
<br>
    <table >
      <tr>
        <th>Name</th>
        
    </tr>
    <tr>
        <td>Search Video link  here:<a href="play.php"> <?php echo $row->video_url; ?></a></td>
        
    </tr>
    </table>
    <?php 
  
    }else{
        echo ' <h3> Name does not exist. </h3>';
    } 
}
?>
 

			 
</body>
</html>