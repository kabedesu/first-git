<?php 
    date_default_timezone_set("Asia/Tokyo");
    $now_hour = (int)date("G");
    $name = "ななし";
    if(array_key_exists("target_name",$_POST)) {
        $name = $_POST["target_name"];
    }

    function greeting($hour) {
        $result = "";
        if(6 <= $hour && $hour < 12) {
            $result = "おはよう";
        } elseif(12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        } else {
            $result = "こんばんは";
        }
        return $result;
    }

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>TITLE</title>
    </head>
    <body>
        <form action="test.php" method="POST">
            <label>Name: <input type="text" name="target_name" required></label>
            <input type="submit" value="Send">
        </form>
        <br>
        今は<?php echo $now_hour?>時です。<br>
        <?php echo greeting($now_hour),htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>さん<br>
    </body>
</html>