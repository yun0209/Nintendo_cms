<?php 
include_once("./_common.php"); 
include_once(G5_LIB_PATH.'/latest.lib.php'); //최근게시된글을 가져오는 함수

?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo</title>
</head>

 <!-- 폰트 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">


<!-- 부트스트랩 스와이퍼 CDN  aos  jquery-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    

    <link rel="stylesheet" href="<?php echo  G5_JS_URL; ?>/font-awesome/css/font-awesome.min.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_URL; ?>/skin/board/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_URL; ?>/skin/faq/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_URL; ?>/skin/search/basic/style.css?ver=2303229">
    <link rel="stylesheet" href="<?php echo  G5_THEME_CSS_URL; ?>/default.css">
       

    <!-- favicon -->
    <link rel="icon" href="/img/svg/favicon2.svg">

    <!-- 커스터마이징 -->
    <link rel="stylesheet" href="/css/index.css?yys=<?php echo time(); ?>">

<body class='<?php echo !defined('_INDEX_') ? "img_cg " : "mainpage"; ?>'>

    <?php
    if (defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
        
        // JavaScript 코드 삽입
        ?>
        <script>
            $(function(){
                $(window).on('scroll', function() {  // 스크롤 이벤트 감지
                    if ($(window).scrollTop() > 50) {  // 스크롤이 50px 이상 내려가면
                        $('body').addClass('img_cg');  // body에 img_cg 클래스 추가
                    } else {
                        $('body').removeClass('img_cg');  // body에서 img_cg 클래스 제거
                    }
                });
            });
        </script>
        <?php
    }
    ?>

    <header id="hd" class="ms-auto me-auto">

   
        
        <div class=" trx d-flex justify-content-between align-items-center w-100 ">
            <h1>
                <a href="http://yysportfolio.dothome.co.kr/">
                    <img src="/img/svg/logo_red.svg" alt="로고" class="logo_r_img">
                    <img src="/img/svg/logo_w.svg" alt="로고" class="logo_w_img ">
                </a>
            </h1>
            <div class="m_gnb col d-lg-block">
                
                <div class="gnb d-none d-lg-flex align-items-center">
                    <div class="sing_up fontNoto  d-flex  mb-5 mb-lg-0 text-nowrap justify-content-end order-1 order-lg-3 ">
                        <!-- <p class="me-2"><a href="/nintendo_cms/bbs/login.php">로그인</a></p>
                        <p><a href="/nintendo_cms/bbs/register.php">회원가입</a></p> -->
                    <?php if ($is_member) {  ?>
                    <li class="me-2"><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">마이페이지</a></li>
                    <li class=" me-2"><a href="<?php echo G5_BBS_URL ?>/logout.php?url=<?php echo '/' ?>">로그아웃</a></li>
                    <?php if ($is_admin) {  ?>
                    <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                    <?php }  ?>
                    <?php } else {  ?>
                        
                    <li calss="me-3"><a href="<?php echo G5_BBS_URL ?>/login.php?url=<?php echo '/' ?>">로그인</a></li>
                    <li class=""><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                    <?php }  ?>
                        
                    </div>
                    
                    
                    <ul class="gnbT gnb_list fontBase justify-content-between d-lg-flex align-items-center col-8 mx-lg-auto me-auto text-wrap ">
                        <li class="gnb_li  mb-5  mb-lg-0"><a href="/nintendo_cms/bbs/board.php?bo_table=gallery">본체 및 amlibo</a></li>
                        <li class="gnb_li  mb-5  mb-lg-0"><a href="/nintendo_cms/bbs/board.php?bo_table=software">소프트웨어</a></li>
                        <li class="gnb_li  mb-5  mb-lg-0"><a href="/nintendo_cms/bbs/faq.php?fm_id=1">고객지원</a></li>
                        <li class="gnb_li  mb-5  mb-lg-0"><a href="/nintendo_cms/bbs/board.php?bo_table=news">닌텐도 뉴스</a></li>
                    </ul>
                    
                    <div class="d-flex myicon">
                        <div class="d-flex align-items-center w-100">
                            <fieldset class="hd_sch me-2 me-lg-3">
                                    <legend>사이트 내 전체검색</legend>
                                    <form name="fsearchbox" method="get" action="http://yysportfolio.dothome.co.kr/nintendo_cms/bbs/search.php" onsubmit="return fsearchbox_submit(this);">
                                        <input type="hidden" name="sfl" value="wr_subject||wr_content">
                                        <input type="hidden" name="sop" value="and">
                                        <label for="sch_stx" class="sound_only">검색어 필수</label>
                                        <input type="text" name="stx" class="sch_stx" maxlength="20" placeholder="검색어 입력">
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
                            
                        </div>
                        
                    </div>
                    
                    
                </div>
                
            </div>
            <button class="d-lg-none " id="allBtn"><i class="bi bi-list"></i></button>
                <script>
                    $(function(){
                        // 정적객체일때 이벤트 
                        // 동적객체는 on메서드
                        $("#allBtn").click(function(){
                            $('i',this).toggleClass("bi-x");
                            $("body").toggleClass('menuBkg')
                        })
                    })
                </script>

        </div>
        



                
                
            
                    
                   
                

                 
                 
            
            
        
        
    </header>

    <?php  if( !defined('_INDEX_'))  {   ?>
        <div class='subpage mt-200 '>
            <?php if($fm_id){?>
                    <div class=''>
            <?php }else{ ?>
                    <div class='container'>
            <?php  } ?>
    <?php } ?>

