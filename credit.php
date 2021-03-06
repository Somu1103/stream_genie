
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payment - Stream Genie</title>
<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
 /* background-color: black;*/
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
 /* background-color: white;*/
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
  background-color: white;
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
  /*background-color: #f1f1f1;*/
  text-align: center;
}
input {
    color: black;
    width: 250px;
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


<form action="loginhtml.php" method="post">
  <div class="container">
    <h3>PAYMENT GATEWAY</h3>
    <hr>
    <label for="Holder Name"><b>Card Holder Name</b></label>
    <input type="text" placeholder="Enter Card Holder Name" name="cardholdername" required>
    
    <label for="cardno"><b>Card Number</b></label>
    <input type="text" placeholder="Enter Card Number" name="cardno" required>

    <label for="cvv"><b>CVV</b></label>
    <input type="text" placeholder="Enter CVV" name="CVV" required>
    
    <label for="Expiry date"><b>Expiry Date</b></label>
    <input type="text" placeholder="MM / YY" name="expirydate" required>
    
    
   
    
    
    <hr>
    <p>By submitting the details,you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">SUBMIT AND PAY</button>
    
  </div>
  
  <div class="container signin">
    <p>Reload page <a href="#">RELOAD PAGE </a>.</p>
  </div>
</form>

</body>
</html>
