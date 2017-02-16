<?php

session_start();
$test = file_get_contents('http://university.netology.ru/user_data/plyakin/work-8/tests/' . $_GET['file'] );
$json = json_decode($test);
if(empty(json_decode($test))) {
	header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
}

if(!empty($_COOKIE['Ban'])){
	exit('Вы забанены, зайдите позже');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST</title>
</head>
<body>
    <form action="http://university.netology.ru/user_data/plyakin/work-8/checkTest.php" method="post">
       <input type="hidden" name="name" value="<?= $_SESSION['NAME'] ?>">
        <?php
            foreach((array)$json as $key => $question){
                ?>
                    <label><?= $question->question ?></label>
                    <input type="text" name="<?= $key ?>"><br>
                <?php
            }
        ?><br>
        <input type="hidden" name="json" value='<?= json_encode($json, JSON_UNESCAPED_UNICODE) ?>'>
        <input type="submit" value="проверить результаты">
    </form>
</body>
</html>