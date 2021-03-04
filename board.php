<html>
<meta charset="utf-8">
<title>留言板</title>
<a href="view.php">觀看留言</a><p>
<form name="barry" action="index.php" method="post">
姓名：<input type="text" name="Name"><br>
標題：<input type="text" name="Title"><br>
內容：<textarea name="Content"></textarea><br>
<input type="submit" name="submit" value="確定"><input type="reset" value="清除">
</form>
</html>

<?php
if (isset($_POST['submit'])) {
    include "db.php";
    echo 'successfully!!!!';
    $Name = $_POST['Name'];
    $Title = $_POST['Title'];
    $Content = $_POST['Content'];
    $sql = "INSERT barry(Name, Title, Content) VALUES ('$Name', '$Title', '$Content')";
	if (!mysqli_query($db, $sql)) {
		die(mysqli_error());
	} else { 
        echo '<div class="warning">內容不完整!!</div>';
		echo "
<script>
setTimeout(function(){window.location.href='login.php';},2000);
</script>";
	}
	mysqli_close();
}
?>