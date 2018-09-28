<?php
    $host = 'musetest2.ced7zw1vrrkq.ap-northeast-2.rds.amazonaws.com';
    $user = 'arjoe';
    $pw = 'joe2020';
    $dbName = 'arjoe';
    $conn = mysqli_connect($host, $user, $pw, $dbName);
?>

<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP TEST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>

    <style>
      html, body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td, img {
        margin: 0;
        padding: 0;
      }
      body {
        font: 0.75em Dotum,Verdana,AppleGothic,sans-serif;
        text-transform: uppercase;
        color: #353535;
     }

      .header_wrap {
        position: relative;
        width: 1100px;
        min-width: 1100px;
        margin: 0 auto;
      }
      .header_top ul {
        list-style: none;
        padding-top: 14px;
        padding-bottom: 8px;
        margin: 0;
        display: inline-block;
      }
      .header_top ul li {
        float: left;
        margin-left: 6px;
      }
      .header_bottom {
        position: relative;
        margin-bottom: 33px;
      }
      .header_bottom .logo {
        text-align: center;
      }
      .header_bottom .gnb_left {
        position: absolute;
        top: 32%;
        left: 0;
      }
      .header_bottom .gnb_left li,.header_bottom .gnb_right li {
        cursor: pointer;
      }

      .header_bottom .gnb_left .bookmark {
        background-image: url(/images/bookmark.gif);
        width: 80px;
        height: 28px;
      }
      .header_bottom .gnb_left .bookmark:hover {
        background-image: url(/images/bookmark_over.gif);
      }
      .header_bottom .gnb_left .search {
        background-image: url(/images/search.gif);
        width: 56px;
        height: 28px;
        margin-left: 14px;
      }
      .header_bottom .gnb_left .search:hover {
        background-image: url(/images/search_over.gif);
      }
      .header_bottom .gnb_right {
        position: absolute;
        top: 32%;
        right: 0;
      }
      .header_bottom .gnb_right .mypage {
        background-image: url(/images/mypage.gif);
        width: 62px;
        height: 28px;
      }
      .header_bottom .gnb_right .mypage:hover {
        background-image: url(/images/mypage_over.gif);
      }
      .header_bottom .gnb ul li {
        list-style: none;  
        float: left;
      }
      .header_bottom .gnb ul li a {
        display: inline-block;
        width: 100%;
        height: 100%;
      }
      .header_bottom .gnb .login {
        background: url(/images/login.gif)no-repeat 0 0;
        width: 100px;
        height: 28px;
      }

      #nav {
        overflow: hidden;
        padding: 20px 0;
        background: #fde9e8;
      }
      .nav_inner {
        position: relative;
        font-size: 0;
        width: 1100px;
        min-width: 1100px;
        margin: 0 auto;
      }
      .nav_inner .nav_banner {
        width: 31.3%;
        display: inline-block;
        vertical-align: middle;
      }
      .nav_inner .nav_banner ul li {
        list-style: none;
        float: left;
      }
      .nav_inner .nav_banner ul li:last-child {
        margin-left: 20px;
      } 
      .nav_inner .nav_cat {
        width: 68.7%;
        display: inline-block;
        vertical-align: middle;
      }
      .nav_inner .nav_cat dl {
        float: left;
        width: 25%;
      }
      .nav_inner .nav_cat dl dt {
        margin-bottom: 9px;
        font-size: 0;
        line-height: 0;
      }
      .nav_inner .nav_cat dl dd {
        font-family: 'Roboto';
        color: #727272;
        font-size: 13px;
        line-height: 12px;
        vertical-align: middle;
        letter-spacing: -0.025rem;
        padding-top: 8px;
      }
      .nav_inner .nav_cat dl dd a {
        color: #727272;
        text-decoration: none;
      }
      .nav_inner .nav_cat dl dd:hover {
        text-decoration: underline;
        cursor: pointer;
      }

      #fixed_menu {
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1000;
        width: 100%;
        background: #fde9e8;
      }
      #fixed_menu .menu_inner {
        position: relative;
        min-width: 1100px;
        margin: 0 auto;
        width: 1240px;
      }
      .menu_inner ul {
        position: relative;
        overflow: hidden;
        padding: 0;
      }
      .menu_inner ul li {
        float: left;
        margin-left: 23px;
        list-style: none;
      }
      .menu_inner ul li:first-child {
        margin-left: 0;
      }
      .menu_inner ul li a {
        display: block;
        padding: 18px 0;
      }

      #wrap {
        position: relative;
        width: 100%;
      }
      #container {
        overflow: hidden;
        width: 100%;
        margin: 0 auto;
      }
      #contents {
        width: 100%;
        padding-top: 20px;
      }
      #contents .contents_inner {
        position: relative;
        width: 1100px;
        min-width: 1100px;
        margin: 0 auto;
      }
      #contents .title_main.focuson {
        padding: 65px 0 40px;
        text-align: center;
      }
      .wrap_inner {
        width: 1100px;
        min-width: 1100px;
        margin: 0 auto;
        display: flex;
      }
      #contents .focuson .left_banner {
        float: left;
      }
      #contents .focuson .right_banner {
        float: right;
      }
      #contents .left_banner ul li {
        float: left;
        list-style: none;
      }
      #contents .left_banner ul li:nth-child(even) {
        margin-bottom: 18px;
      }
      #contents .left_banner ul li:nth-child(odd) {
        margin-right: 16px;
      }

      #contents .title_main {
        padding: 65px 0 20px;
        text-align: center;
      }
      .wrap_inner .item {
        list-style: none;
        float: left;
      }
      .wrap_inner.week .item {
        width: 116px;
        margin-right: 24px;
      }
      .wrap_inner.newitem .item {
        width: 250px;
        margin-right: 33px;
        padding-bottom: 79px;
        max-height: 500px;
        min-height: 500px;
      }
      .wrap_inner.week .item:last-child {
        margin-right: 0;
      }
      .wrap_inner.newitem .item:nth-child(4n) {
        margin-right: 0;
      }
      .wrap_inner.week .item .item_box {
        max-width: 116px;
      }
      .wrap_inner.newitem .item .item_box {
        max-width: 250px;
      }
      .wrap_inner .item .item_img {
        position: relative
      }
      .wrap_inner.week .item .item_img img {
        max-width: 116px;
        width: 100%;
        height: 172px;
        vertical-align: middle;
      }
      .wrap_inner.newitem .item .item_img img {
        max-width: 250px;
        width: 100%;
        height: 370px;
        vertical-align: middle;
      }
      .wrap_inner .item .item_name {
        padding: 18px 0 3px;
        text-align: left;
      }
      .wrap_inner .item .item_name a {
        font-size: 13px;
        color: #5f5f5f;
        font-weight: bold;
        text-decoration: none;
      }
      .wrap_inner .item .item_name a:hover {
        text-decoration: underline;
      }
      .wrap_inner .item .item_price {
        font-size: 11px;
        color: #aeabff;
        font-weight: bold;
      }
      .wrap_inner .item .item_price.line {
        text-decoration: line-through;
      }
      .wrap_inner .item .item_sales_price {
        font-size: 11px;
        color: #fd483b;
        font-weight: bold;
        margin-top: 8px;
      }
      .wrap_inner .item .item_review {
        color: #5e5e5e;
        margin: 8px 0 0;
        font-size: 11px;
        text-align: left;
      }
      .wrap_inner .item .vely_made {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url(/images/velymade_icon.png) no-repeat;
        background-size: 28% auto;
      }
      .wrap_inner .item .only_vely {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url(/images/onlyvely_icon.png) no-repeat;
        background-size: 28% auto;
      }
      .wrap_inner .item .item_sub {
        font-size: 11px;
        color: #767b85;
        padding: 10px 0;
      }

      

      .swiper-container {
        overflow: hidden;
        position: relative;
        width: 100%;
        text-align: center;
      }
      .swiper-wrapper {
        width: 100%;
        height: 640px;
      }
      .swiper-slide {
        text-align: center;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
      .swiper-pagination {
        position: relative;
        display: inline-block;
        zoom: 1;
        margin-top: 22px;
        text-align: center!important;
        bottom: initial!important;
        left: initial!important;
        width: initial!important;
      }
      .swiper-pagination .swiper-pagination-bullet {
        float: left;
        width: 15px;
        height: 15px;
        margin-left: 7px;
        border-radius: 100%;
        background: #ddd7d7;
        opacity: 1;
      }
      .swiper-pagination .swiper-pagination-bullet-active {
        background: #fde9e8;
      }

      #quick {
        position: absolute;
        top: 0;
        right: 50%;
        z-index: 25;
        width: 70px;
        margin-right: -647px;
        padding: 10px;
        text-align: center;
      }
      .quick_menu h2 {
        padding: 11px 0 4px;
      }
      .quick_menu .player img {
        cursor: pointer;
      }
      .quick_menu ul li {
        list-style: none;
        padding: 5px 0;
      }
      .quick_menu .kakao {
        padding: 10px 0 4px 0;
      }
      
      .multi_popup {
        position: absolute;
        z-index: 9000;
        display: inline;
      }
      .mpopup {
        width: 342px;
        z-index: 9000;
        position: absolute;
        top: 0px;
        left: 23px;
      }
      .mpopup ul{
        padding: 0;
        margin: 0;
        display: block;
      }
      .mpopup ul li {
        list-style: none;
      }
      .mpopup .showarea {
        border: 1px solid #eee;
        background: #FFF;
        padding: 10px 10px 0 10px;
        display: inline-block;
      }
      .mpopup .bannerbig {
        height: 320px;
        margin: 0px 0px 10px 0px;
        overflow: hidden;
        position: relative;
      }
      .mpopup .bannersmall li {
        width: 100px;
        height: 100px;
        float: left;
        text-align: center;
        margin: 0 10px 10px 0;
        overflow: hidden;
      }
      .mpopup .frameborder {
        height: 0px;
        clear: both;
        overflow: hidden;
        margin: 0px 0px 0px 0px;
      }
      .mpopup .todayopen {
        height: 19px;
        clear: both;
        padding: 5px 10px 5px 10px;
        text-align: right;
        font-size: 11px;
        font-family: 돋움;
        vertical-align: top;
        border: 1px solid #eee;
        border-top: 0px;
        display: block;
        background: #fafafa;
      }
      .mpopup .closetxt {
        cursor: pointer;
        background: url(/images/nottoday.gif) 15px 1px no-repeat;
        width: 105px;
        height: 13px;
        display: inline-block;
        margin: 3px 0px 3px 0px;
      }
      .mpopup .todayopen .mpopupnottoday{
        float: left;
        margin: 0px;
        padding: 0px;
        height: 13px;
        width: 13px;
        display: inline-block;
      }
      .mpopup .closetxt span, .mpopup .closex span { display: none; }
      .mpopup .closex {
        cursor: pointer;
        background: url(/images/closex.gif) 0px 1px no-repeat;
        width: 33px;
        height: 13px;
        display: inline-block;
        margin: 3px 0px 3px 10px;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <div class="header_wrap">
        <div class="header_top">
            <ul>
                <li><a href="/"><img src="/images/korea.jpg" alt="kr"></a></li>
                <li><a href="http://en.imvely.com/" target="_blank"><img src="/images/usa.jpg" alt="en"></a></li>
                <li><a href="http://imvely.com.cn/" target="_blank"><img src="/images/china.jpg" alt="cn"></a></li>
                <li><a href="http://imvely.com.jp/" target="_blank"><img src="/images/japan.jpg" alt="jp"></a></li>
            </ul>
        </div>
        <div class="header_bottom">
            <div class="logo">
                <a href="http://arjoe.devleaguer.com/"><img src="/images/logo.jpg" alt="임블리 로고"></a>
            </div>
            <div class="gnb">
                <div class="gnb_left">
                    <ul>
                        <li class="bookmark"><a href="http://www.imvely.com/link/bookmark.html" target="_blank"></a></li>
                        <li class="search"><a href="http://www.imvely.com/product/search.html" target="_blank"></a></li>
                    </ul>
                </div>
                <div class="gnb_right">
                    <ul>
                        <li><ul class="login">
                            <li style="display: none;"><a href="http://www.imvely.com/member/login.html" target="_blank"><img src="/images/login_over.gif" alt="login_over"></a></li>
                            <li style="display: none;"><a href="http://www.imvely.com/member/join.html" target="_blank"><img src="/images/join_over.gif" alt="join_over"></a></li>
                        </ul></li>
                        <li class="mypage" style="margin-left: 42px;"><a href="http://www.imvely.com/myshop/index.html" target="_blank"></a></li>
                        <li style="margin-left: 50px;"><a href="http://www.imvely.com/order/basket.html" target="_blank"><img src="/images/cart.gif" alt="장바구니"></a></li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div id="nav">
      <!-- 마우스 오버 -->
      <div class="nav_inner">
        <div class="nav_cat">
            <dl>
                <dt><img src="/images/title_cate_01.gif" alt="special"></dt>
                <dd><a href="">best</a></dd>
                <dd><a href="">new 5%</a></dd>
                <dd><a href="">알펜글로우</a></dd>
                <dd><a href="">임블리 메이드</a></dd>
                <dd><a href="">마진바지</a></dd>
                <dd><a href="">땡큐블리머치</a></dd>
                <dd><a href=""></a></dd>
                <dd><a href="">핑크팬더</a></dd>
                <dd><a href="">velysome</a></dd>
                <dd><a href="">브이콜렉트</a></dd>
                <dd><a href="">특템찬스</a></dd>
                <dd><a href="">입고지연</a></dd>
            </dl>
            <dl>
                <dt><img src="/images/title_cate_02.gif" alt="apparels"></dt>
                <dd><a href="">아우터</a></dd>
                <dd><a href="">원피스</a></dd>
                <dd><a href="">티</a></dd>
                <dd><a href="">니트 & 가디건</a></dd>
                <dd><a href="">블라우스</a></dd>
                <dd><a href="">팬츠</a></dd>
                <dd><a href="">스커트</a></dd>
                <dd><a href="">슈츠 & 백</a></dd>
                <dd><a href="">악세서리</a></dd>
                <dd><a href="">임블리</a></dd>
            </dl>
            <dl>
                <dt><img src="/images/title_cate_04.gif" alt="cosmetic"></dt>
                <dd><a href="">velyvely</a></dd>
                <dt style="margin-top: 37px;"><img src="/images/title_cate_03.gif" alt="life"></dt>
                <dd><a href="">vely pick</a></dd>
                <dd><a href="">vely home</a></dd>
            </dl>
            <dl>
                <dt><img src="/images/title_cate_05.gif" alt="community"></dt>
                <dd><a href="">고객행복센터</a></dd>
                <dd><a href="">공지사항</a></dd>
                <dd><a href="">이벤트</a></dd>
                <dd><a href="">오프라인 스토어</a></dd>
                <dd><a href="">실시간 포토리뷰</a></dd>
                <dd><a href="">vip전용게시판</a></dd>
                <dd><a href="">츨석체크</a></dd>
                <dd><a href="">임블리 app</a></dd>
                <dd><a href="">임블리 tv</a></dd>
            </dl>
        </div>
        <div class="nav_banner">
            <ul>
                <li><a href="http://www.imvely.com/front/php/b/board_list.php?board_no=25"><img src="/images/nav_banner_1.jpg" alt="배너 광고1"></a></li>
                <li><a href="http://www.imvely.com/product/list.html?cate_no=113"><img src="/images/nav_banner_2.gif" alt="배너 광고2"></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- 스크롤 다운시 나타나는 고정된 메뉴 -->
    <div id="fixed_menu" style="display: none;">
      <div class="menu_inner">
        <ul>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=71"><img src="/images/fixed_cate_01.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=72"><img src="/images/fixed_cate_02.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/beauty_main.html"><img src="/images/fixed_cate_03.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=450"><img src="/images/fixed_cate_04.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=41"><img src="/images/fixed_cate_05.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=46"><img src="/images/fixed_cate_07.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=126"><img src="/images/fixed_cate_08.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=57"><img src="/images/fixed_cate_09.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=97"><img src="/images/fixed_cate_10.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=59"><img src="/images/fixed_cate_11.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=62"><img src="/images/fixed_cate_12.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=113"><img src="/images/fixed_cate_15.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=52"><img src="/images/fixed_cate_16.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=228"><img src="/images/fixed_cate_17.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=556"><img src="/images/fixed_cate_18.gif" alt=""></a></li>
          <li><a href="http://www.imvely.com/product/list.html?cate_no=569"><img src="/images/fixed_cate_19.gif" alt=""></a></li>
        </ul>
      </div>
    </div>

    <div id="wrap">
      <div id="container">
        <div id="contents">
            <!-- 팝업 -->
            <div class="multi_popup">
                <div class="mpopup" style="display: none;">
                    <div class="drone"></div>
                    <div class="showarea">
                        <ul class="bannerbig">
                            <li><a href="http://imvely.com/front/php/b/board_list.php?board_no=18&is_pcver=T" target="_blank"><img src="/images/bannerbig_1.jpg" alt="큰배너1"></a></li>
                            <!-- <li><a href="http://www.imvely.com/job.html" target="_blank"><img src="/images/bannerbig_2.jpg" alt="큰배너2"></a></li> -->
                        </ul>
                        <ul class="bannersmall">
                            <li><a href="http://imvely.com/front/php/b/board_list.php?board_no=18&is_pcver=T" target="_blank"><img src="/images/bannersmall_1.jpg" alt="작은배너1"></a></li>
                            <!-- <li><a href="http://www.imvely.com/job.html" target="_blank"><img src="/images/bannersmall_2.jpg" alt="작은배너2"></a></li> -->
                        </ul>
                    </div>
                    <p class="frameborder">.</p>
                    <div class="todayopen">
                        <label for="mpopupnottoday2" class="closetxt">
                            <input type="checkbox" class="mpopupnottoday" name="mpopupnottoday2" id="mpopupnottoday2" value="checked"><span>오늘하루 열지않기</span>
                        </label>
                        <div class="closex"><span>X</span></div>
                    </div>
                </div>
            </div>
            
            <div class="contents_inner">
                <!-- 슬라이드 -->
                <div class="swiper-container">
                    <ul class="swiper-wrapper" style="position: relative;">
                        <?php 
                          $sql = "SELECT a.num, a.image, p.url FROM arjoe.adver a, arjoe.product p where a.product_num = p.num and a.useYN = 1;";
                          $result = mysqli_query($conn, $sql);

                          while($row = mysqli_fetch_assoc($result)) {
                            echo "<li class='swiper-slide slide-'".$row["num"]."><a href='".$row["url"]."' target='_blank'><img src='".$row["image"]."'></a></li>";
                          }
                        ?>
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <h2 class="title_main focuson"><img src="/images/title_focuson.png" alt="focus on"></h2>
            <div class="wrap_inner focuson">
                <div class="left_banner">
                    <ul>
                        <li><a href="http://www.imvely.com/board/gallery/list.html?board_no=29&category_no=3" target="_blank"><img src="/images/ban_press_pc.jpg"></a></li>
                        <li><a href="http://www.imvely.com/product/detail.html?product_no=15646" target="_blank"><img src="/images/180927_focusvest_pc.jpg"></a></li>
                        <li><a href="http://www.imvely.com/product/list.html?cate_no=569" target="_blank"><img src="/images/180912_thx_pc.jpg"></a></li>
                        <li><a href="http://www.imvely.com/product/detail.html?product_no=15624" target="_blank"><img src="/images/180921_focuson_pc.jpg"></a></li>
                    </ul>
                </div>
                <div class="right_banner">
                    <img src="/images/BF_filter.gif">
                    <div class="btn_moretv"><a href="http://www.imvely.com/onair_imvely.html" target="_blank"><img src="/images/btn_more_tv.jpg"></a></div>
                </div>
            </div>

            <h2 class="title_main week"><img src="/images/title_week.jpg" alt="week"></h2>
            <div class="wrap_inner week">
              <ul>
                <?php 
                  $sql = "SELECT * FROM arjoe.product where createdAt > (curdate()-6) order by sales_volume desc limit 8;";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<li class='item item-".$row["num"]."'>
                            <div class='item_box'>
                              <div class='item_img'><a href='".$row["url"]."' target='_blank'><img src='".$row["image"]."'>";
                    if($row["vely_made"]) {
                      echo "<span class='vely_made'></span>";
                    } else if($row["only_vely"]) {
                      echo "<span class='only_vely'></span>";
                    }
                    echo "</a></div>
                    <div class='item_name'><a href='".$row["url"]."' target='_blank'>".$row["title"]."</a></div>";
                    if($row["sales_price"] && $row["sales_price"]!=0) {
                      echo "<div class='item_price line'>".number_format($row["price"])."원</div>
                            <div class='item_sales_price'>".number_format($row["sales_price"])."원</div>";
                    } else {
                      echo "<div class='item_price'>".number_format($row["price"])."원</div>";
                    }
                      echo "<div class='item_review'>리뷰 : ".$row["review_count"]."</div>
                            </div>
                          </li>";
                  }
                ?>
              </ul>
            </div>

            <h2 class="title_main newitem"><img src="/images/title_newitems.png" alt="new item"></h2>
            <div class="wrap_inner newitem">
                <ul>
                  <?php
                    $sql = "SELECT * FROM arjoe.product order by createdAt desc limit 12;";
                    $result = mysqli_query($conn, $sql);
                      while($row = mysqli_fetch_assoc($result)) {
                        echo "<li class='item item-".$row["num"]."'>
                                <div class='item_box'>
                                  <div class='item_img'><a href='".$row["url"]."' target='_blank'><img src='".$row["image"]."'>";
                        if($row["vely_made"]) {
                          echo "<span class='vely_made'></span>";
                        } else if($row["only_vely"]) {
                          echo "<span class='only_vely'></span>";
                        }
                        echo "</a></div>
                              <div class='item_name'><a href='".$row["url"]."' target='_blank'>".$row["title"]."</a></div>
                              <div class='item_sub'>".$row["sub"]."</div>";
                        if($row["sales_price"] && $row["sales_price"]!=0) {
                          echo "<div class='item_price line'>".number_format($row["price"])."원</div>
                                <div class='item_sales_price'>".number_format($row["sales_price"])."원</div>";
                        } else {
                          echo "<div class='item_price'>".number_format($row["price"])."원</div>";
                        }
                          echo "<div class='item_review'>리뷰 : ".$row["review_count"]."</div>
                                  </div>
                                </li>";
                    }
                  ?>
                </ul>
            </div>
        </div>

      </div>

      <!-- 카톡 상담하기 부분 스크롤이랑 같이 내려감, quck_menu 슬라이드. 카카오톡 버튼 -->
      <div id="quick">
        <div class="quick_menu">
            <div class="productrecent">
                <h2><img src="/images/today_view.gif" alt="today_view"></h2>
                <p class="player"><img src="/images/quick_prev.gif" class="prev" alt="이전 제품"></p>
                <ul>
                    <li><a href="http://www.imvely.com/product/detail.html?product_no=15646&cate_no=1&display_group=2" target="_blank"><img src="/images/today_view_1.gif"></a></li>
                    <li><a href="http://www.imvely.com/product/detail.html?product_no=15673&cate_no=1&display_group=2" target="_blank"><img src="/images/today_view_2.gif"></a></li>
                    <li><a href="http://www.imvely.com/product/detail.html?product_no=15563&cate_no=1&display_group=3" target="_blank"><img src="/images/today_view_3.gif"></a></li>
                    <li><a href="http://www.imvely.com/product/detail.html?product_no=15634&cate_no=1&display_group=2" target="_blank"><img src="/images/today_view_4.gif"></a></li>
                    <li><a href="http://www.imvely.com/product/detail.html?product_no=15579&cate_no=1&display_group=33" target="_blank"><img src="/images/today_view_5.gif"></a></li>
                    <li><a href="http://www.imvely.com/product/detail.html?product_no=15572&cate_no=304&display_group=1" target="_blank"><img src="/images/today_view_6.gif"></a></li>
                </ul>
                <p class="player"><img src="/images/quick_next.gif" class="next" alt="다음 제품"></p>
            </div>
            <div class="kakao">
                <img src="/images/btn_kakao.jpg" alt="카카오 상담하기">
            </div>
        </div>
      </div>
    </div>

    <div id="footer"></div>
    <!-- 스크롤과 함께 움직이는 버튼들 -->
    <div id="btn_scroll"></div>

    <!-- header login mouseover -->
    <script>
        $('.login').hover(function(){
            $(this).find('li').show();
        }, function(){
            $(this).find('li').hide();
        })
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        });
    </script>
    <!-- today view slider -->
    <script>
        var count, now
       jQuery(document).ready(function ($) {
        count = $('.productrecent ul li').length
        now 
        if (count > 4) now = 4
        else now = count

        $(".productrecent ul li").each(function(i) {
            $(this).addClass("item-" + (i+1));
            if(i+1>4) $(this).hide();
        });
       })

       $('.prev').click(function(){
        if((count <= 4 && now ==count) || (count > 4 && now == 4)) alert('최근 본 첫번째 상품입니다.')
        else {
            $('.item-'+now).hide();
            now --;
            $('.item-'+(now-3)).show();
        }
       })

       $('.next').click(function(){
           if(now == count) alert('최근 본 마지막 상품입니다.')
           else {
               $('.item-'+(now-3)).hide();
               now ++;
               $('.item-'+now).show();
           }
        })
    </script>
    <!-- popup 오늘하루 열지 않기 -->
    <script>
        jQuery(document).ready(function($) {
            pevent();
        });
 
        function pevent(){
            function getCookie(name){
                var nameOfCookie = name + "=";
                var x = 0;
                while (x <= document.cookie.length){
                    var y = (x + nameOfCookie.length);
                    if (document.cookie.substring(x, y) == nameOfCookie){
                    if ((endOfCookie = document.cookie.indexOf(";", y)) == -1){
                    endOfCookie = document.cookie.length;
                    }
                    return unescape (document.cookie.substring(y, endOfCookie));
                    }
                    x = document.cookie.indexOf (" ", x) + 1;
                    if (x == 0) break;
                }
                return "";
            }
            if (getCookie("popname") != "done"){
                $('.mpopup').show();
            }
        }

        $('.closex').click(function(){
            if($('.mpopupnottoday').prop("checked")) setCookie("popname", "done", 1)
            $('.mpopup').hide();
        })

        function setCookie(name, value, expiredays){
            var todayDate = new Date();
            todayDate.setDate (todayDate.getDate() + expiredays);
            document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";";
            console.log(document.cookie)
        }
    </script>
    <!-- fixed menu -->
    <script>
      $(window).scroll(function() {
        if($(this).scrollTop() >= 464) $('#fixed_menu').show();
        else $('#fixed_menu').hide();
      });
    </script>
  </body>
</html>
