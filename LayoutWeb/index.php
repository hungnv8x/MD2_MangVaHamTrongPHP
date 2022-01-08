<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Using include in php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <header><?php require "header.php"; ?></header>
    <nav><?php require "nav.php"; ?></nav>
    <article><?php require "content.php"; ?></article>
    <footer><?php require "footer.php"; ?></footer>
</div>
</body>
</html>
