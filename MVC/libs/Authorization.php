<?php

class Authorization
{

	static function logged(){
		session_start();
		if (!$_SESSION["logged"]) {
			header("Location: ".APP_URL."/users/login");
			exit;
		}
	}

	public function login($user){
		session_start();
		$_SESSION["logged"] = true;
		$_SESSION["username"] = $user["name"];
		$_SESSION["Tipo"] = $user["type_id"];
		$_SESSION["start"] = time();
		$_SESSION["expire"] = $_SESSION["start"] + (5 * 60);
	}

	public function logout(){
		session_unset();

		session_destroy();

		echo "
			<script type='text/javascript'>
			alert('Ha salido correctamente');
			window.location='http://localhost/MVC/users/login';
			</script>
		";
	}
}
