<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

 $this->beginPage() ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <html lang="<?= Yii::$app->language ?>">
 <meta charset="<?= Yii::$app->charset ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?= Html::csrfMetaTags() ?>
 <title><?= Html::encode($this->title) ?></title>
 <?php $this->head() ?>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="asset/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="asset/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="asset/plugins/prism/prism.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="asset/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll">
  <?php $this->beginBody() ?>

    <!---//Facebook button code-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- ******HEADER****** -->
    <header id="header" class="header">
        <div class="container">
            <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                    <span class="logo-title">devAid</span>
                </a>
            </h1><!--//logo-->
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                        <li class="nav-item"><?=Html::a('About',['/site/about'],['class'=>'btn backBtn'])?></li>
                        <li class="nav-item"><?=Html::a('Features',['/admin'],['class'=>'btn backBtn'])?></li>
                        <li class="nav-item"><a class="scrollto" href="#docs">Docs</a></li>
                        <li class="nav-item"><a class="scrollto" href="#license">License</a></li> -->
                        <li class="nav-item "><?= Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => [
                              ['label' => 'Home', 'url' => ['/site/index']],
                              ['label' => 'About', 'url' => ['/site/about']],
                              ['label' => 'Contact', 'url' => ['/site/contact']],
                              ['label' => 'Лабораторные','items'=>[
                                       ['label'=>'Информация', 'url' => ['/site/about']],
                                       ['label'=>'Лабораторная №1', 'url' => ['/lab/lab1']],
                                       ['label'=>'Лабораторная №2', 'items'=>[
                                            ['label'=>'Книги', 'url' => ['/library/books']],
                                            ['label'=>'Авторы', 'url' => ['/library/authors']],
                                            ['label'=>'Жанры', 'url' => ['/library/genre']],
                                            ['label'=>'Книги 20-го века', 'url' => ['/library/twenty']],
                                            ['label'=>'Сколько книг у автора?', 'url' => ['/library/count']],
                                            ['label'=>'Поиск книги', 'url' => ['/library/searchbook']],
                                            ['label'=>'Добавить автора', 'url' => ['/library/addauthor']],
                                            ['label'=>'Удалить автора', 'url' => ['/library/deleteauthor']],

                                       ],],
                                       ['label'=>'Админка', 'items' => [
                                         ['label'=>'Стартовая', 'url' => ['/admin']],
                                         ['label'=>'Авторы', 'url' => ['/admin/authors']],
                                         ['label'=>'Жанры', 'url' => ['/admin/genre']],
                                         ['label'=>'Книги', 'url' => ['/admin/books']],
                                         ['label'=>'Пользователи', 'url' => ['/admin/user']],

                                       ]],
                                    ],],
                                Yii::$app->user->isGuest ? (
                              ['label' => 'Login', 'url' => ['/site/login']]
                            ):(
                              '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                            )  ],
                          ]);?></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div>
    </header><!--//header-->

    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">dev<span class="highlight">Aid</span></h2>
            <p class="intro">A free mobile-friendly Bootstrap theme designed to help developers
promote their personal projects</p>
            <div class="btns">
            </div>

            <ul class="meta list-inline">
            </ul><!--//meta-->
        </div><!--//container-->
        </section>
        <?=$content?>

        <div class="social-media">
            <div class="social-media-inner container text-center">
                <ul class="list-inline">
                    <li class="twitter-follow"><a href="https://twitter.com/3rdwave_themes" class="twitter-follow-button" data-show-count="false">Follow @3rdwave_themes</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </li><!--//twitter-follow-->
                    <li class="twitter-tweet">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="3rdwave_themes" data-hashtags="bootstrap">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </li><!--//twitter-tweet-->
                    <li class="facebook-like">
                         <div class="fb-like" data-href="http://themes.3rdwavemedia.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    </li><!--//facebook-like-->
                    <!--// Generate github buttons: https://github.com/mdo/github-buttons -->
                    <li class="github-star"><iframe src="http://ghbtns.com/github-btn.html?user=mdo&repo=github-buttons&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe></li>
                    <li class="github-fork"><iframe src="http://ghbtns.com/github-btn.html?user=mdo&repo=github-buttons&type=fork" allowtransparency="true" frameborder="0" scrolling="0" width="53" height="20"></iframe></li>
                    <!--//
                    <li class="github-follow"><iframe src="http://ghbtns.com/github-btn.html?user=mdo&type=follow&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="165" height="20"></iframe></li>
                    -->
                </ul>
            </div>
        </div>
    <!--//promo-->


    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="asset/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="asset/plugins/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="asset/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="asset/plugins/prism/prism.js"></script>
    <script type="text/javascript" src="asset/js/main.js"></script>
    <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
