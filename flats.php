<?php
  require_once 'admin/auth_func.php';
  $flat = get_flats_by_id($_GET['id']);
  $flat_img = get_image_flats_by_id($_GET['id']);
?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>(<?php echo $flat["id"]; ?>) <?php echo $flat["name_apart"];?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="World Real Estate">
    <meta name="keywords" content="world real estate">
    <meta name="robots" content="all">
    <meta name="description" content="<?php echo $flat["discription"];?>">

	<link rel="icon" type="image/x-icon" href="https://wr-e.com/images/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="https://wr-e.com/images/favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://wr-e.com/images/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://wr-e.com/images/apple-touch-icon.png">

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
			a {
				text-decoration: none;
			}

			input[type=textfield]{
				width:100%;
  			padding:15px;
  			height:150px;
			}

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
	        	<li class="nav-item"><a href="https://wr-e.com/" class="nav-link">Главная</a></li>
	          <li class="nav-item active"><a href="/estate" class="nav-link">Недвижимость</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">О нас</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Контакты</a></li>
	          <li class="nav-item cta"><a href="https://t.me/+905324795042" class="nav-link ml-lg-2"><span class="icon-user"></span> Telegram</a></li>
	          <li class="nav-item cta cta-colored"><a href="https://wa.me/905324795042" class="nav-link"><span class="icon-pencil"></span> WhatsApp</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">

          			<div class="carousel slide" id="carouselControls" data-ride="carousel">
          				<div class="carousel-inner">
	          				<div class="carousel-item active">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img1"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img2"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img3"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img4"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img5"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img6"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img7"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img8"]; ?>');"></div>
	          				</div>
	          				<div class="carousel-item">
	          					<div class="properties-img" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img9"]; ?>');"></div>
          					</div>
          				</div>
          				<a href="#carouselControls" class="carousel-control-prev" role="button" data-slide="prev">
          					<span class="carousel-control-prev-icon"></span>
          				</a>
          				<a href="#carouselControls" class="carousel-control-next" role="button" data-slide="next">
          					<span class="carousel-control-next-icon"></span>
          				</a>
          			</div>
          		</div>
          	</div>

          	<div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
          		<h2><?php echo $flat["name_apart"]; ?></h2>

          		<p class="rate mb-4">
          			<span class="loc"><a href=""><i class="icon-map"></i><?php echo $flat["rajon"]; ?></a></span>
    					</p>

    					<div class="d-md-flex mt-5 mb-5 title">
    						<ul>
	    						<li><span>Кол-во комнат: </span><?php echo $flat["room"]; ?></li>
	    						<li><span>Площадь: </span><?php echo $flat["square"]; ?> кв.м</li>
	    						<li><span>Этаж: </span><?php echo $flat["floor"]?></li>
	    					</ul>
	    					<ul class="ml-md-5 title"> <!-- ml-md-5 -->
	    						<li><span>Расстояние до моря: </span><?php echo $flat["dist_sea"]?> м</li>
	    						<li><span>Расстояние до аэпорта: </span><?php echo $flat["dist_airport"]?> км</li>
	    						<li><span>Расстояние до центра: </span><?php echo $flat["dist_center"]?> км</li>
	    					</ul>
    					</div>
    					<p><?php echo $flat["discription"]?></p>
    					<div class="mt-2 md-2 d-flex justify-content-right">
    						<p class="bottom-area d-flex justify-content-right">
    							<li class="price"><span>Цена: </span> <?php echo $flat["price"]; ?> € <?php echo $flat["rent_mount"]; ?></li>
    						</p>
    					</div>
          	</div>

						<div class="col-md-12 properties-single ftco-animate mt-5">
          		<h4 class="mb-4">См. изображения</h4>
          		<div class="row">
          			<div class="col-md-5 ftco-animate">
				    			<div class="properties">
				    				<a href="" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img1"]; ?>');" data-toggle="modal" data-target="#exampleModal">
				    					<div class="icon d-flex justify-content-center align-items-center">
				    						<span class="icon-search2"></span>
				    					</div>
				    				</a>
				    			</div>
				    		</div>
				    		<div class="col-md-5 ftco-animate">
				    			<div class="properties">
				    				<a href="" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img2"]; ?>');" data-toggle="modal" data-target="#exampleModal1">
				    					<div class="icon d-flex justify-content-center align-items-center">
				    						<span class="icon-search2"></span>
				    					</div>
				    				</a>
				    			</div>
				    		</div>
				    		<div class="col-md-5 ftco-animate">
				    			<div class="properties">
				    				<a href="" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img3"]; ?>');" data-toggle="modal" data-target="#exampleModal2">
				    					<div class="icon d-flex justify-content-center align-items-center">
				    						<span class="icon-search2"></span>
				    					</div>
				    				</a>
				    			</div>
				    		</div>
				    		<div class="col-md-5 ftco-animate">
				    			<div class="properties">
				    				<a href="" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('https://wr-e.com/<?php echo $flat_img["img4"]; ?>');" data-toggle="modal" data-target="#exampleModal3">
				    					<div class="icon d-flex justify-content-center align-items-center">
				    						<span class="icon-search2"></span>
				    					</div>
				    				</a>
				    			</div>
				    		</div>
          		</div>
          	</div>
          </div>
          <!-- modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          	<div class="modal-dialog">
          		<div class="modal-content h-100">
          				<img src="https://wr-e.com/<?php echo $flat_img["img1"]; ?>">
          		</div>
          	</div>
          </div>
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          	<div class="modal-dialog">
          		<div class="modal-content h-100">
          				<img src="https://wr-e.com/<?php echo $flat_img["img2"]; ?>">
          		</div>
          	</div>
          </div>
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          	<div class="modal-dialog">
          		<div class="modal-content h-100">
          				<img src="https://wr-e.com/<?php echo $flat_img["img3"]; ?>">
          		</div>
          	</div>
          </div>
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          	<div class="modal-dialog">
          		<div class="modal-content h-100">
          				<img src="https://wr-e.com/<?php echo $flat_img["img4"]; ?>">
          		</div>
          	</div>
          </div>
        <div class="col-lg-4 sidebar ftco-animate">
          	<div class="sidebar-box">
	            <div class="sidebar-box ftco-animate">
	              <div class="categories">
	                <form  action="<?php echo $flat["discription"]?>php/telegram.php" class="subscribe-form" method="POST">
	                	<div class="categories text-center">
	                		<h3>Интересует этот объект недвижимости?</h3>
	                		<input name="user_name" type="text" class="form-control" placeholder="Имя" required style="font-size: 16px;"><br>
                    	<input name="user_phone" type="number" class="form-control" placeholder="Номер телефона" required style="font-size: 16px;"><br>
                    	<select name="user_messenger" type="text" class="form-control text-secondary" value="Telegram или WhatsApp?" style="font-size: 16px;">
                    		<option class="bg-light" style="font-size: 15px;">Выберите мессенджер ↓</option>
                    		<option class="bg-light" style="font-size: 15px;" value="Telegram">Telegram</option>
                    		<option class="bg-light" style="font-size: 15px;" value="WhatsApp">WhatsApp</option>
                    	</select><br>
                    	<input name="user_message1" type="textfield" class="form-control text-secondary" value="Интересует объект №<?php echo $flat["id"]; ?>" style="font-size: 16px;"><br>
                    	<input type="submit" value="Отправить" class="submit px-3 btn btn-primary">
	                	</div>
	                </form>
	              </div>
	            </div>
          	</div>
          	<div class="sidebar-box">
	            <div class="sidebar-box ftco-animate">
	              <div class="categories">
	                <h3>Категория недвижимости</h3>
	                <li><a href="#"><?php echo $flat["type_estate"];?></a></li>
	                <h3>Ссылка на объект в Google Drive</h3>
	                <li><a href="<?php echo $flat["google_link"];?>" style="font-size: 14px; overflow: hidden;"><?php echo $flat["google_link"];?></a></li>
	                <li></li>
	              </div>
	            </div>
          	</div>
          </div>
        </div> <!-- .col-md-8 -->
    </section> <!-- .section -->
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">World Real <b>Estate</b></h2>
                <p><a href="https://wr-e.com/privacy">Политика обработки персональных данных.</a></p>
            	<p>
              	Copyright &copy; <script>document.write(new Date().getFullYear());</script> World Real Estate
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
 