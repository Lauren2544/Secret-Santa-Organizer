<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<title>Secret Santa Organizer</title>
<link rel="stylesheet" type="text/css" href="action_page.css" media="screen">
<style type="text/css"></style>

<style>
#mydiv {
  position: absolute;
  text-align: center;
  top: 130px;

}
#mydivheader {
  padding: 20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;

}


#mydiv2 {
  position: absolute;
  text-align: center;
  top: 800px;

}
#mydivheader2 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}


#mydiv3 {
  position: absolute;
  text-align: center;
  top: 1470px;

}
#mydivheader3 {
  padding: 20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}


#mydiv4 {
  position: absolute;
  text-align: center;
  top: 2140px;

}
#mydivheader4 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}


#mydiv5 {
  position: absolute;
  text-align: center;
  top: 2810px;

}
#mydivheader5 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}


#mydiv6 {
  position: absolute;
  text-align: center;
  top: 3480px;

}
#mydivheader6 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}
#mydiv7 {
  position: absolute;
  text-align: center;
  top: 4150px;

}
#mydivheader7 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}
#mydiv8 {
  position: absolute;
  text-align: center;
  top: 4820px;

}
#mydivheader8 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}
#mydiv9{
  position: absolute;
  text-align: center;
  top: 5490px;

}
#mydivheader9 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}
#mydiv10{
  position: absolute;
  text-align: center;
  top: 6160px;

}
#mydivheader10 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}

#mydiv11{
  position: absolute;
  text-align: center;
  top: 6830px;

}
#mydivheader11 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}
#mydiv12{
  position: absolute;
  text-align: center;
  top: 7500px;

}
#mydivheader12 {
  padding:20px;
  cursor: move;
  background-color: navy;
  color: #fff;
  font-size:60px;
}

</style>
<body>





<div id="mydiv" >
  <div id="mydivheader" > Click here to drag and reveal your name</div></div>
<div id="mydiv2" >
  <div id="mydivheader2"> Click here to drag and reveal your name</div></div>
<div id="mydiv3" >
  <div id="mydivheader3"> Click here to drag and reveal your name</div></div>
<div id="mydiv4" >
  <div id="mydivheader4">Click here to drag and reveal your name</div></div>
<div id="mydiv5" >
  <div id="mydivheader5">Click here to drag and reveal your name</div></div>
<div id="mydiv6" >
  <div id="mydivheader6">Click here to drag and reveal your name</div></div>
<div id="mydiv7" >
  <div id="mydivheader7">Click here to drag and reveal your name</div></div>
<div id="mydiv8" >
  <div id="mydivheader8">Click here to drag and reveal your name</div></div>
<div id="mydiv9" >
  <div id="mydivheader9">Click here to drag and reveal your name</div></div>
<div id="mydiv10" >
  <div id="mydivheader10">Click here to drag and reveal your name</div></div>
<div id="mydiv11" >
  <div id="mydivheader11">Click here to drag and reveal your name</div></div>
<div id="mydiv12" >
  <div id="mydivheader12">Click here to drag and reveal your name</div></div>



<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("mydiv"));
dragElement(document.getElementById("mydiv2"));
dragElement(document.getElementById("mydiv3"));
dragElement(document.getElementById("mydiv4"));
dragElement(document.getElementById("mydiv5"));
dragElement(document.getElementById("mydiv6"));
dragElement(document.getElementById("mydiv7"));
dragElement(document.getElementById("mydiv8"));
dragElement(document.getElementById("mydiv9"));
dragElement(document.getElementById("mydiv10"));
dragElement(document.getElementById("mydiv11"));
dragElement(document.getElementById("mydiv12"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>


</head>
<body>




<br><br>
<br>
<?php 
  $giver = array($_POST["name1"], $_POST["name2"], $_POST["name3"], $_POST["name4"], $_POST["name5"], $_POST["name6"], $_POST["name7"], $_POST["name8"], $_POST["name9"],$_POST["name10"], $_POST["name11"], $_POST["name12"]);
  $receiver = array($_POST["name1"], $_POST["name2"], $_POST["name3"], $_POST["name4"], $_POST["name5"], $_POST["name6"], $_POST["name7"], $_POST["name8"], $_POST["name9"], $_POST["name10"], $_POST["name11"], $_POST["name12"]);



echo "<p class = 'names'>".$giver[0]. " buys for </p><br><br><p class = 'buys'>" .$giver[5]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[1]. " buys for </p><br><br><p class = 'buys'>" .$giver[6]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[9]. " buys for </p><br><br><p class = 'buys'>" .$giver[7]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[3]. " buys for </p><br><br><p class = 'buys'>" .$giver[8]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[10]. " buys for </p><br><br><p class = 'buys'>" .$giver[9]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[2]. " buys for </p><br><br><p class = 'buys'>" .$giver[10]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[6]. " buys for </p><br><br><p class = 'buys'>" .$giver[11]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[8]. " buys for </p><br><br><p class = 'buys'>" .$giver[0]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[4]. " buys for </p><br><br><p class = 'buys'>" .$giver[1]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[5]. " buys for </p><br><br><p class = 'buys'>" .$giver[2]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[11]. " buys for </p><br><br><p class = 'buys'>" .$giver[3]."<br><br><br><br><br><br></p>";

echo "<p class = 'names'>".$giver[7]. " buys for </p><br><br><p class = 'buys'>" .$giver[4]."<br><br><br><br><br><br></p>";

?>



</body>
</html>
