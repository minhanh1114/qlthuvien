<div class="content-second">
        <div class="background">
          <div class="header_h1">    
            <h1>THƯ VIỆN SỐ</h1>
            <p class="text-white">Thư viện trực tuyến của bạn, hoạt động 24/7, từ nhà và khi đang di chuyển.</p>     
          </div>
            <div class="slider_1">
              <i class="fa fa-chevron-left slider-prev_1" aria-hidden="true"></i>
              <ul class="slider-dots_1">
                  <li class="slider-dot-item active" data-index="0"></li>
                  <li class="slider-dot-item" data-index="1"></li>
                  <li class="slider-dot-item" data-index="2"></li>
                  <li class="slider-dot-item" data-index="3"></li>
                </ul>
                <?php
               $results = $book->getall_11();      
								
                ?>
                <div class="slider-wrapper_1">
                    <div class="slider-main_1">
                          <?php
                    foreach ($results as $row){
                                          ?>
                            
                              <div class="slider-item-1">
                                <a href="view_book.php?id=<?php echo $row['ma_sach'] ?>">
                                  <img src="./admin/librarian/upload/<?php echo $row['anh']; ?>" alt="">
                                 
                                  <h3 class="text-capitalize"><?php echo $row['ten_sach']; ?></h3> </a>
                                  <div class="mo_ta"><?php echo $row['mo_ta']; ?></div>
                                                              
                              </div>
                                  <?php
                                    }
                                    ?>
                            
                            <div class="slider-item-1 ">
                                  <a href=""><h3 class="text-center mt-5">Xem Tất Cả</h3></a>
                            </div>
                            
                        
                    </div>
                </div>
                
                <i class="fa fa-chevron-right slider-next_1" aria-hidden="true"></i>

        
              </div>
             

             </div> 
            
          </div>

          <!-- end-conten-second -->

           <!-- block 2 -->
      
      <div class="content-second">
        <div class="background background_1">
          <div class="header_h1">
            <h1>TRẺ EM</h1>
            <!-- <p>Thư viện trực tuyến của bạn, hoạt động 24/7, từ nhà và khi đang di chuyển.</p> -->
          </div>
            <div class="slider_1  slider_2">
              <i class="fa fa-chevron-left slider-prev_1 slider-prev_2" aria-hidden="true"></i>
              <ul class="slider-dots_1">
                  <li class="slider-dot-item active" data-index="0"></li>
                  <li class="slider-dot-item" data-index="1"></li>
                  <li class="slider-dot-item" data-index="2"></li>
                  <li class="slider-dot-item" data-index="3"></li>
                </ul>
                <div class="slider-wrapper_1">
                    <div class="slider-main_1 slider-main_2">
                    <?php
                    $results = $book->getall_baby_11();
                    foreach ($results as $row){
                                          ?>
                            <div class="slider-item-1 slider-item-2">
                              <a href="view_book.php?id=<?php echo $row['ma_sach'] ?>">
                                  <img src="./admin/librarian/upload/<?php echo $row['anh']; ?>" alt="">
                                 
                                  <h3 class="text-capitalize"><?php echo $row['ten_sach']; ?></h3> </a>
                                  <div><?php echo $row['mo_ta']; ?></div>
                                                              
                              </div>
                            <?php
                              }
                              ?>
                            
                            <div class="slider-item-1 slider-item-2 ">
                              <a href=""><h3 class="text-center mt-5">Xem Tất Cả</h3></a>
                            </div>
                        
                    </div>
                </div>
                <i class="fa fa-chevron-right slider-next_1 slider-next_2" aria-hidden="true"></i>

        
              </div>
             

             </div> 
            
          </div>

          <!-- end-conten-second (2) -->

           <!-- block3 -->
      
      <div class="content-second">
        <div class="background background_2">
          <div class="header_h1">
            <h1>THANH NIÊN</h1>
            <p class="text-white">Thư viện trực tuyến của bạn, hoạt động 24/7, từ nhà và khi đang di chuyển.</p>
          </div>
            <div class="slider_1 slider_3">
              <i class="fa fa-chevron-left slider-prev_1 slider-prev_3" aria-hidden="true"></i>
              <ul class="slider-dots_1">
                  <li class="slider-dot-item active" data-index="0"></li>
                  <li class="slider-dot-item" data-index="1"></li>
                  <li class="slider-dot-item" data-index="2"></li>
                  <li class="slider-dot-item" data-index="3"></li>
                </ul>
                <div class="slider-wrapper_1">
                    <div class="slider-main_1 slider-main_3">
                      
                    <?php
                    $results = $book->getall_thanhnien_11();
                    foreach ($results as $row){
                                          ?>
                            <div class="slider-item-1 slider-item-3">
                                <a href="view_book.php?id=<?php echo $row['ma_sach'] ?>">
                                      <img src="./admin/librarian/upload/<?php echo $row['anh']; ?>" alt="">
                                    
                                      <h3 class="text-capitalize"><?php echo $row['ten_sach']; ?></h3> </a>
                                      <div><?php echo $row['mo_ta']; ?></div>
                                                              
                            </div>
                            <?php } ?>
                            <div class="slider-item-1 slider-item-3 ">
                              <a href=""><h3 class="text-center mt-5">Xem Tất Cả</h3></a>
                            </div>
                        
                    </div>
                </div>
                <i class="fa fa-chevron-right slider-next_1  slider-next_3" aria-hidden="true"></i>

        
              </div>
             

             </div> 
            
          </div>
 
          <!-- end-conten-slider -->