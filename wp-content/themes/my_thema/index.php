<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <script src="https://use.fontawesome.com/a3de6310f4.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-fixed-top" id="header-nav" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">RECRUIT SITE</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <p id="header_btn" class="navbar-right__top"><a href="#">資料請求・お問い合わせ</a></p>
        <ul class="nav navbar-nav navbar-right navbar-right__bottom">
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 求める人物像</a></li>
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 教育体制（人材育成）</a></li>
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 福利厚生</a></li>
          <li><a href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 採用説明会･病院見学</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/top/carousel-01.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/top/carousel-02.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/top/carousel-03.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->

    <!-- news Section -->
    <section id="news-area">
      <div class="container">
        <div class="row">
          <div id="news-area__inner">
            <div class="col-md-3 col-sm-4 col-xs-12">
              <p>NEWS & INFORAMATION</p>
              <p id="news-area__btn"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> 一覧ページへ</a></p>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <ul>
                <li class="icon_staff">
                  <span>事務系スタッフ</span>
                  <a href="#">2016/09/29テキストテキストテキストテキスト</a>
                </li>
                <li class="icon_trainee">
                  <span>臨床研修医</span>
                  <a href="#">2016/08/29テキストテキストテキストテキスト</a>
                </li>
                <li class="icon_staff">
                  <span>事務系スタッフ</span>
                  <a href="#">2016/07/19テキストテキストテキストテキスト</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--./row-->
      </div>
      <!--./container-->
    </section>

        <!-- think Section -->
        <section id="think">
          <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1>
                       <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/top/ttl.gif" alt="">
                    </h1>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>済生会熊本病院は、「断らない救急」をモットーに、更なる救急医療体制の充実やより質の高い医療を提供すべく、採用活動に力を入れています。1人ひとりの職員が互いに切磋琢磨し、日々成長できる環境がここにはあります。熊本の医療を支えるために、現状に満足することなく挑戦を続け、常に医療業界の先端を歩む病院です。みなさんもチームの一員となり、熊本から世界一の病院を目指してみませんか。</p>
                </div>
            </div>
            <!-- /.row -->
          </div>
        </section>

        <!-- wanted Section -->
        <section id="wanted">
          <div class="container">
          <div class="row">
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>初期臨床研修医</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./1人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>後期臨床研修医</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./2人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>診療科医師</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./3人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>看護師</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./4人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>薬剤師</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./5人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>臨床検査技師</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./6人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>言語聴覚士</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./7人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>診療放射線技師</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./8人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>臨床工学技師</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./9人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>管理栄養士</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./10人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>理学療法士</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./11人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>作業療法士</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./12人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>医療<span class="pack">ソーシャルワーカー<span></h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./13人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>介護福祉士</h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./14人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>経営<span class="pack">マネジメントスタッフ</span></h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./15人目 -->
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <a href="#">
                      <h2><span class="badge">募集中</span>その他<span class="pack">スタッフ</span></h2>
                      <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/400x450" alt="">
                  </a>
              </div>
              <!-- ./16人目 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        </section>

        <hr>

        <!-- Footer -->
        <footer>
          <div class="container">
            <div id="footer_inner">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                      <dl>
                          <dt><a href="#">臨床研修医</a></dt>
                          <dd>
                            <ul>
                              <li> <a href="#">初期臨床研修医</a></li>
                            </ul>
                            <ul>
                              <li> <a href="#">後期臨床研修医</a></li>
                            </ul>
                          </dd>
                        </dl>
                        <!--./臨床研修医-->
                        <dl>
                          <dt><a href="#">診療科医師</a></dt>
                          <dd>
                            <ul>
                              <li> <a href="#">救急医・総合診療医</a></li>
                              <li> <a href="#">集中治療医</a></li>
                              <li> <a href="#">泌尿器科医</a></li>
                              <li> <a href="#">麻酔科医</a></li>
                            </ul>
                            <ul>
                              <li> <a href="#">病理診断医</a></li>
                              <li> <a href="#">精神内科医</a></li>
                              <li> <a href="#">総合健診医</a></li>
                              <li> <a href="#">消化器内科医</a></li>
                              <li> <a href="#">腫瘍内科医</a></li>
                            </ul>
                          </dd>
                        </dl>
                        <!--./診療科医師-->
                        <dl>
                          <dt><a href="#">看護師</a></dt>
                          <dd>
                            <ul>
                              <li> <a href="#">初期臨床研修医</a></li>
                            </ul>
                            <ul>
                              <li> <a href="#">後期臨床研修医</a></li>
                            </ul>
                          </dd>
                        </dl>
                        <!--./看護師-->
                    </div>
                    <!--./col-->
                    <div class="col-sm-4 col-md-4">
                      <dl>
                          <dt><a href="#">メディカルスタッフ</a></dt>
                          <dd>
                            <ul>
                              <li> <a href="#">薬剤師</a></li>
                              <li> <a href="#">臨床検査技師</a></li>
                              <li> <a href="#">言語聴覚士</a></li>
                              <li> <a href="#">診療放射線技師</a></li>
                              <li> <a href="#">臨床工学技師</a></li>
                            </ul>
                            <ul>
                              <li> <a href="#">管理栄養士</a></li>
                              <li> <a href="#">理学療法士</a></li>
                              <li> <a href="#">作業療法士</a></li>
                              <li> <a href="#">医療ソーシャルワーカー</a></li>
                              <li> <a href="#">介護福祉士</a></li>
                            </ul>
                          </dd>
                        </dl>
                        <!--./メディカルスタッフ-->
                        <dl>
                          <dt><a href="#">事務系スタッフ</a></dt>
                          <dd>
                            <ul>
                              <li> <a href="#">経営マネジメントスタッフ</a></li>
                              <li> <a href="#">医療秘書</a></li>
                            </ul>
                            <ul>
                              <li> <a href="#">その他スタッフ</a></li>
                            </ul>
                          </dd>
                        </dl>
                        <!--./事務系スタッフ-->
                    </div>
                    <!--./col-->
                    <div class="col-sm-4 col-md-4">
                      <p>採用に関するお問い合わせ先</p>
                      <h3>[人事室直通] <span>03-0000-0000</span></h3>
                      <p id="footer_btn"><a href="#">資料請求・お問い合わせ</a></p>
                      <p>社会福祉法人 恩賜財団 済生会熊本病院</p>
                      <address>〒861-4193 熊本市南区近見5丁目3番1号</address>
                    </div>
                    <!--./col-->
                </div>
                <!--./row-->
              </div>
              <!--./#footer_inner-->
            </div>
            <!--./container-->
            <div id="footer_nav">
              <div class="container-fluid">
              <div class="row">
                <ul id="footer_nav__inner">
                  <li><a href="#">トップページ</a></li>
                  <li><a href="#">求める人物像</a></li>
                  <li><a href="#">教育体制(人材育成)プログラム</a></li>
                  <li><a href="#">福利厚生</a></li>
                  <li><a href="#">採用説明会・病院見学について</a></li>
                </ul>
              </div>
              <!--./row-->
            </div>
            <!--./#footer_nav-->
            </div>
            <p id="copy">©2016 HOSPITAL ALL RIGHT RESERVED.</p>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<?php wp_footer(); ?>
</body>

</html>
