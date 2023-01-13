<!DOCTYPE html>
<html lang="en">

<head>
  <title>Result</title>
  <link rel="stylesheet" href="quiz.css">
</head>

<body class="header">
<?php
extract($_POST);

$text1;
$text2;
$text3;

if($q1=="formal")
	$text1="Becasue its an important occasion, a suit would be amazing if you are a man , formal dress if you are a woman";
else if($q1=="work")
	$text1="It's usual working day , our advice for you is to wear something mainly comfortable, something you really like to wear, just for a morale boost";
else
	$text1="casual event requier casual outfit! just wear something you like and try to make it neat to impress thoese who you want to impress!";

if($q2=="cold")
	$text2="It's cold weather huh? you should warm yourself up with a jacket and make it fur for extra warmness";
else if($q2=="warm")
	$text2="Often in warm weathers, the simplest outfits are the most reliable, just wear semi-light clothes that you like";
else
	$text2="In hot weathers you MUST avoid dark colors like black, wear light clothes with a cap if it's a sunny weather to portect you from the heat!";

if($q3=="morning")
	$text3="for a good morning we advice you to wear as comfy as possible and avoid formal clothing if it wasn't formal event";
else if($q3=="noon")
	$text3="noon event means long event , you should wear something that really good on you to feel good for the longest period";
else
	$text3="At night light colors are a MUST thing, it just look good at night since the sun is gone";

echo "<h1 style='border-style:groove;'>$text1 and $text2 and $text3.</h1>";
?>

<img style="margin-left:50%;margin-right:50%" src="MainPics/logo.png">
</body>
</html>