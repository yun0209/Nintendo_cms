<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="">
            <h2 class="ms-auto me-auto ti_Blank fontBase titleT ">
                <p class=" text-center w-100">
                    <span><?php 
                    $botitle = explode('|', $bo_subject);
                    echo $botitle[0];                    
                    ?></span><?php echo  $botitle[1]; ?>
                </p>  
                <p class=" text-center w-100">
                  <?php  echo  $botitle[2]; ?>
                </p>
            </h2>
            <div class="position-relative">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" class="img-fluid" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>             
                        <div class="swiper-slide">
                            <div class="news_img1  rounded-30 ">
                                <p class="ct_Blank">
                                    <a href="<?php echo $list[$i]['wr_link1']; ?>" >
                                        <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>                                      
                                    </a>
                                </p>
                                <p class="leadcopy fontNoto col-9 ms-4  ">
                                    <?php echo $list[$i]['subject']; ?>
                                    <br>
                                    <?php echo $list[$i]['wr_content']; ?>
                                </p>
                            
                            </div>
                        </div>
    <?php }  ?>       
                       
                        
                        
                    </div>
                    
                    
                    
                </div>
                
                <div class="button-next"></div>
                <div class="button-prev"></div>
            </div>
            
        </div>




       
   
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>

 


