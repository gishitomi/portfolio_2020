<?php
session_start();
require('./dbconnect.php');

if (!empty($_POST)) {
    if ($_POST['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($_POST['email'] === '') {
        $error['email'] = 'blank';
    }
    if ($_POST['message'] === '') {
        $error['message'] = 'blank';
    }
    if (empty($error)) {
        $_SESSION['join'] = $_POST;
        header('Location: check.php');
        exit();
    }
}

// check.phpから戻ってきた場合
if ($_REQUEST['action'] === 'rewrite' && isset($_SESSION['join'])) {
    $_POST = $_SESSION['join'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShotaGishitomi-Top</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
</head>

<body>
    <?php include('./components/header.php'); ?>

    <div class="contact-img-wrapper">
        <div class="contact-img">
            <h1>~Contact~</h1>
        </div>
    </div>
    <div class="container container-fluid">
        <div class="contact-text">
            <p>閲覧いただきありがとうございます。このサイトを通じて、私やこのサイトについて、何かコメント等がありましたら、下のフォームからお問い合わせください。</p>
        </div>

        <form action="" method="post">
            <div class="profs row">
                <div class="textbox col">
                    <div class="cp_iptxt">
                        <input type="text" id="name" name="name" size="50" maxlength="255" placeholder="Name" value="<?php print(htmlspecialchars($_POST['name'], ENT_QUOTES)); ?>">
                        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                    <?php if ($error['name'] === 'blank') : ?>
                        <div class="alert alert-danger error" role="alert">
                            ※お名前を入力してください。
                        </div>
                    <?php endif; ?>
                </div>
                <div class="textbox col">
                    <div class="cp_iptxt">
                        <input type="text" id="email" name="email" size="80" maxlength="255" value="<?php print(htmlspecialchars($_POST['email'], ENT_QUOTES)); ?>" placeholder="E-Mail">
                        <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                    <?php if ($error['email'] === 'blank') : ?>
                        <div class="alert alert-danger error" role="alert">
                            ※メールアドレスを入力してください。
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="textbox">
                <div class="cp_iptxt_textarea cp_iptxt">
                    <textarea name="message" id="message" cols="85" rows="7" placeholder="Comment"><?php print(htmlspecialchars($_POST['message'], ENT_QUOTES)); ?></textarea>
                    <i class="fas fa-comment-dots fa-lg fa-fw"></i>
                </div>
                <?php if ($error['message'] === 'blank') : ?>
                    <div class="alert alert-danger error" role="alert">
                        ※お問い合わせ内容を入力してください。
                    </div>
                <?php endif; ?>
            </div>
            <div class="send">
                <button type="submit" class="btn btn-lg btn-outline-dark">入力内容の確認</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

    <script src="./assets/js/swiper.js"></script>
    <script src="./assets/js/portfolio.js"></script>
</body>

</html>