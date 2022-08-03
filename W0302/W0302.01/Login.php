<!DOCTYPE html>
<html>

<head>
    <title> Bài tập W03.02.04 - Xử lý LOGIN </title> 
    
    <?php  require "./layout_head.php"; ?>

</head>

<body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>


  <h1> Bài tập W03.02.04 - Xử lý LOGIN    </h1>

  <form  method="GET"   action="">

    <div class="mb-3">
      <label for="UserName" class="form-label">Tên đăng nhập: </label>
      <input type="text" class="form-control" 
        id="UserName"   name="UserName"
        placeholder="nhập tên tài khoản đăng ...">
    </div>

    <div class="mb-3">
      <label for="Password" class="form-label">Mật khẩu: </label>
      <input type="password" class="form-control" 
        id="Password"   name="Password"
        placeholder="nhập mật khẩu ...">
    </div>

    <div>
        <button type="submit" class="btn btn-secondary" >Đăng nhập vào Server</button>
    </div>

  </form>

  <!------------------->

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Kết Quả:</h5>
      <p class="card-text" id="ketqua"> 

        <?php  
            $username =  $_GET["UserName"];
            $password =  $_GET["Password"];

            echo "Login vào Server: " . $username . " / " . $password; 
        ?>   

      </p>
    </div>
  </div>

</body>

<script>
</script>

</html>