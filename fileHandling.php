<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
</head>
<body>

  <h1>Registration Form</h1>

  <?php
    $firstNameErr = $lastNameErr = $gender =  $email = $userName = $pass = $rEmail = "" ;
    $firstName = ""; 
    $lastName = ""; 
    $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST['fname'])) {
        $firstNameErr = "Please fill up the first name properly";
      }
      else {
        $firstName = $_POST['fname'];
      }

      if(empty($_POST['lname'])) {
        $lastNameErr = "Please fill up the last name properly";
      }
      else {
        $lastName = $_POST['lname'];

      if(empty($_POST['email'])) {
        $lastNameErr = "Please fill up the email properly";
      }
      else {
        $lastName = $_POST['email'];



      }

      
    }
  ?>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <fieldset>
      <legend>Basic Information: </legend>

      <label for="fname">FirstName:</label>
      <input type="text" name="" id="fname">
      <br>
      <p style="color:red"><?php echo $firstNameErr; ?></p>

      <label for="lname">LastName:</label>
      <input type="text" name="" id="lfname">
      <br>
      <p style="color:red"><?php echo $lastNameErr; ?></p>

      <span class="label">Gener:</span>
          <label><input type="radio" name="gender" id="male" title="gender Male">Male</label>
          <label><input type="radio" name="gender" id="female" title="gender Female">Female</label>
          <label><input type="radio" name="gender" id="other" title="gender Other">Other</label>
      <br>

      <label for="email">Email:</label>
      <input type="email" name="" id="email" placeholder="...@gmail.com">
      <br>

    </fieldset>
    <br>
   

    <fieldset>

      <legend>User Account Information: </legend>

      <label for="uname">UserName:</label>
      <input type="text" name="" id="uname">
      <br>

      <label for="pass">Password:</label>
      <input type="password" name="" id="pass">
      <br>
      
      <label for="remail">Recovery Email Address:</label>
      <input type="email" name="" id="remail" placeholder="...@gmail.com">
      <br>

    </fieldset>
    <br>
    
    <input type="submit" value="Submit">

  </form>
  <br>
  

</body>
</html>