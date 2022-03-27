<!DOCTYPE html>
<html>
<head>
    <title>Forum ver 1 - static</title>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
  <h1>
      Forum ver 1 - static
  </h1>
</header>
<nav>
        <a href="../">Home</a>
        <?php for($n=1;$n<=10;$n++) { if( is_dir("../zadanie".$n) ) { ?>
        <a href="../zadanie<?=$n?>">Zadanie <?=$n?></a>
        <?php } } ?>
</nav>