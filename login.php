<?php
require_once('templates/top.php');
	if($_POST){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$errors=[];
	
		$query="SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$cat=mysqli_query($dbconnect,$query);
		if (!$cat){
			exit('error query');
		}
		$user = mysqli_fetch_array($cat);
		if($user['id']){
			$_SESSION['user_id'] = $user['id'];
			}else{
				$errors[] = 'Не правильно логин или пароль';
			}
	if (empty($errors)){
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
<form method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
require_once('templates/buttom.php');
?>
