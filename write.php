<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
$category = $_POST['category'];
$name     = $_POST['name'];
$details  = $_POST['details'];
$c = ",";
$str = $category.$c.$name.$c.$details; 

$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: read.php"); //本来ここにページ遷移すべきではないが、課題提出のため、いったんここに画面遷移させる
exit;
?>

</body>
</html>