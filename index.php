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
    <link rel="stylesheet" href="./assets/css/portfolio.css">
    <link rel="stylesheet" href="./assets/css/breakpoint.css">
</head>

<body>
    <?php include('./components/header.php'); ?>
    <div class="jumbotron jumbotron-extend">
        <div class="container-fluid jumbotron-container">
            <h1 class="site-name">Shota Gishitomi</h1>
            <p><a class="btn btn-primary btn-lg btn-dark main-btn" href="portfolio.php" role="button">ポートフォリオはこちら</a></p>
        </div>
    </div>
    <article class="container-fluid container news">
        <div class="row">
            <div class="col topic">
                <h1>~Blog~</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group" id="notes">
                    <li class="list-group-item black">新着記事</li>
                    <?php
                    $xmlTree = simplexml_load_file('https://note.com/gisho1140/rss');
                    // var_dump($xmlTree);
                    foreach ($xmlTree->channel->item as $item) :
                    ?>
                        <a href="<?php print($item->link); ?>" class="list-group-item list-group-item-action note-list nodisplay" target="blank">
                            <?php print($item->title); ?>
                            <span class="float-right"><?php print(date("Y/n/d", strtotime($item->pubDate))); ?></span>
                        </a>
                    <?php endforeach; ?>
                </ul>
                <br>
                <button type="button" class="btn btn-outline-secondary btn-block note-more nodisplay">read more</button>
            </div>
            <div class="col-md">
                <ul class="list-group" id="qiitas">
                    <li class="list-group-item black">Qiita</li>
                    <?php 
                        $xmlQiita = simplexml_load_file('https://qiita.com/gishitomi/feed');
                        foreach ($xmlQiita->entry as $item):
                    ?>
                    <a href="<?php print($item->url); ?>" class="list-group-item list-group-item-action nodisplay qiita-list">
                        <?php print($item->title); ?>
                        <span class="float-right"><?php print(date("Y/n/d", strtotime($item->published))); ?></span>
                    </a>
                        <?php endforeach; ?>
                    <br>
                    <button type="button" class="btn btn-outline-secondary btn-block qiita-more nodisplay">read more</button>
                </ul>
            </div>
        </div>

    </article>
    <main class="container-fluid container about-me">
        <div class="row">
            <div class="col topic">
                <h1>~Abount me~</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                    <div class="profile-image col-6">
                        <img src="./assets/img/IMG_3755 3.jpeg" alt="">
                    </div>
                    <div class="col-3">
                        <ul class="list-inline">
                            <li>
                                <a href="#"><i class="fab fa-github sns-icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter sns-icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram sns-icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f sns-icon"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row comment">
                    <div class="col">
                        <p>地道にプログラミングを独学中。<br>最近はいつも家にいるのでダラダラしてることが多いです。<br>お問い合わせはこちら</p>
                    </div>
                </div>

            </div>


            <div class="col-lg">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-flush">プロフィール</li>
                    <li class="list-group-item list-group-item list-group-item-light">名前 <i class="fas fa-angle-down"></i>
                    </li>
                    <li class="list-group-item">宜志富紹太</li>
                    <li class="list-group-item list-group-item list-group-item-light">生年月日 <i class="fas fa-angle-down"></i>
                    </li>
                    <li class="list-group-item">1996年12月15日</li>
                    <li class="list-group-item list-group-item list-group-item-light">出身地 <i class="fas fa-angle-down"></i>
                    </li>
                    <li class="list-group-item">沖縄県</li>
                    <li class="list-group-item list-group-item list-group-item-light">自己紹介 <i class="fas fa-angle-down"></i>
                    </li>
                    <li class="list-group-item">
                        琉球大学4年次。3ヶ月間プログラミングスクールに通い、フロントサイドの言語をメインに学習しました。大学では機械学習を用いて河川の水位予測手法を研究中。<br> 現在は研究と並行してプログラミングを独学で勉強中。
                    </li>

                </ul>
            </div>
        </div>
    </main>
    <main class="container-fluid container skills">
        <div class="row">
            <div class="col topic">
                <h1>~Technical skills~</h1>
            </div>
        </div>
        <div class="sheet table-responsive">
            <table class="table table-bordered">
                <tr class="info">
                    <td>カテゴリ</td>
                    <td>種別</td>
                    <td>レベル</td>
                    <td>経験期間</td>
                    <td>スキルレベル・備考</td>
                </tr>
                <tr>
                    <td>言語</td>
                    <td>HTML</td>
                    <td>★★</td>
                    <td>約１年</td>
                    <td>簡単なWebサイトが制作できるレベル</td>
                </tr>
                <tr>
                    <td>言語</td>
                    <td>CSS</td>
                    <td>★★</td>
                    <td>約１年</td>
                    <td>簡単なWebサイトが制作できるレベル</td>
                </tr>
                <tr>
                    <td>言語</td>
                    <td>JavaScript</td>
                    <td>★★</td>
                    <td>約１年</td>
                    <td>簡単な動的サイトが制作できる</td>
                </tr>
                <tr>
                    <td>言語</td>
                    <td>PHP</td>
                    <td>★★</td>
                    <td>約１年</td>
                    <td>掲示板サイトの仕組みを開発可能<br>(ログインフォーム、画像の投稿など)</td>
                </tr>
                <tr>
                    <td>言語</td>
                    <td>Python</td>
                    <td>★★</td>
                    <td>約１年</td>
                    <td>主に卒業研究で機械学習のモデルを構築する時に使用している。<br>ライブラリを使い、簡素なデータ解析ができるレベル。</td>
                </tr>
                <tr>
                    <td>DB</td>
                    <td>MySQL</td>
                    <td>★★</td>
                    <td>約１年</td>
                    <td>テーブル同士の結合ができる、ソートなど</td>
                </tr>
                <tr>
                    <td colspan="5">
                        ★: 人に教えてもらいながらだったら実装ができる<br> ★★: 自分で調べながら実装ができる<br> ★★★: 単一の言語については、自身でフレームワークやライブラリを作ることができる。
                    </td>
                </tr>
            </table>
        </div>
    </main>
    <!-- <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./assets/img/海.jpeg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/img/伊是名.jpeg" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div> -->
    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <p class="navbar-brand">©️shotagishitomi</p>
            </div>
        </nav>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

    <script src="./assets/js/swiper.js"></script>
    <script src="./assets/js/portfolio.js"></script>
</body>

</html>