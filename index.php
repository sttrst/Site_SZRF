<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="icon" href="images/icons.png">
    <title>Сила Жизни</title>
    <script src="static/js/script.js"></script>
</head>
<body class="SJbody">  
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <div class="fixmenu"> 
<nav role="navigation" style="height: 0;">
 <div class="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul class="menu">
      <a href="podrobnosti.php"><li>О ПРОЕКТЕ</li></a>
      <a href="#c"><li>АНКЕТА</li></a>
    </ul>
  </div>
</nav>
    </div>
    
    <header class="kartinkaparal">
       <dif class="tekst_sverhu_kartinki">
        <h1>Сила Жизни</h1>
        <h3>Сообщество по интеграции донорства костного мозга в студенческую среду</h3>
        <div class="arrow bounce"></div>
       </dif>
    </header>
    
    <article class="articleI" id="a">
    <!--
    <div class="ogrtel">
        <h1 class="element-animation" id="c">
            <div class="ml10t">
                <div style="display: inline-block;">Теперь ты потенциальный донор костного мозга!</div>
            </div>
        </h1>
        <h4 class="element-animation">
            <div class="ml20">
                <div style="display: inline-block;">Поздравляем! Ты принял очень важное решение и вступил в Федеральный регистр доноров костного мозга.</div>
            </div>
        </h4>
        <h4 class="element-animation">
            <div class="ml20">
                <div style="display: inline-block;">С момента, когда ты вошел в Федеральный регистр доноров костного мозга (стал потенциальным донором)</div>
            </div>
        </h4>
        <h4 class="element-animation">
            <div class="ml20">
                <div style="display: inline-block;">до момента, когда тебя пригласят стать реальным донором костного мозга</div>
            </div>
        </h4>
        <h4 class="element-animation">
            <div class="ml20">
                <div style="display: inline-block;">для конкретного пациента, может пройти несколько месяцев или даже лет. И тебя волнует вопрос, а что дальше?</div>
            </div>
        </h4>
        <h1 class="element-animation">
            <div class="ml10t">
                <div style="display: inline-block; color: rgb(163, 57, 57);">Просим тебя пройти добровольное анкетирование для сбора статистики по работе нашего проекта</div>
            </div>
        </h1>
    </div>
 -->

   
   
<div class="element-animation">
    <div class="div1_verh">
        <div class="div1_verh_img1"> </div>
        <div class="div1_verh_img2"> </div>
    </div>
    <div class="div1_niz">
       <h1>ТЫ - БУДУЩИЙ СУПЕРГЕРОЙ!</h1>
       <p class="div1_verh_pb"><br>Поздравляем!<br><br></p>
       <p style="color: #232323;" class="div1_verh_pm">Ты принял очень важное решение и <b>вступил</b> в <b>Федеральный регистр доноров костного мозга.</b><br><br></p>
       <p style="color: #232323;" class="div1_verh_pm">С момента, когда <b>ты стал потенциальным донором</b> до момента, когда <b>тебя</b> пригласят <b>стать реальным донором</b> для конкретного пациента, может пройти несколько месяцев или даже лет.<br><br></p>
       <p class="div1_verh_pm">И тебя волнует вопрос, <b>а что дальше?</b></p>
    </div>
</div>

<div class="element-animation">
    <div class="div2_verh">
       <h1 id="c" class="div2_pocentru" style="text-align: center;">ДОБРОВОЛЬНОЕ АНКЕТИРОВАНИЕ</h1>
       <p style="color: #232323;" class="div1_verh_pm"><br>Дорогой друг! Просим тебя ответить на два вопроса ниже для сбора статистики по работе нашего проекта<br><br></p>
       
       
       
       
       
        <div style="align-content: center;" class="div2_pocentru">
<p><b>Я стал потенциальным донором красного костного мозга</b></p>
<ul>
    <li class="div2_verh_li"><input type="radio" name="voteOpt" value="Да" >Да</li>
</ul>
<?php
    include 'poll.php';
    $poll = new Poll;
    $pollData = $poll->getPolls();
?>
<div class="pollContent">
    <?php echo !empty($statusMsg)?'<p class="stmsg">'.$statusMsg.'</p>':''; ?>
    <form action="" method="post" name="pollFrm">
    <p><b><?php echo $pollData['poll']['subject']; ?></b></p>
    <ul>
        <?php foreach($pollData['options'] as $opt){
            echo '<li><input type="radio" name="voteOpt" value="'.$opt['id'].'" >'.$opt['name'].'</li>';
        } ?>
    </ul>
    <input type="hidden" name="pollID" value="<?php echo $pollData['poll']['id']; ?>">
    <div>
        <button type="button" class="slide">
            <div><input type="submit" name="voteSubmit" value="Отправить анкету" style="background-color: rgba(0, 0, 0, 0); border: 0px;" class="knopochka_last"></div>
        </button>
    </div>
    <a href="results.php?pollID=<?php echo $pollData['poll']['id']; ?>"  class="div2_verh_a">Результаты Анкеты</a>
    </form>
