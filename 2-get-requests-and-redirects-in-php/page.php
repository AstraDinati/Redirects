<form method="GET">
    <input name="num" value="<?php if(isset($_GET['num'])) echo $_GET['num'] ?>">
    <input type="submit">
</form>
<!-- <?php 
if(empty($_GET['num'])){
    header("Location: ?num=1");
} ?>-->

<?php
	if (!isset($_GET['num'])) {
		$_GET['num'] = 1; 
	}
?>