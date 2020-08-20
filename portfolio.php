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
</head>

<body>
    <?php include('./components/header.php'); ?>
    <div class="portfolio-img-wrapper">
        <div class="portfolio-img">
            <h1>~Portfolio~</h1>
        </div>
    </div>
    <div class="container-fluid container" id="app">
        <nav class="navbar navbar-light">
            <a class="navbar-brand">2020年に制作したポートフォリオ</a>
            <form class="form-inline">
                <div class="nav-box">
                    <i class="fas fa-search nav-icon"></i>
                    <input class="form-control mr-sm-2 nav-input" type="search" placeholder="言語名から検索" aria-label="Search">
                </div>
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">検索</button>
            </form>
        </nav>
        <div class="portfolios">
            <div class="portfolio">
                <div data-toggle="modal" class="portfolio-img" data-target="#exampleModalCenter1">
                    <img v-bind:src="lists[0].thumbnailSrc" class="bd-placeholder-img card-img-top float" width="100%" height="180">
                </div>
                <p class="portfolio-title">{{lists[0].title}}</p>
            </div>
            <div class="portfolio">
                <div data-toggle="modal" class="portfolio-img" data-target="#exampleModalCenter2">
                    <img v-bind:src="lists[1].thumbnailSrc" class="bd-placeholder-img card-img-top float" width="100%" height="180">
                </div>
                <p class="portfolio-title">{{lists[1].title}}</p>
            </div>
            <div class="portfolio">
                <div data-toggle="modal" class="portfolio-img" data-target="#exampleModalCenter3">
                    <img v-bind:src="lists[2].thumbnailSrc" class="bd-placeholder-img card-img-top float" width="100%" height="180">
                </div>
                <p class="portfolio-title">{{lists[2].title}}</p>
            </div>
            <!-- Modal1  ITと経済のまとめサイト -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">{{lists[0].title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-5">
                                    <p>{{lists[0].text}}</p>
                                    <p>使用言語など</p>
                                    <p>{{lists[0].useLanguage}}</p>
                                </div>
                                <div class="col-7">
                                    <a v-bind:href="lists[0].url">
                                        <img v-bind:src="lists[0].thumbnailSrc" style="width: 100%;" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal2  沖縄の架空観光サイト -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">{{lists[1].title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-5">
                                    <p>{{lists[1].text}}</p>
                                    <p>使用言語など</p>
                                    <p>{{lists[1].useLanguage}}</p>
                                </div>
                                <div class="col-7">
                                    <a v-bind:href="lists[1].url">
                                        <img v-bind:src="lists[1].thumbnailSrc" style="width: 100%;" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal3  Vue.jsによるSPA -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">{{lists[2].title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-5">
                                    <p>{{lists[2].text}}</p>
                                    <p>使用言語など</p>
                                    <p>{{lists[2].useLanguage}}</p>
                                </div>
                                <div class="col-7">
                                    <a v-bind:href="lists[2].url">
                                        <img v-bind:src="lists[2].thumbnailSrc" style="width: 100%;" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./assets/js/swiper.js"></script>
    <script src="./assets/js/portfolio.js"></script>
    <script src="./assets/js/vue-portfolio.js"></script>
</body>

</html>