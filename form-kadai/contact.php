<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <!-- タイトル -->
        <title>お問い合わせ | サンプル株式会社</title>
    </head>

    <body>
        <!-- ヘッダー -->
        <header>
            <!-- ロゴ&トグルボタン&メインナビ -->
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <!-- ロゴ -->
                <a href="#" class="navbar-brand">サンプル株式会社</a>                
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
        
        <!-- メイン .container-->
        <div class="container">
            <h1 class="mt-4 pb-4 border-bottom">お問い合わせ</h1>            
            <!-- メイン内上半分 -->
            <div class="mt-4 row">
                <!-- 電話テキスト&問い合わせテーブル -->
                <div class="col-md-4">
                    <i class="fas fa-phone"></i>
                    <strong>お電話：</strong>
                </div>
                <div class="col-md-8">
                    <p>該当する内容の電話番号におかけください。</p>
                    <!-- 問い合わせテーブル -->
                    <table class="table table-bordered table-striped mt-4">
                        <thead>
                            <tr>
                                <th>内容</th>
                                <th>電話番号</th>
                                <th>担当</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0000</td>
                                <td>煌木</td>
                            </tr>
                            <tr>
                                <td>採用に関するお問い合わせ</td>
                                <td>03-0000-0001</td>
                                <td>煌田</td>
                            </tr>
                            <tr>
                                <td>サービスに関するお問い合わせ</td>
                                <td>03-0000-0002</td>
                                <td>煌山</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /電話テキスト&問い合わせテーブル -->
                <!-- 営業時間(card) -->
                <div class="card offset-md-4 col-md-8 border-0">
                    <div class="card-header border">
                        <i class="fas fa-info-circle"></i>
                        営業時間
                    </div>
                    <div class="card-body border">
                        平日10時～19時 (土日・祝日は対応しておりません)
                    </div>
                </div>
            </div><!-- /メイン内上半分 -->
            <!-- メイン内下半分 -->
            <!-- メールテキスト&フォーム -->
            <div class="mt-4 row">
                <div class="col-md-4">
                    <i class="fas fa-envelope"></i>
                    <strong>メール：</strong>
                </div>
                <div class="col-md-8">
                    <p>
                        プライバシーポリシーをご確認いただき、ご同意の上で、送信ボタンをクリックしてください。<br />
                        お問い合わせの内容は、受付日から3営業日以内をめどにご返信いたします。
                    </p>                    
                    <!-- フォーム -->
                    <form action="./complete.php" method="POST">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">会社名：</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="company" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">氏名：</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">メール：</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mail" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">電話番号：</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tel" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">内容：</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="content" required></textarea>
                            </div>
                        </div>
                        <!-- 送信ボタン -->
                        <div class="form-group row">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-success btn-block">お問い合わせ内容を送信する</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /メイン内下半分 -->
        </div><!-- /メイン .container -->

        <!-- フッター -->
        <footer class="text-center pt-3 pb-3 border-top">
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