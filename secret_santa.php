<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />

<title>Secret Santa Organizer</title>
<link rel="stylesheet" type="text/css" href="secret_santa.css" media="screen">
<style type="text/css">
</style>

</head>
<body>

<!-- This is my snow gif -->
<img src="giphysnow.gif" class="gif1" alt="snow">

<!-- header and image -->
<p class ="heading" id ="section1">Secret Santa <img src="SantaSleigh.png" class="sheigh" alt="Santa sleigh" align="right"></p>

<!--  header --> 
<p class ="heading2">Organizer</p>

<!-- white wave -->
<img src="WhiteWave.png" class="wave" alt="white wave">



<div class="container">
  <img src="white.png" class="white" alt="white"><img src="white.png" class="white" alt="white">
  <div class="instructions"><b>The perfect way to organize your gift exchange in just three simple steps!</b></div>
  <img src="num1.png" class="num" alt="1"><div class="option1"> Enter the participants</div>
  <img src="num2.png" class="num2" alt="2"><div class="option2"> Enter specific restrictions </div>
  <img src="num3.png" class="num3" alt="3"><div class="option3"> Decide on a date and time</div>

  <figure><img src="present.png" alt= "1" class= "present"/></figure>
  <figure><img src="sm.png" alt= "1" class= "snowman"/></figure>
 

</div>
</div>


<div class ="border2">
  <form action="#section2" method="post" class="form1">
    <input type="number" name="quantity" min="3" max="12" placeholder="Enter the number of participants" class="form-control" required><br>

    <input type="submit" class="form-control submit" value="Submit">
  </form>
</div> 

<div class ="border3">
  <a class="customer" href ="client_help.php">Please click here for customer support</a>
</div> 

<div id="section2"> <br>

<?php 

if ($_POST["quantity"] == 3) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post'action='action_page2.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}

elseif ($_POST["quantity"] == 4) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post'action='action_page3.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}

elseif ($_POST["quantity"] == 5) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post'action='action_page4.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}

elseif ($_POST["quantity"] == 6) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post'action='action_page5.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='text' name='name6' class='form-control' placeholder='Name 6' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}

elseif ($_POST["quantity"] == 7) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post'action='action_page6.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='text' name='name6' class='form-control' placeholder='Name 6' required><br><input type='text' name='name7' class='form-control' placeholder='Name 7' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}

elseif ($_POST["quantity"] == 8) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post'action='action_page7.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='text' name='name6' class='form-control' placeholder='Name 6' required><br><input type='text' name='name7' class='form-control' placeholder='Name 7' required><br><input type='text' name='name8' class='form-control' placeholder='Name 8' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}

elseif ($_POST["quantity"] == 9) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post'action='action_page8.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='text' name='name6' class='form-control' placeholder='Name 6' required><br><input type='text' name='name7' class='form-control' placeholder='Name 7' required><br><input type='text' name='name8' class='form-control' placeholder='Name 8' required><br><input type='text' name='name9' class='form-control' placeholder='Name 9' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}

elseif ($_POST["quantity"] == 10) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post' action='action_page9.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='text' name='name6' class='form-control' placeholder='Name 6' required><br><input type='text' name='name7' class='form-control' placeholder='Name 7' required><br><input type='text' name='name8' class='form-control' placeholder='Name 8' required><br><input type='text' name='name9' class='form-control' placeholder='Name 9' required><br><input type='text' name='name10' class='form-control' placeholder='Name 10' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";

}

elseif ($_POST["quantity"] == 11) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post' action='action_page10.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='text' name='name6' class='form-control' placeholder='Name 6' required><br><input type='text' name='name7' class='form-control' placeholder='Name 7' required><br><input type='text' name='name8' class='form-control' placeholder='Name 8' required><br><input type='text' name='name9' class='form-control' placeholder='Name 9' required><br><input type='text' name='name10' class='form-control' placeholder='Name 10' required><br><input type='text' name='name11' class='form-control' placeholder='Name 11' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";
}


elseif ($_POST["quantity"] == 12) {
  echo "<b>Please enter the names of the participants</b><div class='contact-form'><form method='post' action='action_page11.php' ><input type='text' name='name1' class='form-control' placeholder='Name 1' required><br><input type='text' name='name2' class='form-control' placeholder='Name 2' required><br><input type='text' name='name3' class='form-control' placeholder='Name 3' required><br><input type='text' name='name4' class='form-control' placeholder='Name 4' required><br><input type='text' name='name5' class='form-control' placeholder='Name 5' required><br><input type='text' name='name6' class='form-control' placeholder='Name 6' required><br><input type='text' name='name7' class='form-control' placeholder='Name 7' required><br><input type='text' name='name8' class='form-control' placeholder='Name 8' required><br><input type='text' name='name9' class='form-control' placeholder='Name 9' required><br><input type='text' name='name10' class='form-control' placeholder='Name 10' required><br><input type='text' name='name11' class='form-control' placeholder='Name 11' required><br><input type='text' name='name12' class='form-control' placeholder='Name 12' required><br><input type='submit' class='form-control submit' value='Submit'>
</form></div>";

}
?>

</div>







</body>
</html>
