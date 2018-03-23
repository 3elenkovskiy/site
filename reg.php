<?php
require_once('templates/top.php');
	if($_POST){
		$errors=[];
		if(!$_POST['name']){
			$errors[]='поле для заполнения';
		}
		if($_POST['password']!=
		$_POST['passwordS']
		){
			$errors[]='пароль не совпадает';
	}
	if (empty($errors)){
		$query="INSERT INTO users
		VALUES(
		NULL,
		'".$_POST['name']."',
		'".$_POST['password']."',
		'".$_POST['email']."',
		NOW(),
		NOW(),
		'unblock'
		)";
		$cat=mysqli_query($dbconnect,$query);
		if (!$cat){
			exit('error query');
		}
		?>
		<script>
	document.location.href='index.php';
	</script>
		<?
	}else{
		foreach($errors as $err){
			echo"<div class='error'>";
			echo $err;
			echo"</div>";
		}
	}
}
?>
	<h2>Регестрация<h2>
		<form method="post" action="reg.php">
			
  <div class="form-group">
    <label for="name">имя</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">имейл</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">пароль</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">пароль2</label>
    <input type="password" class="form-control" id="password2" name="passwordS" placeholder="name">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
				
<?php
require_once('templates/buttom.php');
?>
