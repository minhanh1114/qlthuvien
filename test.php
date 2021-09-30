<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <?php
    if(isset($_POST['submit_search']))
    {
        $index = $_POST['search_select'];
        $content = $_POST['search_content'];
        echo $index . $content;
        
    }
    ?>

</head>
<body>
  <form action="" method="POST">
  <select class="form-select" aria-label="Default select example" name="search_select">
                  <option selected>Từ khóa</option>
                  <option value="1">Tên sách</option>
                  <option value="2">Tác giả</option>
                  <option value="3">Thế loại</option>
                  </select>
        <input type="text"  placeholder="Nhập từ khóa tìm kiếm" name="search_content">
      <button  class="btn btn-dark  " name="submit_search" > <i class="fa fa-search " aria-hidden="true"></i></button>
  </form>
</body>
</html>