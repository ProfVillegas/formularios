<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
$d=dir(".");
echo "Path: ".$d->path."\n";
echo "<ul>";
while (false !== ($entry = $d->read())) {
   echo "<li><a href='{$entry}'>{$entry}</a></li>";
}
echo "</ul>";
$d->close();
?>
</body>
</html>
