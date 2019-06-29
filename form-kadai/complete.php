<?php
    var_dump($_POST);
    $company = keyHantei("company");
    $name = keyHantei("name");
    $mail = keyHantei("mail");
    $tel = keyHantei("tel");
    $content = keyHantei("content");

    function keyHantei($key) {
        if(array_key_exists($key,$_POST)) {
            return $_POST[$key];
        }
        return "";
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <title>送信完了 | サンプル株式会社</title>
    </head>

    <body>
        <header>
            <!-- ロゴ&トグルボタン&メインナビ -->
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <!-- ロゴ -->
                    <a href="./contact.php" class="navbar-brand">サンプル株式会社</a>                
                    <!-- トグルボタン -->
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- メインナビ -->
                    <div id="nav-bar" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link">会社情報</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">ニュース</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">採用情報</a></li>
                            <li class="nav-item active"><a href="#" class="nav-link">お問い合わせ</a></li>
                        </ul>
                    </div><!-- /メインナビ -->
                </nav><!-- /ロゴ&メインナビ -->
        </header>

        <!-- メイン .container -->
        <div class="container">
            <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
            <p>ありがとうございました。送信を受け付けました。</p>
            <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
            
            <!-- 送信内容 -->
            <table class="table table-bordered mt-4">
                <tr><td style="width:25%;">会社名</td><td><?php echo htmlspecialchars($company,ENT_QUOTES,"UTF-8");?></td></tr>
                <tr><td>氏名</td><td><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8");?></td></tr>
                <tr><td>メール</td><td><?php echo htmlspecialchars($mail,ENT_QUOTES,"UTF-8");?></td></tr>
                <tr><td>電話番号</td><td><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8");?></td></tr>
                <tr><td>内容</td><td><?php echo nl2br(htmlspecialchars($content,ENT_QUOTES,"UTF-8"));?></td></tr>
            </table>
            <!-- 戻るボタン -->
            <div class="text-center mb-4">
                <a href="./contact.php" class="btn btn-success">戻る</a>    
            </div>
        </div><!-- /メイン .container -->

        <!-- フッター -->
        <footer class="text-center pt-3 border-top">
            &copy; 2018 SAMPLE Inc.
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>