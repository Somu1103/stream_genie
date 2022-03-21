
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Upload - Stream Genie</title>
<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
  /*background-color: black;*/
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
 
 /* background-color: yellow;*/
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color:white;
  text-align: center;
}
input {
    color:black;
    width: 300px;
    padding: 10px;
    font-style: oblique;
    border-radius: 20px;
}
input:focus {
  border: 5px solid black;
}
</style>
</head>
<body style="background-image: url(bg.jpg); color:white; font-family: 'Aclonica'; font-size: 14px">
<div style="text-align: center; padding-top:20px; font-family: 'Arizonia'; font-size: 90px">
<p>Stream Genie</p>
</div>


<form action="addcontent.php" method="post" enctype="multipart/form-data">
<div class="container">
    <h1>UPLOAD PAGE</h1>
    <hr>
     <label for="type"><b>TYPE OF CONTENT</b></label>
    <input type="text" placeholder="Enter Content" name="ctype" required>
    
    
    
    <label for="Sourcetitle"><b>CONTENT TITLE</b></label>
    <input type="text" placeholder="Enter Content Title" name="name" required>
    
    <label for="category"><b>CATEGORY</b></label>
    <input type="text" placeholder="Enter Category" name="category" required>
    
    <br> <label for="age"><b>AGE</b></label>
    <input type="text" placeholder="Enter Age" name="age" required>
    
    <label for="Access"><b>ACCESS TYPE</b></label>
    <input type="text" placeholder="Enter Access type" name="access" required>
    
     <label for="description"><b>DESCRIPTION</b></label>
    <input type="text" placeholder="Enter Description" name="description" required>
    
    <label for="Source"><b>SOURCE</b></label><br>
     <input type="file" name="fileToUpload" id="fileToUpload"  ><br>
     <br>
    <button type="submit" class="registerbtn">UPLOAD</button>
  </div>
    
   
    
    <hr>
    </div>
</form>


</body>
</html>
