<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>    
body{
  background-color: lightgrey;
}
.head{
height:15vh;
  width:100%;
  text-align: center;
}
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<div class="w3-bar w3-border w3-black">
  <a href="index.html" class="w3-bar-item w3-button ">Home</a>
  </div>


<body>
<div class="head">
  <img src="photogear.png" height="100px" width="70%">
  </div>
  
<h2>Login Form</h2>

<form action="adminlogin.php" method="POST">
 

  <div class="container">
    <label for="uname"><b>name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <input type="submit" value="Login">
  </form>
    
  </div>


</body>
</html>

