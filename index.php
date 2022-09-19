<? require_once("header.php"); ?>
<?php
function CreateTitle() {
  echo "Created by Juan Escalante";
}
 CreateTitle();
?>

<h1> Please enter your complete name and email if you are using POST variable </h1>
<form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" value="Submit with Post">
</form>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
<h1> Please enter your complete name and email if you are using GET variable </h1>
<form action="handleget.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
 </body>
</html>
