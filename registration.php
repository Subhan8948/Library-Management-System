<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
  <style type="text/css">
    section
    {
      margin-top: -20px;
      height:700px;
      width:1500px;
      background-image:url("images/a6.jpg");
      background-repeat:no-repeat;
      background-size:cover;
    }
    .box
    {
      height:400px;
      width:450px;
      background-color:black;
      margin:70px auto;
      opacity:.8;
      color:white;
      padding:20px;
      padding-top:150px;
    }
    label{
      font-weight:600;
      font-size:18px;
    }
  </style>   
</head>
<body>

<section><br><br><br><br>
    <div class="box">
    <form  name="signup" action="" method="post">
        <b><p style="padding-left:50px;font-size:15px;font-weight:700;">Sign Up  as:</p></b>
        <input style="margin-left:50px;width:18px;" type="radio" name="user" id="admin" value="admin">
        <label for="admin">Admin</label>
        <input style="margin-left:50px;width:18px;" type="radio" name="user" id="student" value="student" checked="">
        <label for="student">Student</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-default" type="submit" name="submit1"style="color:black;font-weight:700;width:70px;height:30px;">Ok</button>
       </form>
     </div>
     <?php
     if(isset($_POST['submit1']))
     {
         if($_POST['user']=='admin')
           {
            ?>
            <script type="text/javascript">
              window.location="Admin/registration.php"
            </script>
            <?php
           }
           else
               {
                ?>
            <script type="text/javascript">
              window.location="Student/registration.php"
            </script>
            <?php
                   }   
     }
     ?>
  </section>
</body>
</html>