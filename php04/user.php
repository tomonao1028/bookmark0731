<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ユーザー登録</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">ユーザー登録</nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
USER:<input type="text" name="lid" />
PASSWORD:<input type="password" name="lpw" />
<input type="submit" value="LOGIN" />
</form>


</body>
</html>