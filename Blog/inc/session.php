<?php
	session_start();
	//require_once '../inc/db.php';
	//require_once '../inc/common.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/Git/Blog/inc/db.php' ;
	require_once $_SERVER['DOCUMENT_ROOT'] . '/Git/Blog/inc/common.php' ;
	function has_notice(){
		return isset($_SESSION['notice']);
	}

	function get_notice(){
		return $_SESSION['notice'];
	}

	function set_notice($notice){
		$_SESSION['notice'] = $notice;
	}

	function clean_notice(){
		unset($_SESSION['notice']);
	}

	function is_login(){
		return isset($_SESSION['userid']);
	}
	function login($name,$password,$remember_me=false){
		$user = load_user($name);
		// var_dump($user->password);
		// echo '<hr>';
		// var_dump(encrypt_password($password));
		// var_dump($user);结果是:object(stdClass)#3 (4) { ["id"]=> string(1) "4" ["name"]=> string(4) "asdf" ["password"]=> string(32) "2d82a6da29b9f7c488c45dc355ef98a8" ["created_at"]=> string(10) "2014-10-28" }
		if( ($user) && (encrypt_password($password) == $user->password )){
			$_SESSION['userid'] =  $user->id;
			if($remember_me){
				$expire_time =  7*24*3600*100 ;
				session_set_cookie_params($expireTime);
			}
			set_notice("欢迎您：{$name} 来到本站!");
			return $user;
		}else{
			// var_dump(encrypt_password($pwd));
			set_notice("用户名或密码错误");
			return false;
		}
	}

	define("SALT_KEY","dsfsd2387008~!~@sdf");
	function encrypt_password($plain){
		return hash_hmac('sha256', $plain, SALT_KEY);
	}


	function logout(){
		session_destroy();
	}

	function current_user(){
		if (is_login()) {
			return load_user(intval($_SESSION['userid']));
		}

	}

	function load_user($id_or_name){
		if(is_int($id_or_name)){
			$where = "id = :id";
		}else{
			$where = "name = :id";
		}

		global $db;
		$sql = "select * from users where " . $where  ;
		$query = $db->prepare($sql);
		$query->bindParam(':id',$id_or_name);
		$query->execute();
		$user = $query->fetchObject();
		return $user;
	}

	function authenticate_user(){
		if(!is_login()){
			set_notice('必须登录后方可使用本功能');
			redirect_to('/sessions/new.php');
		}

	}



?>