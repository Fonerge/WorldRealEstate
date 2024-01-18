<?php
	require_once('auth_func.php');
	session_start();
?>
<?php if (!empty($_SESSION['auth'])): ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link type="image/png" sizes="16x16" rel="icon" href="../images/favicon.png">
	<title>WRE-admin</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<img src="logo.png" width="80px" height="119px">
			</div>
			<div class="title">
				<h1>Админ-панель сайта <a href="https://wr-e.com">wr-e.com</a>.</h1>
	    		<div class="inner">
	    			<p>Вы вошли в панель сайта.</p>
	    			<form action="logout.php" method="POST">
	    			    <button type="submit" class="btn_logout">Выйти</button>
	    			</form>
	    		</div>
			</div>
		</div>
		<hr>
	</header>
	<?php 
        if (isset($_POST['send'])){
            $estate= $_POST['type_estate'];
            $aprt= $_POST['name_apart'];
            $region= $_POST['rajon'];
            $rooms= $_POST['room'];
            $sqrt_aprt= $_POST['square'];
            $price_aprt= $_POST['price'];
            $max_price_aprt = $_POST['max_price'];
            $sor= $_POST['sale_or_rent'];
            $_rent_mount = $_POST['rent_mount'];

            $_region = $_POST['_rajon'];
            $_rooms = $_POST['_room'];
            $_sor = $_POST['_sale_or_rent'];
            $_floor = $_POST['floor'];
            $_dist_sea = $_POST['dist_sea'];
            $_dist_airport = $_POST['dist_airport'];
            $_dist_center = $_POST['dist_center'];
            $_discription = $_POST['discription'];
            $links = $_POST['google_link'];
            
			$countfiles = count($_FILES['file']['name']);
			$photo_array = array($_FILES['file']['name']);
       		for($i=0; $i<$countfiles; $i++){
         		$path = 'upload/'. time() . $_FILES['file']['name'][$i];
         		// Upload file
         		move_uploaded_file($_FILES['file']['tmp_name'][$i],'../' . $path);
      		}

			if ($countfiles == 9){
				mysqli_query($data, "INSERT INTO `property_post` (`id`, `type_estate`, `name_apart`, `rajon`, `room`, `square`, `price`, `max_price`, `sale_or_rent`, `rent_mount`,`file`, `_rajon`, `_room`, `_sale_or_rent`, `floor`, `dist_sea`, `dist_airport`, `dist_center`, `discription`, `google_link`)
            	VALUES (NULL,'$estate', '$aprt', '$region', '$rooms', '$sqrt_aprt', '$price_aprt', '$max_price_aprt', '$sor', '$_rent_mount', '$path', '$_region', '$_rooms', '$_sor', '$_floor', '$_dist_sea', '$_dist_airport', '$_dist_center', '$_discription', '$links')") or die (mysqli_error($data));
      
				if(is_array($photo_array)){
					foreach($photo_array as $row => $value){
						$img1_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[0]);
						$img2_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[1]);
						$img3_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[2]);
						$img4_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[3]);
						$img5_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[4]);
						$img6_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[5]);
						$img7_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[6]);
						$img8_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[7]);
						$img9_1 = mysqli_real_escape_string($data, 'upload/'. time() . $value[8]);

						$id_flat = mysqli_insert_id($data);

						mysqli_query($data, "INSERT INTO `photo_flats` (`id_photos`,`id_flats`,`img1`,`img2`,`img3`,`img4`,`img5`,`img6`,`img7`,`img8`,`img9`) 
						VALUES (NULL, '$id_flat','$img1_1', '$img2_1', '$img3_1', '$img4_1', '$img5_1', '$img6_1', '$img7_1', '$img8_1', '$img9_1')") or die (mysqli_error($data));
      				}
    			}	
			}		
        }
    ?>
	<form class="form-control" action="panel.php" method="POST" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<label for="text"><b>Параметры для отправки на <a href="https://wr-e.com/property.php">property.php</a></b></label>

				<input type="text" placeholder="Название апартаментов" name="name_apart" required>

				<select name="type_estate">
	   				<option>Тип недвижимости</option>
	   				<option value="Apartment">Квартира</option>
	   				<option value="Villa">Вилла</option>
	   				<option value="Land">Земельный участок</option>
	   			</select>

			   	<select name="rajon">
			   		<option>Район</option>
			   		<option>Центр Алании</option>
			        <option>Джикджилли</option>
			        <option>Хасбахче</option>
			        <option>Каргыджак</option>
			        <option>Конаклы</option>
			        <option>Кестель</option>
			        <option>Махмутлар</option>
			        <option>Оба</option>
			        <option>Тосмур</option>
			        <option>Газипаша</option>
			        <option>Тюрклер</option>
			   	</select>

			    <select name="room">
			    	<option>Количество комнат</option>
			       	<option>1+0</option>
			       	<option>1+1</option>
			       	<option>2+1</option>
			       	<option>3+1</option>
			       	<option>4+1</option>
			       	<option>5+1</option>
			       	<option>6+1</option>
			       	<option>7+1</option>
			    </select>

			    <select name="sale_or_rent">
			    	<option>Продажа/Аренда</option>
			       	<option>Продажа</option>
			       	<option>Аренда</option>
			    </select>

			    <input type="text" placeholder="Площадь, кв.м" name="square" required>
			    <input type="text" placeholder="Стоимость, €" name="price" required>

			    <select name="max_price">
			    	<option value="">Макс. стоимость</option>
	                <option value="1000d">1,000€</option>
	                <option value="5000d">5,000€</option>
	                <option value="10000d">10,000€</option>
	                <option value="50000d">50,000€</option>
	                <option value="60000d">60,000€</option>
	                <option value="70000d">70,000€</option>
	                <option value="80000d">80,000€</option>
	                <option value="90000d">90,000€</option>
	                <option value="100000d">100,000€</option>
	                <option value="110000d">110,000€</option>
	                <option value="120000d">120,000€</option>
	               	<option value="130000d">130,000€</option>
	               	<option value="140000d">140,000€</option>
	                <option value="150000d">150,000€</option>
	                <option value="200000d">200,000€</option>
	                <option value="250000d">250,000€</option>
	               	<option value="300000d">300,000€</option>
	               	<option value="400000d">400,000€</option>
	               	<option value="500000d">500,000€</option>
	                <option value="600000d">600,000€</option>
	                <option value="700000d">700,000€</option>
	                <option value="800000d">800,000€</option>
	                <option value="900000d">900,000€</option>
	                <option value="1000000d">1,000,000€</option>
			    </select>

				<select name="rent_mount">
					<option></option>
					<option>/ месяц</option>
				</select>

	    		<hr>

	    		<input multiple type="file" name="file[]">
			</div>
			<div class="row">
				<label for="text"><b>Параметры создания объекта на странице</a></b></label>

			   	<select name="_rajon">
			   		<option>Район</option>
			   		<option value="mer">Центр Алании</option>
			        <option value="jik">Джикджилли</option>
			        <option value="has">Хасбахче</option>
			        <option value="kar">Каргыджак</option>
			        <option value="kon">Конаклы</option>
			        <option value="kes">Кестель</option>
			        <option value="mah">Махмутлар</option>
			        <option value="oba">Оба</option>
			        <option value="tos">Тосмур</option>
			        <option value="gaz">Газипаша</option>
			        <option value="tur">Тюрклер</option>
			   	</select>

			    <select name="_room">
			    	<option>Количество комнат</option>
			       	<option value="10r">1+0</option>
			       	<option value="11r">1+1</option>
			       	<option value="21r">2+1</option>
			       	<option value="31r">3+1</option>
			       	<option value="41r">4+1</option>
			       	<option value="51r">5+1</option>
			       	<option value="61r">6+1</option>
			       	<option value="71r">7+1</option>
			    </select>

			    <select name="_sale_or_rent">
			    	<option>Продажа/Аренда</option>
			       	<option value="sale">Продажа</option>
			       	<option value="rent">Аренда</option>
			    </select>

			    <input type="text" placeholder="Этаж" name="floor">
			    <input type="text" placeholder="Расстояние до моря, м" name="dist_sea">
			    <input type="text" placeholder="Расстояние до аэропорта, км" name="dist_airport">
			    <input type="text" placeholder="Расстояние до центра, км" name="dist_center">

			    <textarea cols="350px" name="discription" placeholder="Описание объекта недвижимости..."></textarea>

	    		<hr>
	    		<input type="text" class="google-input" placeholder="Ссылка на Google Drive" name="google_link" required><br>

			</div>
		</div>
		<div class="container">
			<button type="submit" class="btn" name="send">Отправить</button>
		</div>
	</form>
</body>
</html>
<?php else: ?>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="admin.css">
		<title>WRE-admin</title>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="logo">
					<img src="logo.png" width="80px" height="119px">
				</div>
				<div class="title">
					<h1>Админ-панель сайта <a href="https://wr-e.com">wr-e.com</a>.</h1>
		    		<div class="inner">
		    			<p>Вы вошли в панель сайта.</p>
		    		</div>
				</div>
			</div>
			<hr>
		</header>
	</body>
	<div class="container">
		<div class="text-center">
			<p>Пожалуйста, авторизуйтесь! <a href="login.php">Sign in</a></p>
		</div>
	</div>
	</html>
<?php endif; ?>