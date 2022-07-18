<!doctype html>
<html>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'left middle middle middle middle right'
    'footer footer footer footer footer footer';
  /* grid-column-gap: 10px; - if you want gap between the columns */
}

.left,
.middle,
.right {
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Style the left column */
.left {
  grid-area: left;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}

/* Style the right column */
.right {
  grid-area: right;
}

/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas:
      'header header header header header header'
      'left left left left left left'
      'middle middle middle middle middle middle'
      'right right right right right right'
      'footer footer footer footer footer footer';
  }
}
</style>
<head>
  <meta charset="utf-8">
  <!--<script defer src="C:\Users\krmah\PycharmProjects\python_learning\main.py"></scripta> -->
  <title>Secured | Verification</title>
 </head>


 <body>
   <?php
     //write php code here!!!
     $nameErr = $emailErr = $passwordErr = $typePaasswordErr = "";
     if($_SERVER["REQUEST_METHOD"] == "POST"){
       if(empty($_POST["name"])){
         $nameErr = "Name is required";
       }else {
         $name = $_POST["name"];
       }

       if(empty($_POST["email"])){
         $emailErr = "Email is required";
       }else {
         $email = $_POST["email"];
       }

       if(empty($_POST["password"])){
         $passwordErr = "Password is required";
       }else {
         $password = $_POST["password"];
       }

       if($_POST["password"] !== $_POST["typePassword"]){
         $typePaasswordErr = "Password is not matched!";
       }else {
         $typePassword = $_POST["typePassword"];
       }
     }

   ?>
    <div class="grid-container">
      <div class="header">
        <h2>Header</h2>
      </div>

      <div class="left" style="background-color:#aaa;">Column</div>
      <div class="middle" style="background-color:#bbb;">
        <P align ="left">Privacy Policy</P>
         <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           Name: <input type="text" name="fname"><br>
           <span class="error">* <?php echo $nameErr;?></span><br><br>
           E-mail: <input type="text" name="email">
           <span class="error">* <?php echo $emailErr;?></span><br><br>
           Password: <input type="password" name="password"><br>
           <span class="error">* <?php echo $emailErr;?></span><br><br>
           Re-type Password: <input type="password" name="typePassword"><br>
           <span class="error">* <?php echo $typePaasswordErr;?></span><br><br>
           Website: <input type="text" name="website"><br>
           <!--Comment: <textarea name="comment" rows="5" cols="40"></textarea>-->
           <input type="submit">
         </form>
      </div>
      <div class="right" style="background-color:#ccc;">Column</div>

      <div class="footer">
        <p>Footer</p>
      </div>
    </div>

  </body>
</html>
