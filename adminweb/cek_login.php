<?php 
session_start();
include "koneksi.php";

$username 	= $db->real_escape_string(stripcslashes(strip_tags(htmlspecialchars(htmlentities($_POST['username']), ENT_QUOTES))));
$pass   	= $db->real_escape_string(stripcslashes(strip_tags(htmlspecialchars(htmlentities($_POST['password']), ENT_QUOTES))));

if (!ctype_alnum($username) or !ctype_alnum($pass)) {
	header('location: ../login.php?msg=1');
}else{
	$login = $db->prepare("SELECT username, password, blokir, level FROM users WHERE username=?");
	$login->bind_param("s", $username);
	$login->execute();
	$ada 	= $login->get_result();
	$r 		= $ada->fetch_object();
	$passhash = $r->password;

	if ($r->blokir == 'Y') {
		header('location: ../login.php?msg=2');
	}elseif (password_verify($pass, $passhash)) {
		if($ada->num_rows > 0){
			session_start();
			$_SESSION['namauser'] = $r->username;
			$_SESSION['passuser'] = $r->password;
			$_SESSION['level'] 	  = $r->level;
			header('location: index.php');
		}
	}else{
		header('location: ../login.php?msg=3');
	}
}