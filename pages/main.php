<?php
	require_once 'admin/auth_func.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Главная</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="World Real Estate">
    <meta name="keywords" content="world real estate">
    <meta name="robots" content="all">
    <meta name="description" content="Мы здесь, чтобы помочь Вам реализовать вашу мечту. Наша дружная команда посодействует в этом. Продайте свою или купите новую недвижимость быстро и по максимально выгодной цене.">

    <link rel="icon" type="image/x-icon" href="https://wr-e.com/images/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="https://wr-e.com/images/favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://wr-e.com/images/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://wr-e.com/images/apple-touch-icon.png">
    
    <link rel="canonical" href="https://wr-e.com/">
    <link rel="stylesheet" href="https://wr-e.com/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://wr-e.com/css/animate.css">
    <link rel="stylesheet" href="https://wr-e.com/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://wr-e.com/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://wr-e.com/css/magnific-popup.css">
    <link rel="stylesheet" href="https://wr-e.com/css/aos.css">
    <link rel="stylesheet" href="https://wr-e.com/css/ionicons.min.css">
    <link rel="stylesheet" href="https://wr-e.com/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://wr-e.com/css/jquery.timepicker.css">
    <link rel="stylesheet" href="https://wr-e.com/css/flaticon.css">
    <link rel="stylesheet" href="https://wr-e.com/css/icomoon.css">
    <link rel="stylesheet" href="https://wr-e.com/css/style.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EMVK6FGY11"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-EMVK6FGY11');
    </script>
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
       ym(91455288, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/91455288" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		<style type="text/css">
			a {text-decoration: none;}

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
      }

      input[type=number] {
        -moz-appearance:textfield; /* Firefox */
      }
		</style>
  </head>
  <body>
    <div class="top">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col">
    				<p class="social d-flex">
    					<a href="https://www.facebook.com/worldrealestate007"><span class="icon-facebook"></span></a>
    					<a href="https://www.instagram.com/world_real_estate07/"><span class="icon-instagram"></span></a>
              <a href="https://t.me/+905324795042"><span class="icon-telegram"></span></a>
              <a href="https://wa.me/905324795042"><span class="icon-whatsapp"></span></a>
    				</p>
    			</div>
    			<div class="col d-flex justify-content-end">
    				<p class="num"><span class="icon-phone"></span> +90 (532) 479-50-42</p>
    			</div>
    		</div>
    	</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="https://wr-e.com/"><img src="https://wr-e.com/images/logo.png" width="80px" height="119px"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Главная</a></li>
	          <li class="nav-item"><a href="/estate" class="nav-link">Недвижимость</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">О нас</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Контакты</a></li>
	          <li class="nav-item cta"><a href="https://t.me/+905324795042" class="nav-link ml-lg-2"><span class="icon-user"></span> Telegram</a></li>
	          <li class="nav-item cta cta-colored"><a href="https://wa.me/905324795042" class="nav-link"><span class="icon-pencil"></span> WhatsApp</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap mb-0" style="background-image: url('https://wr-e.com/images/bg_1.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center" style="opacity: 0.85; overflow: hidden;">
          <div class="col-md-6 text p-4 ftco-animate bg-light">
            <h2 class="mb-3">Агенство недвижимости в Алании</h2>
            <p style="opacity: 1; color: grey;">Мы здесь, чтобы помочь Вам реализовать вашу мечту. Наша дружная команда посодействует в этом.
            	Продайте свою или купите новую недвижимость быстро и по максимально выгодной цене.</p>
            <span class="price"><a href="property.php" class="price">Начать поиск &#128270;</a></span>
         	 </div>
        </div>
      </div>
    </div>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><img src="https://wr-e.com/images/icons8-scales-50.png"></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Юридическая поддержка</h3>
                <p>Полное юридическое сопровождение в покупке/продаже недвижимости.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><img src="https://wr-e.com/images/icons8-document-50.png"></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">ТАПУ</h3>
                <p>Содействие в получении TAPU при покупке недвижимости.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><img src="https://wr-e.com/images/icons8-debit-card-100.png"></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">ВНЖ</h3>
                <p>Сопровождение в оформлении документов для получения ВНЖ.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-house"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Решение прочих вопросов</h3>
                <p>Решения вопросов по поводу подключения коммунальных услуг, интернета.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-properties">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<!-- <span class="subheading">Recent Posts</span> -->
            <h2 class="mb-4">Свежие предложения</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="properties-slider owl-carousel ftco-animate">

    					<?php $_flats = get_all_index() ?>
    					<?php foreach($_flats as $_fir) { ?>

    					<div class="item">
		    				<div class="properties">
		    					<a href="../flats.php?id=<?php echo $_fir["id"]; ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?php echo $_fir['file']?>');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status <?php echo $_fir["_sale_or_rent"]; ?>"><?php echo $_fir["sale_or_rent"]; ?></span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="../flats.php?id=<?php echo $_fir["id"]; ?>"><?php echo $_fir["name_apart"]; ?></a></h3>
				    						<p><?php echo $_fir["rajon"]; ?></p>
			    						</div>
			    						<div class="two">
			    							<span class="price"> <?php echo $_fir["price"]; ?>€</span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				
	    				<?php } ?>
	    			
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Обратная связь</h2>
              <p>Мы можем провести для Вас беспланую консультацию. 
              Оставьте свои контактные данные, мы обязательно вам перезвоним.</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="https://wr-e.com/php/telegram.php" class="subscribe-form" method="POST">
                    <div class="form-group">
                      <input name="user_name" type="text" class="form-control" placeholder="Имя" required>
                      <input name="user_phone" type="phone" class="form-control" placeholder="Номер телефона" required>
                      <input name="user_messenger" type="text" class="form-control" placeholder="Telegram или WhatsApp?" required>
                      <input type="submit" value="Отправить" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
              <br>
              <p style="color: rgba(0, 0, 0, 0.5);">Нажимая "Отправить", вы соглашайтесь с <a href="/privacy" class="text-light">политикой обработки персональх данных</a></p>
              <p style="color: rgba(0, 0, 0, 0.5);">Звонки осуществляем по Telegram или WhatsApp</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">World Real <b>Estate</b></h2>
                <p><a href="/privacy">Политика обработки персональных данных.</a></p>
              <p>
                Copyright &copy; <script>document.write(new Date().getFullYear());</script><a href=""> World Real Estate</a>
              </p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Соц.сети</h2>
              <p>Вы можете найти нас в социальных сетях.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.facebook.com/worldrealestate007"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/world_real_estate07/"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://t.me/+905324795042"><span class="icon-telegram"></span></a></li>
                <li class="ftco-animate"><a href="https://wa.me/905324795042"><span class="icon-whatsapp"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Контактная информация</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Alanya, Saray Mah, 920 sok №7B, 07400</span></li>
                  <li><span class="icon icon-phone"></span><span class="text">+90 (532) 479-50-42</span></li>
                  <li><span class="icon icon-envelope"></span><span class="text">kleopatraking.estate@gmail.com</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="https://wr-e.com/js/jquery.min.js"></script>
  <script src="https://wr-e.com/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="https://wr-e.com/js/popper.min.js"></script>
  <script src="https://wr-e.com/js/bootstrap.min.js"></script>
  <script src="https://wr-e.com/js/jquery.easing.1.3.js"></script>
  <script src="https://wr-e.com/js/jquery.waypoints.min.js"></script>
  <script src="https://wr-e.com/js/jquery.stellar.min.js"></script>
  <script src="https://wr-e.com/js/owl.carousel.min.js"></script>
  <script src="https://wr-e.com/js/jquery.magnific-popup.min.js"></script>
  <script src="https://wr-e.com/js/aos.js"></script>
  <script src="https://wr-e.com/js/jquery.animateNumber.min.js"></script>
  <script src="https://wr-e.com/js/bootstrap-datepicker.js"></script>
  <script src="https://wr-e.com/js/jquery.timepicker.min.js"></script>
  <script src="https://wr-e.com/js/scrollax.min.js"></script>
  <script src="https://wr-e.com/js/main.js"></script>
    
  </body>
</html>