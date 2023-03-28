<?php
	session_start();
	$_SESSION['flash'][] = 'сообщение 1 '; 
    header('Location: page2.php');
?>