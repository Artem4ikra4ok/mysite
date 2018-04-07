<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="styles/style.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<div id="dav">
		<ul>
			<li><a href="https://www.facebook.com/profile.php?id=100018172511451">facebook</li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

	<p>привет артем</p>
	<?php
	/*$a = mysql_connect(SELECT * FROM articles);
echo "$a['titles','text','views'];"
	$b = 7;

if ($a > $b) {echo "a больше, чем b";}

elseif ($a == $b) {echo "a равен b";}

else {echo "a меньше, чем b";}
*/?>

<?php 
	class User {
		public $name = "Имя";
		public $password = "пароль";
		public $email = "емейл";
		public $city = "город";

		public function Hello() {
			echo "Hello {$this->name}";
		}
	}
$admin = new User();
$admin->Hello();

//$admin->name="Alexey";
//$user1->name="Andrey";

//echo $admin->name;
//echo $user1->name;
 ?>
	<div class="divchik">
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>


	</div>
</body>
</html>