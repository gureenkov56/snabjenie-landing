<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Комплексное снабжение строительства и предприятий</title>
</head>

<body>
    <?php
        if($_POST['number'] !== '' and $_POST['number'] !== '+7' and $_POST['number'] !== NULL){
            echo '<div class="notice">
              <div class="innotice">Заявка на обратный звонок отправлена. <br />Менеджер свяжется с Вами в ближайшее время.
              </div>
            </div>';
            $email = 'boschtoolsvl@gmail.com';
            mail($email, 'Заявка на снабжение', 'Посетитель оставил номер: ' . $_POST['number']);
        }
    ?>

  <div class="firstback">
    <div class="first">
        <div class="header">
          <div class="headerinn">
              <p class="white">ИНН: 2539100432</p>
          </div>
          <div class="headercontact">
            <p class='white'><a href="tel:+74232098000">+7 (423) 209-8000</a><br>
            <a href="mailto:boschtoolsvl@gmail.com">boschtoolsvl@gmail.com</a></p>
          </div>
        </div>
      <div class="headertext">
        <h1 class='white'>Комплексное снабжение<br>строительных    компаний и производств<br><br>ООО "Профессионал"</h1>
        <button class='firstbutt' onclick='al();'>ОТПРАВИТЬ ЗАЯВКУ НА СНАБЖЕНИЕ</button>
      </div>
    </div>
  </div>
  
  <div class="feature">
    <div class="intro">
      <p class='black'>
        Снабжайте производство всем необходимым, не отрываясь от работы.<br>
        Совершите один звонок, все остальное мы берем на себя.
      </p>
      <div class="flexfeature">
        <div class="featureone">
          <div class="fimg">
            <img src="https://prof-dv.ru/landing/assort.jpg" alt="">
          </div>
          <div class="f1"><p>Широкий ассортимент</p></div>
          <div class="f11"><p>Более 100 000<br>наименований товаров</p></div>
        </div>
        <div class="featureotwo">
          <img src="image/dealer2.jpg" alt="">
          <div class="f2"><p>Официальный BSS-дилер<br>BOSCH</p></div>
          <div class="f22"><p>С 2008 года</p></div>
        </div>
        <div class="featurethree">
          <div class="fimg">
            <img src="https://prof-dv.ru/landing/smartphone.jpg" alt="">
          </div>
          <div class="f1"><p>Личный менеджер</p></div>
          <div class="f33"><p>На связи 9 часов<br>по будням</p></div>
        </div>
      </div>
    </div>
    <div class="givenumb">
      <p class='black'>Оставьте номер телефона.<br>Менеджер свяжется с Вами в ближайшее время.</p>
      <p><form method='POST'>
        <input type="text" name='number' class='inputsecbut'  value="+7">
        <input type="submit" name='sendnumber' class='secondbutt'>
      </form></p>
    </div>
  </div>

  <div class="offerback">
    <div class="offer">
      <p class="white">
      Мы предлагаем:<br><br>

      <ul><li>Бесплатную доставку<br>
  на заказы от любой суммы;</li>

<li>Особые условия <br />
   для заказов более 100 тысяч рублей;</li>

<li>Сервисную поддержку инструмента.<br>
  При поломке инструмента бесплатно заберем <br>
  в сервисный центр и проконтролируем окончание ремонта.</li></ul>
      </p>
    </div>
  </div>

  <div class="steps">
    <p class='black'>1. Вам не обязательно формировать заявку.<br>Просто продиктуйте необходимое по телефону.<br>
        <ul class='offercontact'>
            <li>Тел: <a href="tel:+74232098000">+7 (423) 209-8000</a></li>
            <li>Почта: <a href="mailto:boschtoolsvl@gmail.com">boschtoolsvl@gmail.com</a></li>
        </ul>
    </p>
    <p class='black'>2. Менеджер оформит счет<br />и вышлет Вам.</p>
    <p class='black'>3. После оплаты доставим<br>заказ на площадку.</>
  </div>
    
  <div class="backnumbaboutus">
    <div class="numbinner">
      <div class="fnumb">
        <p class="numbus white">13</p>
        <p class="textabnum1 white">лет<br>снабжаем<br>компании</p>
      </div>
      <div class="snumb">
        <p class="numbus white">4719</p>
        <p class="textabnum2 white">отгрузок за<br>2020 год</p>
      </div>
      <div class="tnumb">
        <p class="numbus white">21</p>
        <p class="textabnum3 white">регион работает<br /> с нами</p>
      </div>
    </div>
  </div>
    
  <div class="clients">
    <h2>Наши клиенты</h2>
    <div class="clientsblock">
      <div class="oneclient1"></div>
      <div class="oneclient2"></div>
      <div class="oneclient3"></div>
      <div class="oneclient4"></div>
      <div class="oneclient5"></div>
      <div class="oneclient6"></div>
    </div>
  </div>  
  
  <div class="backfinish">
    <div class="finish">
      <p class="white">Оставьте номер телефона<br>Мы свяжемся с Вами в ближайшее время</p>
      <form action="" method='POST'>
        <div>
          <input type="text" name='number' value='+7' class='inputfinbut'>
        </div>
        <div>
          <input type="submit" name='sendnumber' value='Отправить' class='finbutt'>
        </div>
      </form>  
      <div class="recvizity"><p class="white"></p>ООО "Профессионал" ИНН 2539100432 <br />Адрес: 690069, г. Владивосток, пр-т 100 лет Владивостоку, д. 86</p></div>

    </div>
  </div>   
</body>

<script src="custom.js"></script>

</html>
