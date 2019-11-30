<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>POSTのサンプル</title>
</head>
<body>
	<?php
		if(isset($_POST["comment"])) {
			$comment = htmlspecialchars($_POST["comment"]);
			$title = htmlspecialchars($_POST["title"]);
			$name = htmlspecialchars($_POST["name"]);
			print("タイトル：${title}");
	?>
		<br/>
	<?php
			print("${name}のコメントは「${comment}」");
		}
		else {
	?>

	<p>コメントしてください！</p>
	<form action="" method="post">

		<p>名前</p>
		<input type="text" name="name">
		<p>メールアドレス</p>
		<input type="mail" name="mail">
		<p>タイトル</p>
		<input type="text" name="title">
		<p>コメント</p>
		<input type="text" name="comment">
		<input type="submit" value="送信">
	</form>
	<?php
		}
	?>
</body>
</html>