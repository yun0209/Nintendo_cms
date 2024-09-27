<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="position-absolute">
                        <div class="swiper marioSwiper">
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
    $img_content = '<img src="'.$img.'" class="img-fluid mb-4" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?> 

                                <div class="swiper-slide">
                                    <p class="fontNoto leadcopy text-center">
                                        <a href="<?php echo $list[$i]['wr_link1']; ?>" >
                                            <?php echo $img_content; ?>
                                        </a>
                                        <?php echo $list[$i]['subject'];?>
                                    </p>
                                </div>
                    
   <?php }  ?>       
                     

                              
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="button-next ">
                           
                        </div>
                        <div class="button-prev">
                           
                        </div>
                    </div> 
                    


            
            

            
        




       
   
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>

 


