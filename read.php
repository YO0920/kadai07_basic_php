<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Contact Details</title>
</head>
<body>
    
</body>
</html>
<?php
$csv_file = "data.csv";
echo "<table border='1'>
<p>本来はここには飛ばさない。裏で確認するためのページ。課題のため飛ばしています。</p>
<tr>
<th>カテゴリ</th>
<th>名前</th>
<th>内容</th>
</tr>";

$file = fopen($csv_file, "r");
    while(($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";
    echo "<td>".$data[2]."</td>";
    echo "</tr>"; 
    }
    fclose($file);
    echo "</table>";
?>