</div>
<div style="color: #eae9ea; font-size: 1px;">
<?php
if(isset($_POST['voteSubmit'])){
    $voteData = array(
        'poll_id' => $_POST['pollID'],
        'poll_option_id' => $_POST['voteOpt']
    );
    $voteSubmit = $poll->vote($voteData);
    if($voteSubmit){
        setcookie($_POST['pollID'], 1, time()+60*60*24*365);
        
        $statusMsg = 'Your vote has been submitted successfully.';
    }else{
        $statusMsg = 'Your vote already had submitted.';
    }
}
?>
</div>
</div>    
   
   
   
   
   
    </div>
    <div class="div2_niz">
       <div class="div2_niz_img">
       </div>
    </div>
</div>   

<div class="element-animation">
    <p class="div3_mlkt" style="text-align: left; margin-top: 15vw; margin-left: 5vw;">Статус потенциального донора костного мозга -<br> очень ответственно!</p>
    <div class="div3_blst">
        <p><b>Я В РЕГИСТРЕ</b></p>
    </div>
    <p class="div3_mlkt" style="text-align: right; margin-right: 5vw;">Что нужно делать ожидая возможности помочь<br> своему генетическому «близнецу», <br><br>а главное почему эти рекомендации важны в<br> первую очередь для <b>ВАС</b>!</p>
</div>

<div class="element-animation">
    <div class="div4_name">
        <p style="margin-bottom: 0;">ПИТАНИЕ - СКАЖИ НЕТ ДЕФИЦИТАМ!</p>
    </div>
    
    <div class="div4_left">
        <div class="div4_vit">
            <p class="div4_vit_pb">B9</p>
            <p class="div4_vit_p">Печень гусиная - 55 грамм в день <br>Стручковая фасоль - 66 грамм в день <br>Чечевица - 83 грамма в день</p>
        </div>
        <div class="div4_vit_n">
            <p class="div4_vit_pb">FE</p>
            <p class="div4_vit_p">Говядина - 305 грамм в день <br>Тыквенные семечки - 138 грамм в день <br>Шпинат - 500 грамм в день</p>
        </div>
    </div>
    
    <div class="div4_right">
        <div class="div4_right_top">
            <p>Главные витамины и микроэлементы для<br> <b>образования новых клеток крови</b><br> и продукты-чемпионы по их содержанию</p>
        </div>
        <div class="div4_right_bot">
            <div class="div4_vit_s">
                <p class="div4_vit_pb">B12</p>
                <p class="div4_vit_p">Баранья печень - 7 грамм в день <br>Говяжья печень - 8 грамм в день <br>Моллюски - 33 грамма в день</p>
            </div>
            <div class="div4_vit_s_n">
                <p class="div4_vit_pb">B6</p>
                <p class="div4_vit_p">Рисовые отруби -50 грамм в день <br>Перец желтый - 90 грамм в день <br>Фисташки - 115 грамм в день</p>
            </div>
        </div>
    </div>
</div>

<div class="element-animation">
    <div class="div5_name">
        <p><b>СПОРТ</b></p>
    </div>
    
    <div class="div5_top">
        <div class="div5_top_block">
            <div class="div5_top_block_i1"></div>
            <p class="div5_top_block_p" style="color: #232323;"><b>4000 шагов в день<br>5 лестничных пролетов</b></p>
        </div>
        <div class="div5_top_block">
            <div class="div5_top_block_i2"></div>
            <p class="div5_top_block_p" style="color: #232323;"><b>11 минут в день или<br>75 минут в неделю</b></p>
        </div>
        <div class="div5_top_block">
            <div class="div5_top_block_i3"></div>
            <p class="div5_top_block_p" style="color: #232323;"><b>21 минута в день<br>ㅤ</b></p>
        </div>
    </div>
    
    <div class="div5_bot">
        <div class="div5_bot_block">
            <p><b>СНИЖАЕТСЯ РИСК</b><br>Болезни сердца на 57% <br>Онкологии на 32%<br>Ожирения на 30%</p>
        </div>
        <div class="div5_bot_block">
            <p><b>ПОВЫШАЕТСЯ</b><br>Иммунитет на 23%<br>Нейрогенез на 20%<br>Гемопоэз на 17%</p>
        </div>
    </div>
</div>   
        
<div class="element-animation">
    <div class="div6_name">
        <p style="margin-bottom: 0;"><b>АНАЛИЗЫ 1 РАЗ В ГОД</b></p>
    </div>
    <div class="div6_text">
        <p style="color: #232323;">За какими показателями нужно следить потенциальному донору<br>костного мозга, чтобы оставаться здоровым и спасти чью-то жизнь</p>
    </div>
    <div class="div6_bot">
        <div class="div6_bot_text">
            <p>Гемоглобин<br>Железо<br>АЛТ/АСТ<br>СРБ<br>Общий белок<br>Лейкоциты<br>Давление<br>ВИЧ<br>Сифилис<br>Гепатит В,С</p>
        </div>
        <div class="div6_bot_i">
            
        </div>
    </div>
</div>
         
    </article>
    
    <script src="static/js/script.js"></script>
    
</body>
</html>