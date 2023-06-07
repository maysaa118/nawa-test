<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$name = ' Maysaa';
$fruite = 'Apple';
echo '<h1>My name is' . $name.'</h1>';
echo "<p>I ate 10 {$fruite}s</p>";

$skills =array ('PHP','Java','C++','HTML','CSS','Js');
?>
<ul>
    <?php foreach ($skills as $skill) : ?>
    <li><?= $skill ?></li>
    <?php endforeach ?>
</ul>
</body>
</html>