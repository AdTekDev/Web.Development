<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Bán Ốp điện thoại bằng Gỗ</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	
	<div class="container-fluid">
        <h1> Login </h1>
		<!-- Nội dung chính của PAGE ở đây --> 

        <form method="POST">
            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">Tài khoản</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control-plaintext" id="username" name="username"  value="Tu.AKa">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword"  name="inputPassword">
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </div>
        </form>
		
	</div>

    <?php 
        var_dump(  $_GET );

        var_dump(  $_POST );
    ?> 

	<?php include 'layout_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>