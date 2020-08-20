<header class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">ShotaGishitomi</a>
                <button class="navbar-toggler nav-position" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" id="link-list">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === '/portfolio_site_2020/index.php') {print('active');} ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === '/portfolio_site_2020/portfolio.php') {print('active');} ?>" href="portfolio.php">ポートフォリオ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === '/portfolio_site_2020/labnote.php') {print('active');} ?>" href="labnote.php">研究ノート</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === '/portfolio_site_2020/contact.php') {print('active');} ?>" href="contact.php">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>