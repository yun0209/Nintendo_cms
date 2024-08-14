<?php 
include_once("./_common.php"); 
include_once(G5_LIB_PATH.'/latest.lib.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo</title>
</head>

    <!-- 폰트 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">

    <!-- 부트스트랩 & 스와이퍼 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    

    <link rel="stylesheet" href="<?php echo  G5_JS_URL; ?>/font-awesome/css/font-awesome.min.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_URL; ?>/skin/board/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_URL; ?>/skin/faq/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_URL; ?>/skin/search/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_THEME_CSS_URL; ?>/default.css">
       
    <!-- 커스터마이징 -->
    <link rel="stylesheet" href="/css/index.css">

  <body>

  
  <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <header id="hd" class="bg-white ms-auto me-auto">
        
        <div class=" trx d-flex justify-content-center align-items-center w-100  ms-auto me-auto">
            <h1>
                <a href="/">
                    <img src="/img/svg/logo_red.svg" alt="로고">
                </a>
            </h1>
            <div class="col">
                <ul class="gnb d-none  jsb d-lg-flex aic col-8 ms-auto">
                    <li class="gnb_li"><a href="" class="gnbT fontBase">본체 및 amlibo</a></li>
                    <li class="gnb_li"><a href="" class="gnbT fontBase">소프트웨어</a></li>
                    <li class="gnb_li"><a href="/nintendo_cms/bbs/faq.php?fm_id=1" class="gnbT fontBase">고객지원</a></li>
                    <li class="gnb_li"><a href="/nintendo_cms/bbs/board.php?bo_table=news" class="gnbT fontBase">닌텐도 뉴스</a></li>
                </ul>
                 
            </div>
            
            <div class="d-none d-lg-flex myicon me-5">
                <div class="d-flex ">
                    <fieldset class="hd_sch">
                        <legend>사이트 내 전체검색</legend>
                        <form name="fsearchbox" method="get" action="http://yysportfolio.dothome.co.kr/nintendo_cms/bbs/search.php" onsubmit="return fsearchbox_submit(this);">
                            <input type="hidden" name="sfl" value="wr_subject||wr_content">
                            <input type="hidden" name="sop" value="and">
                            <label for="sch_stx" class="sound_only">검색어 필수</label>
                            <input type="text" name="stx" class="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                            <button type="submit" class="sch_submit" value="검색">
                                <img src="/img/svg/search_icon.svg" alt="">
                                <span class="sound_only">검색</span>
                            </button>
                        </form>

                        <script>
                        function fsearchbox_submit(f)
                        {
                            var stx = f.stx.value.trim();
                            if (stx.length < 2) {
                                alert("검색어는 두글자 이상 입력하십시오.");
                                f.stx.select();
                                f.stx.focus();
                                return false;
                            }

                            // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                            var cnt = 0;
                            for (var i = 0; i < stx.length; i++) {
                                if (stx.charAt(i) == ' ')
                                    cnt++;
                            }

                            if (cnt > 1) {
                                alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                                f.stx.select();
                                f.stx.focus();
                                return false;
                            }
                            f.stx.value = stx;

                            return true;
                        }
                        </script>

                    </fieldset>
                    <button class="d-lg-none"><a href=""><img src="/img/svg/menu_bar.svg" alt="메뉴펼침"></a></button>
                    
                    </div> 
            </div>
            <div class="singup fontNoto ">
                <ul class="d-flex text-wrap">
                    <li class = "me-3"><a href="/nintendo_cms/bbs/login.php">로그인</a></li>
                    <li><a href="">회원가입</a></li>
                </ul>

            </div>
        </div>
    </header>

    <?php  if( !defined('_INDEX_'))  {   ?>
        <div class='subpage container pt-5  '>
             <div class='pt-5'>
    <?php } ?>

