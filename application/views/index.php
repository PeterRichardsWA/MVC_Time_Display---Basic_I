<html>
<head>
	<title>Show Counter</title>
</head>
<style "text/css">
	.board {
		border: 1px solid #000000;
		padding: 40px;
		font-size: 36pt;
	}
	.contain {
		margin: 0 auto;
	}
</style>
<body>

<p>You loaded this page:</p>
<div class="board"><?= $counter ?></div>
<p>times</p>
<a href="/main/reset/"><input type="button" value="RESET"></a>

</body>
</html>