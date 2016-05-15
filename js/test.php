<?php 
	$to = "kovchyk@gmail.com";
	$name =  htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']); 
	$subject = htmlspecialchars($_POST['subject']);
	$description = htmlspecialchars($_POST['description']);
/*	echo $name, $email, $subject, $description;
*//*	mail($to, $subject, 'This message from'. ' ' .$name. ' ' .$description, 'From:'.$email);
*/
	$db_local = "localhost";
	$db_user = "root";
	$db_password = "";

	$link = mysqli_connect($db_local, $db_user, $db_password) or die(mysqli_error());
	$query = "SELECT * FROM \`comment\`";
	$res = mysqli_query($link, $query);
	if($res) {
		echo "<p>OK</p>";
	} else {
		echo "<p>Bad</p>";
	};
	echo print_r($_POST, 1);
?>
<form action="" method="post">
	<fieldset>
		<div class="row">
			<label for="name">Имя</label>
			<input type="text" id="name" name="name" value="">
		</div>
		<div class="row">
			<label for="email">E-mail</label>
			<input type="text" id="email" name="email" value="">
		</div>
		<div class="row">
			<label for="subject">Тема</label>
			<input type="text" id="subject" name="subject" value="">
		</div>
		<div class="row">
			<label for="description">Описание</label>
			<input type="text" id="description" name="description" value="">
		</div>
		<div class="row">
			<label for="check1">Чай</label>
			<input type="checkbox" id="check1" name="check[]" value="tea">
		</div>
		<div class="row">
			<label for="check2">Кофе</label>
			<input type="checkbox" id="check2" name="check[]" value="coffe">
		</div>
		<input type="submit" name="submit" value="Отправить">
	</fieldset>
</form>