
<?php 
 define('_INDEX_', true); // 첫페이지인식상수
 include_once('./top.php'); // 상단
 ?>
    
    <section id="mainBanner" class="  mt-lg-0 cententB">
        <div class="d-flex justify-content-center align-items-center">
            <div class="mainp overflow-hidden ">
                <div class="main_ani">
                    <a href=""><img src="/img/png/main_Mimg.png" alt="" class="d-lg-none"></a>
                    <a href=""><img src="/img/png/mario_M.png" alt="마리오 메인이미지" class="d-none d-lg-block  "></a>
                    <div class="redSt"></div>
                </div>
                
                <div class="smenu d-none d-lg-block">
                    <ul class="col-12 sb_menuT me-auto ms-auto img-fluid fontBase d-flex align-items-center  justify-content-center">                        
                        <li class="col-3 text-center"><a href="#crContent">캐릭터</a></li>
                        <li class="col-3 text-center"><a href="">굿즈</a></li>
                        <li class="col-3 text-center"><a href="https://store.nintendo.co.kr/">온라인e숍</a></li>
                        <li class="col-3 text-center"><a href="">사전예약</a></li>
                    </ul>
                </div>            
            </div>            
        </div>        
    </section>


    <section id="news_swiper" class="col cententB"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0">
   
        <?php echo latest('pic_block','main_news',5, 100); ?>
        

    </section>
    
    <section id="mContent" class="cententB" 
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0">
        <div class="swiper-wrapper">
        <div class="redB ms-auto me-auto">
            <div class="ti_BlankTop ti_Blank">
                <div class="yBox">

                </div>
                <div class="mario"></div>
                <h2 class="text-center mb-5 m_title fontBase">
                    <p>It's-a me,
                    </p>
                    <p>Mario!</p>
                </h2>
                <div class="leadcopy text-center fontNoto">
                    <p class="mb-3">
                        <span>
                            빨간 모자에 파란색 바지, M 마크에 콧수염이 특징인,
                        </span>
                        <span>
                            항상 쾌활하고 밝은 마리오.
                        </span>
                        
                    </p>
                    <p class="mb-3">
                        <span>
                            달리고, 뛰고, 슈퍼 버섯으로 파워 업!
                        </span>
                        <span>
                            다양한 액션과 아이템을 다루면서세계를 모험해 나갈 것입니다.
                        </span>
                    </p>
                    <p class="mb-3">
                        <span>
                            마리오는 골프와 테니스를 비롯해 스포츠도 잘하고
                        </span>
                        <span>
                            화려한 드라이빙 기술을 선보이기도합니다. 
                        </span>
                    </p>
                    <p>
                        <span>
                            루이지와 피치 공주, 요시 등의 동료들과 함께
                        </span>
                        <span>
                            앞으로도 마리오의 모험은 계속됩니다.
                        </span>
                    </p>
                </div>
            </div>
            <div class="m_ybar me-auto ms-auto d-flex text-center justify-content-center align-items-center">
                <p class="m_Menu26 fontBase">
                    마리오 시리즈
                    
                </p>
                <img src="/img/png/y_bar.png" class="img-fluid" alt="">
            </div>
            <div class="rZone d-flex align-items-center mt-lg-3 justify-content-center ">
                <div class="d-flex align-items-center justify-content-center ">
                <?php echo latest('pic_block3','mario_content',6, 100); ?>
                  
                    
                </div>
            </div>
            
            <div class="movie w-100">

                <h2 class="mMovie mb-4 ms-auto me-auto"></h2>

                <div class="text-center fontBase ti_Blank">

                    <p class="m_Movie">
                        슈퍼마리오 MOVIE
                    </p>
                    <p class="m_Movie40">
                        4월26일 대개봉!
                    </p>
                </div>
                <div class="youtube_img  ms-auto me-auto mb-3 position-relative">
                    <button class="play-button position-absolute">
                    </button>
                    <div>
                        <img src="/img/png/movie_fontimg.png" alt="" class="img-fluid">
                    </div>
                    
                    <?php echo latest('pic_block5','mario_video',1,100);?>
                </div>
                
                    
                
                
            </div>
            
        </div>
        
    </section>

  
    <section id="soft_Swiper" class="col cententB"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0">
        <div class="">
        
            <?php echo latest('pic_block4','new_software',6,100);?>
            
        </div>
        

    </section>

    <section id="crContent" class="cententB" 
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0">
        <div class="">
            
            <div class=" d-md-block ">
                <?php echo latest('pic_block2', 'charactor', 4 , 100); ?>
     
            </div>
            <div id="tabs" class="d-md-none">
                <!-- 탭 메뉴 -->
                <ul class="text-center tads-nvi d-flex fontNoto justify-content-between mx-auto">
                    <li><a href="#tabs-1">젤다의 전설</a></li>
                    <li><a href="#tabs-2">별의 커비</a></li>
                    <li><a href="#tabs-3">스플래툰</a></li>
                    <li><a href="#tabs-4">피크민</a></li>
                </ul>
    
                <!-- 탭 콘텐츠 -->
                <div id="tabs-1" class="my-5">
                    <div class="crdiv mx-auto my-5">
                        <ul class="d-flex justify-content-center">
                            <li class="position-relative cr_j">
                                <div class="cr_box text-center ">
                                    <p class="mb-4">
                                        <span class="gNm fontNoto py-2">젤다의 전설</span>
                                    </p>
                                    <h3 class="cNm fontBase mb-4">링크</h3>
                                    <p class ="inT">하이랄 성의 지하를 조사하던 중
                                        천재지변에 <br>휘말려 버린 용사 링크, 오른손에 얻은...</p>
                                </div>
                                <a href="#" class="h-100 d-block"></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
    
                <div id="tabs-2" class="my-5">
                    <div class="crdiv mx-auto">
                        <ul class="d-flex justify-content-center">
                            <li class="position-relative cr_kby">
                                <div class="cr_box text-center">
                                    <p><span class="gNm fontNoto fontNoto py-2 mb-4">별의 커비</span></p>
                                    <h3 class="cNm fontBase mb-4">커비</h3>
                                    <p class ="inT">푸푸푸랜드에 찾아온 모험의 용사 커비!<br>
                                        적을 빨아들이고 능력을 카피해<br> 변신하기도 합니다.</p>
                                </div>
                                <a href="#" class="h-100 d-block"></a>
                            </li>
                        </ul>
                    </div>
                </div>
    
                <div id="tabs-3" class="my-5">
                    <div class="crdiv mx-auto">
                        <ul class="d-flex justify-content-center">
                            <li class="position-relative cr_spl">
                                <div class="cr_box text-center">
                                    <p><span class="gNm fontNoto py-2 mb-4">스플래툰</span></p>
                                    <h3 class="cNm fontBase mb-4">캐릭터 보러가기</h3>
                                    <p class ="inT">잉클링 종족의 흥미진진한 영역배틀!<br>
                                         인간과 오징어, 두가지 모습으로 만나요 ~</p>
                                </div>
                                <a href="#" class="h-100 d-block"></a>
                            </li>
                        </ul>
                    </div>
                </div>
    
                <div id="tabs-4" class="my-5">
                    <div class="crdiv mx-auto">
                        <ul class="d-flex justify-content-center">
                            <li class="position-relative cr_pik">
                                <div class="cr_box text-center">
                                    <p><span class="gNm fontNoto py-2 mb-4">피크민</span></p>
                                    <h3 class="cNm fontBase mb-4">캐릭터 보러가기</h3>
                                    <p class ="inT">미지의 행성을 탐색 하던 중에 만난<br>
                                         반은 동물, 반은 식물인 귀여운 피크민</p>
                                </div>
                                <a href="#" class="h-100 d-block"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
       
    </section>

    <div id ="musein">
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        $(document).mousemove(function(event) {
            // 요소의 크기
            var museinWidth = $('#musein').outerWidth();
            var museinHeight = $('#musein').outerHeight();

            // 뷰포트 크기
            var viewportWidth = $(window).width();
            var viewportHeight = $(window).height();

            // 마우스 위치에서 요소의 크기만큼 조정
            var left = event.clientX + 1;
            var top = event.clientY + 1;

            // 요소가 화면 오른쪽이나 아래쪽으로 나가지 않도록 제한
            if (left + museinWidth > viewportWidth) {
                left = viewportWidth - museinWidth;
            }

            if (top + museinHeight > viewportHeight) {
                top = viewportHeight - museinHeight;
            }

            // 위치 설정
            $('#musein').css({
                left: left + 'px',
                top: top + 'px'
            });
        });
    </script>
    
    
    <script>
        
        const swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 50,
          loop:true,
          speed: 800,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          navigation: {
            nextEl: ".button-prev",
            prevEl: ".button-next",
            
          },
          breakpoints: {
            500:{
                slidesPerView:1,
                spaceBetween:20,
            },

            600:{
                slidesPerView:1,
                spaceBetween:20,
            },
            800: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            900: {
                slidesPerView: 2,
                spaceBetween: 60,
            },
            1500:{
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1800: {
                slidesPerView: 3.6,
                spaceBetween: 20,
            }

            }
           
        });

        const swiperM = new Swiper(".marioSwiper", {
            slidesPerView: 3,
            spaceBetween: 15,
            loop:true,
            autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
            speed: 800,
            navigation: {
                nextEl: ".button-prev",
                prevEl: ".button-next",
                
            },
        
        });
   
        const swiperS = new Swiper(".sSwiper", {
          slidesPerView: 1,
          spaceBetween: 15,
          loop:true,
          speed: 800,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          navigation: {
            nextEl: ".button-prev",
            prevEl: ".button-next",
            
          },
          breakpoints: {
            500:{
                slidesPerView:1,
                spaceBetween:20,
            },

            600:{
                slidesPerView:1,
                spaceBetween:20,
            },
            800: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            900: {
                slidesPerView: 2,
                spaceBetween: 60,
            },
            1500:{
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1800: {
                slidesPerView: 3.6,
                spaceBetween: 20,
            }

            }
         
          
          
        });

        const targetElement = document.querySelector("#mContent");
        const yBoxElement = document.querySelector(".yBox");

           
            window.addEventListener("scroll", yboxlode);
            // 초기 로드 시에도 가시성 검사
            yboxlode();

        const marioElement = document.querySelector(".mario");
        
        
        window.addEventListener("scroll", mariogo);
        mariogo();
        
        
    
        let gnbM = document.querySelector(".gnb");
        let myButton = document.querySelector(".myicon button");
        let menuIcon = document.querySelector(".myicon button i");

        myButton.addEventListener("click", function() {
            const isMenuClosed = gnbM.classList.contains("d-none");

            // 메뉴가 열리고 닫힐떄 클래스 추가 & 제거
            gnbM.classList.toggle("d-none", !isMenuClosed);
            gnbM.classList.toggle("d-block", isMenuClosed);

            // 메뉴가 닫히고 열릴떄의 메뉴바  상태
            menuIcon.classList.toggle("bi-list", !isMenuClosed);
            menuIcon.classList.toggle("bi-x", isMenuClosed);

            // 메뉴가 열리면 배경색 추가
            document.body.classList.toggle("menuBkg", isMenuClosed);
            
        });

        


        //마리오 무비 유튜브 
        const ckimg = document.querySelector(".youtube_img");
        const iframeyou = document.querySelector(".youtube_img iframe");

        ckimg.addEventListener("click", function() {
            const playon = iframeyou.classList.contains("d-none");
            // 마리오 뮤비 이미지 클릭시 body에 클래스 추가,d-none제거
            iframeyou.classList.toggle("d-none",!playon);
            iframeyou.classList.toggle("d-block",playon);
            document.body.classList.toggle(".ifm",playon)
        });

        // 선언적 함수
        function yboxlode() {
                const targetOffsetTop = targetElement.offsetTop; //상단
                const scrollPosition = window.pageYOffset;

                if (scrollPosition >= targetOffsetTop - 300) {
                    yBoxElement.classList.add("action");
                } 
         }
         function mariogo(){
            const targetOffsetTop = targetElement.offsetTop;
            const scrollPosition = window.pageYOffset;
            if (scrollPosition >= targetOffsetTop - 300) {
                   marioElement.classList.add("go");
                }  
        }
        
      </script>

      <script>
        // jQuery UI의 tabs() 메서드를 사용
        $( function() {

          $( "#tabs" ).tabs();

        } );
        </script>

      <script>
        AOS.init();
      </script>

    

<?php include_once('./bottom.php'); ?>