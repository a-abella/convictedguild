<?php

$time = $voice = $location = $age = $gender = $avail = $toon = $class = $spec = $armory = $ui = $logs = $lag = $fps = $exper = $friends = $other = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
     $time=test_input($_POST['time']);
     $voice=test_input($_POST['voice']);
     $location=test_input($_POST['location']);
     $age=test_input($_POST['age']);
     $gender = test_input($_POST["gender"]);
     $avail = test_input($_POST["avail"]);
     $toon = test_input($_POST["toon"]);
     $class = test_input($_POST["class"]);
     $spec = test_input($_POST["spec"]);
     $armory = test_input($_POST["armory"]);
     $ui = test_input($_POST["ui"]);
     $logs = test_input($_POST["logs"]);
     $lag = test_input($_POST["lag"]);
     $fps = test_input($_POST["fps"]);
     $exper = test_input($_POST["exper"]);
     $friends = test_input($_POST["friends"]);
     $other = test_input($_POST["other"]);

    }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Convicted-Korgath Raider Application</title>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<style>
  html {
	  background-image: url("bluestone.jpg");
	  background-repeat: repeat-xy;
	  background-attachment: fixed;
  }

  body {
    font-family: sans-serif;
	color: #d9d9d9;
  }

 h2 {
    margin-bottom: 0px;
	color: #ebebeb;
	text-decoration: underline;
  }
  
  .content {
	  text-align: left;
	  margin-left: auto;
	  margin-right: auto;
	  width: 600px;
	  background-color: #1a1a1a;
  }
  
  .button {
	border: solid 0px #e6e6e6;
	border-radius: 3px;
	moz-border-radius: 3px;
	color: #e61e3c;
	background: #ebebeb;
	  font-weight: bold;
  }
  
  hr {
	  margin-bottom: -5px;
	  visibility:hidden;
  }
  
  textarea, input {
	  background-color: #3b2f2f;
	  color: #ebebeb;
      border: 2px solid black;
      resize: none;     
  }

  textarea {
      overflow: auto;
 }
  
  input {
	  padding-left: 3px;
  }
  
  textarea:focus, input:focus {
	  outline: none !important;
	  border: 2px solid grey;
  }
  
  input:autofill {
     background-color: #3b2f2f;
	 color: #ebebeb;
}

  input:-webkit-autofill {
	 -webkit-text-fill-color: #ebebeb;
     -webkit-box-shadow: 0 0 0px 1000px #3b2f2f inset;
}


  a:link, a:visited, a:active {
    color: white;
}

 a:hover {
    color: #d9d9d9;
}

  
  
  
</style>
</head>

<body>

