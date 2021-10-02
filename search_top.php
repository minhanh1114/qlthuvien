      
      <?php
 
 include('./admin/librarian/admin.class.php');
 ?> 
      <div class="header">
            <div class="left">
              <a href=""><img src="https://cor-liv-cdn-static.bibliocommons.com/images/MN-SAINTPAUL/logo.png?1631089604958" alt=""></a>
            </div>
            <div class="right">
              
            
               <button type="button" class="btn btn-primary mr-3" ><a href="./admin/librarian/index.php" style="color:antiquewhite;">Admin </a></button>

              
              
              <p>Tìm kiếm </p>
              <form action="view_search.php" method="POST">
                <select class="form-select" aria-label="Default select example" name="search_select">
                  <option selected value="0">Từ khóa</option>
                  <option value="ten_sach">Tên sách</option>
                  <option value="tac_gia">Tác giả</option>
                  <option value="nha_xuat_ban">Nhà Xuất Bản</option>
                  <option value="1">Thế loại</option>
                </select>
                <input type="text"  placeholder="Nhập từ khóa tìm kiếm" name="search_content">
                <button id="buttom_s" class="btn btn-dark" name="submit_search" > <i class="fa fa-search " aria-hidden="true"></i></button>
              </form>
            </div>
          
          </div>