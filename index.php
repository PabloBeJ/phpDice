
<?php

$randomPlayer = rand(1, 6);
$randomCPU = rand(1, 6);
$resultMessage = '';

if ($randomPlayer == $randomCPU) {
    $resultMessage = '<p style="color: #8B8000"> Draw Even steven</p>';
} else if ($randomPlayer > $randomCPU) {
    $resultMessage = '<p style="color: green"> Hurray You won :)  you defeated ai</p>';
} else {
    $resultMessage = '<p style="color: red"> You lost retry :( the bot as conquered the world Retry </p>';
}
?>

<!DOCTYPE html>
<html>

<body>

 
<script type="text/javascript"> 
function random(){
location.reload();
}
</script> 


<div>
<h2>PLayer 1 </h2>

<img src="./img/<?php echo($randomPlayer);?>.png " alt="Dice" width="300px" height="300px">

<h2>CPU </h2>

<img src="./img/<?php echo($randomCPU);?>.png " alt="Dice" width="300px" height="300px">
</div>
<input type="button" value="Random Dice Number" onclick="random()"/> 
<?php echo $resultMessage; ?>
</body>
</html>
	