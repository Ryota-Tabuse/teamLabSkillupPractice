<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try{
	//DB接続
	$dbh = new PDO($dsn, $user, $pass);

	//ここでクエリ実行する
	//SELECT
	$sth_select = $dbh->prepare('SELECT * FROM test_comments WHERE name = ?');
	//INSERT
	$sth = $dbh->prepare('INSERT INTO test_comments (name, text) VALUES (?, ?)');

	//DBを切断
	$dbh = null;
} catch (PDOException $e) {
	//接続エラーはここに入る
	print "DB ERROR" . $e->getMessage() . "<br/>";
	die();
}

?>
<?php
  
?>
<?php
	$name = "JOHN";
	$sth_select->execute(array($name));
	$prepare_result = $sth_select->fetchAll();
	foreach($prepare_result as $row) {
	  print $row["name"] . ": " . $row["text"] . "<br/>";
	}
	$sth_select->execute(array($name));
?>
