<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
ul {
  display: flex;
  width: 80vw;
  margin-left: 10vw;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
li {
  padding: 0;
}
img {
  max-width: 100%;
  width: 100%;
  object-fit: cover;
  transition: all 0.2s ease;
}
ul:is(:hover, :focus-within) img {
  opacity: calc(0.1 + (var(--active-lerp, 0) * 0.9));
  filter: grayscale(calc(1 - var(--active-lerp, 0)));
}
:root {
  --lerp-0: 1;
  --lerp-1: 0.5787037;
  --lerp-2: 0.2962963;
  --lerp-3: 0.125;
  --lerp-4: 0.037037;
  --lerp-5: 0.0046296;
  --lerp-6: 0;
}
li {
  flex: calc(0.1 + (var(--active-lerp, 0) * 1));
  transition: flex 0.2s ease;
}

li:is(:hover, :focus-within) {
  --active-lerp: var(--lerp-0);
  z-index: 7;
}
li:has( + li:is(:hover, :focus-within)),
li:is(:hover, :focus-within) + li {
  --active-lerp: var(--lerp-1);
  z-index: 6;
}
li:has( + li + li:is(:hover, :focus-within)),
li:is(:hover, :focus-within) + li + li {
  --active-lerp: var(--lerp-2);
  z-index: 5;
}
li:has( + li + li + li:is(:hover, :focus-within)),
li:is(:hover, :focus-within) + li + li + li {
  --active-lerp: var(--lerp-3);
  z-index: 4;
}
li:has( + li + li + li + li:is(:hover, :focus-within)),
li:is(:hover, :focus-within) + li + li + li + li {
  --active-lerp: var(--lerp-4);
  z-index: 3;
}
li:has( + li + li + li + li + li:is(:hover, :focus-within)),
li:is(:hover, :focus-within) + li + li + li + li + li {
  --active-lerp: var(--lerp-5);
  z-index: 2;
}
li:has( + li + li + li + li + li + li:is(:hover, :focus-within)),
li:is(:hover, :focus-within) + li + li + li + li + li + li {
  --active-lerp: var(--lerp-6);
  z-index: 1;
}
</style>
   
    <meta charset="UTF-8">
    <meta name="viewport" href="width=device-width" />
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="icon" href="images/icons.png">
    <title>Сила Жизни</title>
    <script src="static/js/script.js"></script>
</head>
<body class="SJbody">  
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <article class="articleI" id="a">
    
    <div>
      <div style="margin-top:5vh;"></div>
       <h1 class="element-animation">
            <div class="ml10">
                <div style="display: inline-block;"><a href="index.php" style="color: #232323;">НА ГЛАВНУЮ</a></div>
            </div>
        </h1>
        
<div style="margin-left: 10vw;"> 
   <ul class="results">
  <li class="result">
    <a href="#"><img  src="images/k_dop_1.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_2.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_3.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_4.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_5.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img src="images/k_dop_6.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_7.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_8.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_9.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img  src="images/k_dop_10.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img src="images/k_dop_11.png" width="500" height="500" alt=""></a>
  </li>
  <li class="result">
    <a href="#"><img src="images/k_dop_12.png" width="500" height="500" alt=""></a>
  </li>
</ul>
</div>

        
<div class="element-animation">
    <div class="div1_verh">
        <img src="images/" class="div1_verh_img">
    </div>
    <div class="div1_niz_d">
       <h1>О ПРОЕКТЕ</h1>
       <p style="color: #232323;"><br>Наше сообщество делает донорство костного мозга <b>доступным и понятным</b> для студентов, а самое главное <b>пополняет Федеральный регистр</b> будущими супергероями!<br><br></p>
       <p><b>Настя создала сообщество «Сила жизни» в 2022 году</b><br><br></p>
       <p style="color: #232323;">Студенческая жизнь в университете - это не только поиск новых возможностей для развития своих талантов и способностей, но и безвозмездная <b>помощь другим.</b><br><br></p>
       <p><b>А что если, совместить это?</b></p>
    </div>
</div>
       
       
        
        <h1 class="element-animation" id="b">
            <div class="div6_name">
                <div style="display: inline-block;">КОМАНДА ПРОЕКТА</div>
            </div>
        </h1>
        
    </div>

    <div class="ml9">
<div class="center">
<div class="element-animation">   
    
  <div class="card">
    <div class="additional">
      <div class="user-card">
      </div>
      <div class="more-info">
        <h1>Исакова <br>Анастасия</h1>
        <div class="coords">
          <span>• Руководитель  сообщества Сила жизни</span>
        </div>
        <div class="coords">
          <span>• Студентка 5 курса Сеченовского Университета</span>
        </div>
        <div class="coords">
          <span>• Руководитель межвузовских медицинских  интеллектуальных игр</span>
        </div>
        <div class="coords">
          <span>• Научный редактор телевизионной программы</span>
        </div>
      </div>
    </div>
    <div class="general1">
      <h1>Исакова <br>Анастасия</h1>
    </div>
  </div>
  
</div>
</div>
<div class="center">
<div class="element-animation">   
    
  <div class="card">
    <div class="additional">
      <div class="user-card">
      </div>
      <div class="more-info">
        <h1>Андрусик <br>Дарья</h1>
        <div class="coords">
          <span>• SMM менеджер проекта Сила жизни</span>
        </div>
        <div class="coords">
          <span>• Студентка 5 ФГБОУ ВО МГМСУ им. А.И. Евдокимова</span>
        </div>
        <div class="coords">
          <span>• Активист волонтерского центра крови</span>
        </div>
        <div class="coords">
          <span>• Научный редактор телевизионной программы</span>
        </div>
      </div>
    </div>
    <div class="general2">
      <h1>Андрусик <br>Дарья</h1>
    </div>
  </div>
  
</div>
</div>
<div class="center">
<div class="element-animation">   
    
  <div class="card">
    <div class="additional">
      <div class="user-card">
      </div>
      <div class="more-info">
        <h1>Карпын <br>Анна</h1>
        <div class="coords">
          <span>• HR проекта Сила жизни</span>
        </div>
        <div class="coords">
          <span>• Студентка 5 курса Сеченовского Университета</span>
        </div>
        <div class="coords">
          <span>• Организатор научно-популярного проекта «What is Science?»</span>
        </div>
        <div class="coords">
          <span>• Финалист олимпиад по медицине и предпринимательству</span>
        </div>
      </div>
    </div>
    <div class="general3">
      <h1>Карпын <br>Анна</h1>
    </div>
  </div>
  
</div>
</div>
   </div>
    
    </article>
    
    <script src="static/js/script.js"></script>
    
</body>
</html>