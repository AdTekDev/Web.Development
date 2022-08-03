<!DOCTYPE html>
<html>

<head>
    <title> Bài tập W03.02.04 - Xử lý LOGIN POST  </title> 
    
    <?php  require "./layout_head.php"; ?>

</head>

<body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>


  <h1> Bài tập W03.02.04 - Xử lý LOGIN POST    </h1>

  <form  method="POST"   action=""  id="FormLogin">

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
        <button type="button" onclick="callSubmit()" class="btn btn-secondary" >Đăng nhập vào Server</button>
    </div>

  </form>

  <!------------------->

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Kết Quả:</h5>
      <p class="card-text" id="ketqua"> 

        <?php  
            $username =  $_POST["UserName"];
            $password =  $_POST["Password"];
            $error = "";
            $koloiSubmit = true;

            $lenname = strlen($username);
            if ($lenname == 0 || $lenname > 30 ) {
                $error = $error . " .Lỗi Username !";
                $koloiSubmit = false;
            }
            if (strlen($password) < 6) {
                $error = $error . " .Lỗi Password !";
                $koloiSubmit = false;
            }

            if ($username == $password) {
                $error = $error . " . Đủ điều kiện đăng nhập !!!";
            }
            echo "Login vào Server: " . $username 
                . " / " . $password . " " . $error; 
        ?>   

      </p>
    </div>
  </div>

</body>

<script>
function callSubmit() {

    var chophepSubmit = true;
    var error = "";

    // CODE Check thông tin ở đây
    var  username = document.getElementById("UserName").value;
    var  password = document.getElementById("Password").value;

    if (username.length == 0 || username.length > 30) {
        error += " .Lỗi Username !";
        chophepSubmit = false;
    }

    if (password.length < 6) {
        error += " .Lỗi Password !";
        chophepSubmit = false;
    }


    // Code submit ở đây 
    if (chophepSubmit) {
        document.getElementById("FormLogin").submit();
    } else {
        // hiển thị thông báo lỗi ...
        document.getElementById("ketqua").innerText = error;
    }
    document.getElementById("FormLogin").submit();

}
</script>

</html>