<div class="content" style="width: 850px; height: auto; padding-top: 15px; padding-bottom: 10px">
<div class="content">
<form method="post" action="forum_app.php">
    <h2>
      The Basics
    </h2><hr>
      If you're here it's because you want to raid with us. First we have to know if you can.<br><br><hr>
    
    <div style="font-size: 125%; font-weight: bold;">We raid Tuesday 7:30pm-10:30pm CST and Sunday 6:30pm-10:30pm CST.</div><hr>
    <table>
      <tr>
        <td>Can you typically make these raid times without issue?</td>
        <td><input type="radio" name="time" <?php if (isset($time) && $time=="Yes") echo "checked";?> value="Yes" required>Yes</td>
	<td><input type="radio" name="time" <?php if (isset($time) && $time=="No") echo "checked";?> value="No" required>No</td>
      </tr>
      <tr>
        <td>Are you willing and able to communicate over Mumble?</td>
        <td><input type="radio" name="voice" <?php if (isset($voice) && $voice=="Yes") echo "checked";?> value="Yes" required>Yes</td>
	<td><input type="radio" name="voice" <?php if (isset($voice) && $voice=="No") echo "checked";?> value="No" required>No</td>
      </tr>
    </table>
	<div id="warning" class="toHide" style="display: none; width: 595px; padding: 5px; border: 2px solid red; background-color: #660000; font-size: 83%">Answering "No" to either of these questions will greatly reduce your chances of acceptance. We will not withhold you from applying if you answer No, however we want raiders with reasonably consistent attendance and the capability of being vocal.</div>

	<script>
		
	$(function () {
	    $("[name=time]").change(function () {

	        if ($(this).val() == 'No' || $("[name=voice]:checked").val() == 'No') {
                $("#warning").show();
            } else {
                $("#warning").hide();
            }
	    });
	});


	$(function () {
	    $("[name=voice]").change(function () {

	        if ($(this).val() == 'No' || $("[name=time]:checked").val() == 'No') {
                $("#warning").show();
            } else {
                $("#warning").hide();
            }
	    });
	});
	</script>

	
	<br>
    <h2>
      About You
    </h2><hr>
      Just making sure you're not raiding from Botswana.<br><br>

    <table>
    <tr><td>Location:</td><td><input type="text" name="location" value="<?php echo $location;?>" required></td></tr>
    <tr><td>Age:</td><td><input type="text" name="age" value="<?php echo $age;?>" required></td></tr>
    <tr><td>Gender:</td>
	<td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male" required>Male
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female" required>Female</td></tr>
    </table><hr>
    List your typical available hours:</br><hr>
    <textarea name="avail" style="width: 600px; height: 100px" required><?php echo $avail;?></textarea>
 
    <br>
    
    <h2>
      About Your Character
    </h2><hr>
      Show off all that crap you learned on Icy-Veins.<br><br>
      
    <table>
    <tr><td>Character Name:</td><td><input type="text" name="toon" value="<?php echo $toon;?>" required></td></tr>
    <tr><td>Character Class:</td><td><input type="text" name="class" value="<?php echo $class;?>" required></td></tr>
    <tr><td>Character Main Spec:</td><td><input type="text" name="spec" value="<?php echo $spec;?>" required></td></tr>
    <tr><td>Link to Armory profile:</td><td><input type="text" name="armory" value="<?php echo $armory;?>" required></td></tr>
<tr><td>Link to UI screenshot:</td><td><input type="text" name="ui" value="<?php echo $ui;?>" required></td><td><div style="margin: 0px; font-size: 80%; color: #8D8888">(we recommend <a href="http://www.imgur.com">imgur</a> as an image host)</div></td></tr>
    </table><hr>
    Link to Logs/Parses, <b><u>one full URL per line</u></b>:<br><hr>
    <textarea name="logs" style="display: table-cell; width: 600px; height: 100px" required><?php echo $logs;?></textarea>
	<div style="width: 595px; padding: 5px; border: 2px solid red; background-color: #660000; font-size: 83%">Do not omit the "http://" part of the URL. This box will trim anything that's not a full URL. If you need to explain a log, do it in the Other section.</div>
    <br>
    
    <h2>
      About Raiding
    </h2><hr>
      You have to be able to see the fire before you can not stand in it.<br><br>

    <table>
    <tr><td>Typical in-raid Latency:</td><td><input type="text" name="lag" value="<?php echo $lag;?>" required></td></tr>
    <tr><td>Typical in-raid FPS:</td><td><input type="text" name="fps" value="<?php echo $fps;?>" required></td></tr>
    </table><hr>
    List your endgame PvE raiding experience across any MMOs you have played:<br><hr>
    <textarea name="exper" style="width: 600px; height: 100px" required><?php echo $exper;?></textarea>
    <br>
    
    <h2>
      Other
    </h2><hr>
      Tell us anything you think may matter.<br><br>

    Friends, relatives, or references in Convicted: <input type="text" name="friends" value="<?php echo $friends;?>"><br><hr>
    Anything else you'd like us to know about you, your character, or your application:<br><hr>
    <textarea name="other" style="width: 600px; height: 100px"><?php echo $other;?></textarea>
	<br>
	<br>
	<br>
	<input type="submit" name="submit" value="Submit" class="button" style="height: 50px; width: 607px; font-size: 20pt"> 
	<br>
	<br>
	<br>

  </form>

  </div>
  
  </div>
  
 </body>
</html>
