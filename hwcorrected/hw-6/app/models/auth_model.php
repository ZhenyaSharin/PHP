<?php

function auth_user($login, $pwd){
	if ($login == 'user1' && $pwd == '123') {

		$_SESSION['name'] = $login;
		return true;
	}
	return false;
}

password_hash($pwd, PASSWORD_DEFAULT);   //хэширование пароля, шифрование
//пароли сохранять только так

password_verify($pwd, $hash_pwd);