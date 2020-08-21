<?php
session_start();
require('./dbconnect.php');

if (!isset($_SESSION['join'])) {
    header('location: contact.php');
    exit();
}

if (!empty($_POST)) {
    $statement = $db->prepare('INSERT INTO content SET name=?, email=?, content=?, date=NOW()');
    $statement->execute(array(
        $_SESSION['join']['name'],
        $_SESSION['join']['email'],
        $_SESSION['join']['message']
    ));

    unset($_SESSION['join']);

    header('location: thanks.php');
    exit();
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
            <p>以下の内容でよろしければ「送信する」ボタンをクリックしてください。</p>
        </div>

        <form action="" method="post">
            <input type="hidden" name="action" value="submit" />
            <table>
                <tr>
                    <th> <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>　Name</th>
                    <td><?php print(htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES)); ?></td>
                </tr>
                <tr>
                    <th><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>　Email</th>
                    <td><?php print(htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES)); ?></td>
                </tr>
                <tr class="comment-table">
                    <th><i class="fas fa-comment-dots fa-lg fa-fw"></i>Comment</th>
                    <td><?php print(htmlspecialchars($_SESSION['join']['message'], ENT_QUOTES)); ?></td>
                </tr>
            </table>
            <div class="confirm">
                <button type="button" onclick="location.href='contact.php?action=rewrite'" class="btn btn-outline-dark btn-lg">&laquo;&nbsp;編集する</button>
                <button type="submit" class="btn btn-outline-dark btn-lg">送信する</button>
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