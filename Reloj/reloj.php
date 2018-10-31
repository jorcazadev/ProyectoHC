<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create an Animated Flip Down Clock</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="wrapper">

	<div id="back">
         <div id="upperHalfBack">
         		<img src="spacer.png" /><img id="hoursUpBack" src="Single/Up/AM/0.png"/>
                <img id="minutesUpLeftBack" src="Double/Up/Left/0.png" class="asd" /><img id="minutesUpRightBack" src="Double/Up/Right/0.png"/>
                <img id="secondsUpLeftBack" src="Double/Up/Left/0.png" /><img id="secondsUpRightBack" src="Double/Up/Right/0.png"/>
         </div>
         <div id="lowerHalfBack">
         		<img src="spacer.png" /><img id="hoursDownBack" src="Single/Down/AM/0.png" />
               <img id="minutesDownLeftBack" src="Double/Down/Left/0.png" /><img id="minutesDownRightBack" src="Double/Down/Right/0.png" />
               <img id="secondsDownLeftBack" src="Double/Down/Left/0.png" /><img id="secondsDownRightBack" src="Double/Down/Right/0.png" />
         </div>
	</div>
    
    
    <div id="front">
         <div id="upperHalf">
         		<img src="spacer.png" /><img id="hoursUp" src="Single/Up/AM/0.png"/>
                <img id="minutesUpLeft" src="Double/Up/Left/0.png" /><img id="minutesUpRight" src="Double/Up/Right/0.png"/>
                <img id="secondsUpLeft" src="Double/Up/Left/0.png" /><img id="secondsUpRight" src="Double/Up/Right/0.png"/>
         </div>
         <div id="lowerHalf">
         		<img src="spacer.png" /><img id="hoursDown" src="Single/Down/AM/0.png"/>
               <img id="minutesDownLeft" src="Double/Down/Left/0.png" /><img id="minutesDownRight" src="Double/Down/Right/0.png" />
               <img id="secondsDownLeft" src="Double/Down/Left/0.png" /><img id="secondsDownRight" src="Double/Down/Right/0.png" />
         </div>
	</div>
 
    
</div>

</body>
<script src="mootools.js" type="text/javascript"></script>
<script src="animate.js" type="text/javascript"></script>
</html>
