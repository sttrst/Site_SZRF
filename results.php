<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" href="width=device-width" />
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="icon" href="images/icons.png">
    <title>Сила Жизни</title>
    <script src="static/js/script.js"></script>
</head>

<body class="resultBody">


<?php
include 'poll.php';
$poll = new Poll;
$pollResult = $poll->getResult($_GET['pollID']);
    
$globAr = array(0, 0, 0);
    
?>

<!--
<h3><?php echo $pollResult['poll']; ?></h3>
<p><b>Total Votes:</b> <?php echo $pollResult['total_votes']; ?></p>
-->

<?php
if(!empty($pollResult['options'])){ $i=0;
    $barColorArr = array('azure','emerald','violet','yellow','red');
    foreach($pollResult['options'] as $opt=>$vote){
        $votePercent = round(($vote/$pollResult['total_votes'])*100);
        $votePercent = !empty($votePercent)?$votePercent.'%':'0%';
        if(!array_key_exists($i, $barColorArr)){
            $i=0;
        }
        $barColor = $barColorArr[$i];
?>
<!--
 <div class="bar-main-container <?php echo $barColor; ?>">
  <div class="txt"><?php echo $opt; ?></div>
  <div class="wrap">
    <div class="bar-percentage"><?php echo $votePercent; ?></div>
    <div class="bar-container">
      <div class="bar" style="width: <?php echo $votePercent; ?>;"></div>
    </div>
  </div>
</div>
<var name="pers1" content="<?php echo $votePercent; ?>">
-->
<?php 
        $globAr[$i] = round(($vote/$pollResult['total_votes'])*100);
        $i++; } } 
?>

<div style="margin-top:5vh;"></div>

<a href="index.php" class="nazad" style="margin-top:5vh;">на главную</a>

<!--<p><?php
   echo  $globAr[2];
?></p>-->

<div style="margin-top:5vh;">

<div class="ilbR">
<p class="bigpr">университет проголосовавших</p>

<div class="stats-info">
			<div class="graph-container">
				<div class="percent">
					<svg viewBox="0 0 36 36" class="circular-chart">
						<path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
						<path class="circle" stroke-dasharray="<?php echo  $globAr[2]+$globAr[1];?>, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
						<path class="circle" stroke-dasharray="<?php echo  $globAr[2];?>, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
					</svg>
				</div>
				<p>всего голосов: <br><?php echo $pollResult['total_votes']; ?></p>
			</div>
</div>

<p style="color: #FF4040;">ФГАОУ ВО РНИМУ им. Н.И. Пирогова Минздрава России</p>
<p style="color: #FE6464;">Сеченовский Университет</p>
<p style="color: #CC4E4E;">ФГБОУ ВО МГМСУ им. А.И. Евдокимова Минздрава России</p>
</div>

<div class="ilbR" style="width: 5vw;"></div>

<div class="ilbR">
<p class="bigpr">проголосовавший стал потенциальным<br>донором красного костного мозга</p> 

<div class="stats-info">
			<div class="graph-container">
				<div class="percent">
					<svg viewBox="0 0 36 36" class="circular-chart">
						<path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
					</svg>
				</div>
				<p>всего голосов: <br><?php echo $pollResult['total_votes']; ?></p>
			</div>
</div>

<p style="color: #FF4040;">да</p>
<p style="color: #FD9C9C;">нет</p>
</div>
</div>

</body>