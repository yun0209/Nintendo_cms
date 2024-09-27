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
            <div class="crdiv ms-auto me-auto d-none d-md-block my-5">
               
                <ul class=" d-flex text-center flex-xxl-nowrap flex-wrap justify-content-center align-items-center">
                        
                        
                        
                        <?php
    for ($i= $list_count -1; $i>= 0; $i--) {
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
                      
                      
                      
                      <li class=" me-sm-4 mt-5 mt-xxl-0 ms-sm-4 me-auto ms-auto position-relative" 
                              style="background-image:url(<?php echo $img; ?>); background-repeat: no-repeat;">
                        
                            
                                <div class="cr_box bg-white flex-column position-absolute d-flex align-items-center fontNoto">
                                    <?php echo $list[$i]['wr_content']; ?>
                                </div>
                                <a href="#tabs-<?php echo $i+1; ?>" class="d-block h-100"></a>
                            
                            
                      </li>

                        
    <?php }  ?>       
                       
                        
                        
       </ul>
    </div>




       
   
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>


 
           
        
                   
                        
                       
            
                       
                 
              
            

 


