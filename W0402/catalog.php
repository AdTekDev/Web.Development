<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Bán Ốp điện thoại bằng Gỗ</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	
	<div class="container-fluid">
    <h1> Catalog Page </h1>
		<!-- Nội dung chính của PAGE ở đây --> 

    <?php
      // Tham số
      $server = "localhost";
      $dbUsername = "db01";
      $dbPassword = "Nh[gwIHsa[8W0rNQ";
      $dbName = "web_phone";
      // Kết nối
      $dbconnect = mysqli_connect( $server , 
        $dbUsername , $dbPassword);
      mysqli_select_db( $dbconnect,  $dbName);
      // Truy vấn
      $results = mysqli_query( $dbconnect, "Select * from product");
      while ($row = mysqli_fetch_row($results)) {
      ?>
        <div class="card" style="width: 18rem;">
          <img src="<?=$row[7]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$row[1]?></h5>
            <p class="card-text"><?=$row[2]?></p>
            <a href="#" class="btn btn-primary"><?=$row[0]?></a>
          </div>
        </div>
      <?php
      }
      ?>
    ?>
		
	</div>

	<?php include 'layout_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>