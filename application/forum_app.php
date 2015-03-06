<!DOCTYPE html>
<html>
<head>
<title>Convicted-Korgath Raider Application</title>
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

 h1 {
	 
	 text-decoration: underline;
	 
 }
 
 h2 {
         margin-bottom: 0px;
            color: #ebebeb;
              }
  
  .content {
          text-align: left;
              margin-left: auto;
              margin-right: auto;
                  width: 750px;
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

<?php


$time = test_input($_POST['time']);
$voice = test_input($_POST['voice']);
$location = test_input($_POST['location']);
$age = test_input($_POST['age']);
$gender = test_input($_POST['gender']);
$avail = test_input($_POST['avail']);
$toon = test_input($_POST['toon']);
$class = test_input($_POST['class']);
$spec = test_input($_POST['spec']);
$armory = test_input($_POST['armory']);
$ui = test_input($_POST['ui']);
$logs = test_input($_POST['logs']);
$lag = test_input($_POST['lag']);
$fps = test_input($_POST['fps']);
$exper = test_input($_POST['exper']);
$friends = test_input($_POST['friends']);
$other = test_input($_POST['other']);


function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       return $data;
}

$regex = '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i';
preg_match_all($regex, $logs, $matches);
$urls = $matches[0];

?>

<div class="content" style="width: 950px; height: auto; padding-top: 15px; padding-bottom: 10px">

<div class="content">

<h1> Submitting the Application</h1><br><br>
<h4>Your application will be submitted as a forum post, where guild members can view and comment on it. You will need to register an account on our forums to access the Applications area.</h4>
<br>
<h3 style="margin-bottom: -15px;"><a href="http://conviction.omgforum.net/post?f=7&mode=newtopic">Open this link in a new tab to create a New Post in the Application subforum.</a></h3> <h4>Log in or create an account if prompted.</h4>
<br><br>
<h2>Copy the text below and paste it into the "Title of the topic" field</h2>
<hr>
<textarea style="width: 400px; height: 18px; padding: 3px;">
<?php echo $toon . " / " . $class . " / " . $spec;?>
</textarea>
<br><br><br>

<h2>Copy the text below and paste it into the "Message body" field</h2>
<hr>
<textarea style="width: 750px; height: 500px">


[b][u][COLOR=#969696]THE BASICS[/COLOR][/u][/b]

[b][COLOR=#969696]Our raid times are Tuesday 7:30pm CST and Sunday 6:30pm CST.[/COLOR][/b]
[b][COLOR=#969696]Can you typically make these raid times without issue?[/COLOR][/b] <?php echo $time;?>

[b][COLOR=#969696]Are you willing and able to communicate over Mumble?[/COLOR][/b] <?php echo $voice ;?>



[b][u][COLOR=#969696]ABOUT YOU[/COLOR][/u][/b]

[b][COLOR=#969696]Location:[/COLOR][/b] <?php echo $location;?>

[b][COLOR=#969696]Age:[/COLOR][/b] <?php echo $age;?>

[b][COLOR=#969696]Gender:[/COLOR][/b] <?php echo $gender;?>

[b][COLOR=#969696]List your typical available hours:[/COLOR][/b]
<?php echo $avail;?>



[b][u][COLOR=#969696]ABOUT YOUR CHARACTER[/COLOR][/u][/b]

[b][COLOR=#969696]Character Name:[/COLOR][/b] <?php echo $toon;?>

[b][COLOR=#969696]Character Class:[/COLOR][/b] <?php echo $class;?>

[b][COLOR=#969696]Character Main Spec:[/COLOR][/b] <?php echo $spec;?>

[b][COLOR=#969696]Link to Armory profile:[/COLOR][/b] <?php echo $armory;?>

[b][COLOR=#969696]Link to UI screenshot:[/COLOR][/b] <?php echo $ui;?>

[b][COLOR=#969696]Links to Logs/Parses:[/COLOR][/b] 
<?php
foreach($urls as $url) {
    echo $url . "\n";
}
?>


[b][u][COLOR=#969696]ABOUT RAIDING[/COLOR][/u][/b]

[b][COLOR=#969696]Typical in-raid Latency:[/COLOR][/b] <?php echo $lag;?>

[b][COLOR=#969696]Typical in-raid FPS:[/COLOR][/b] <?php echo $fps;?>

[b][COLOR=#969696]List your endgame PvE raiding experience across any MMOs you have played:[/COLOR][/b]
<?php echo $exper;?>



[b][u][COLOR=#969696]OTHER[/COLOR][/u][/b]

[b][COLOR=#969696]Friends, relatives, or references in Convicted:[/COLOR][/b] <?php echo $friends;?>

[b][COLOR=#969696]Any other information you would like to include, about yourself or your character:[/COLOR][/b]
<?php echo $other;?>



</textarea>
<br><br>
<br>
<h2>Click the "Preview" button to preview your application</h2>
<h4>It should look similar to this:</h4><br>
<hr>
<img src="exampleapp.png" style="border: 6px solid black;">
<br><br>
<h2>Once you have confirmed that your application has been properly imported, press the "Send" button.<br><br>
The officers will review applications and leave questions or comments in the post. Check back often.</h2>
<br>
<br>

</div>
</div>

</body>
</html>
