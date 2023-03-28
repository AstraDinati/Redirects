<?php
	session_start();
	$_SESSION['flash'][] = 'сообщение 2'; 
    header('Location: index1.php');
?>