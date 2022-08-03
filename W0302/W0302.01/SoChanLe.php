<!DOCTYPE html>
<html>

<head>
    <title> Bài tập W03.02.02 - Số Chẵn Lẻ </title> 
    
    <?php  require "./layout_head.php"; ?>

</head>

<body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>


  <h1> Bài tập W03.02.01 -  - Số Chẵn Lẻ   </h1>

  <form  method="GET"   action="">

    <div class="mb-3">
      <label for="SoNguyen" class="form-label">Số nguyên: </label>
      <input type="number" class="form-control" 
        id="SoNguyen"   name="SoNguyen"
        placeholder="nhập 1 nguyên dương ...">
    </div>

    <div>
      <button type="button" class="btn btn-primary" onclick="xulyThongTin()"> Phía Client - JavaScript </button>
    </div>

    <div>
        <button type="submit" class="btn btn-secondary" >Gửi lên Server xử lý</button>
    </div>

  </form>

  <!------------------->

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Kết Quả:</h5>
      <p class="card-text" id="ketqua"> 

        <?php  
            $songuyen =  $_GET["SoNguyen"];
            if ($songuyen % 2 == 0) {
                $kq = "Số Chẵn !!! ";
            } else {
                $kq = "Số LẺ !!! ";
            }

            echo "Server cho biết " . $songuyen . " là 1 số ... " . $kq; 
        ?>   

      </p>
    </div>
  </div>

</body>

<script>
function xulyThongTin() {
    var ht = document.getElementById("SoNguyen").valueAsNumber;
    if (ht % 2 == 0) {
        kq = "Số Chẵn !";
    } else {
        kq = "Số LẺ !";
    }
    document.getElementById("ketqua").innerText = kq;
}
</script>

</html>