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

    <link rel="stylesheet" type="text/css" href="../common.css">
    <script src="../common.js"></script>

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

  </body>
</html>
