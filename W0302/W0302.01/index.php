<!DOCTYPE html>
<html>

<head>
    <title> Bài tập W03.02.01 - Chỉ toàn HTML </title> 
    
    <?php  require "./layout_head.php"; ?>

</head>

<body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>


  <h1> Bài tập W03.02.01 - Chỉ toàn HTML - Nhập vào Họ Tên  </h1>

  <form  method="GET"   action="">

    <div class="mb-3">
      <label for="HoTen" class="form-label">Họ tên: </label>
      <input type="text" class="form-control" 
        id="HoTen"   name="HoTen"
        placeholder="nhập họ tên của bạn ...">
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
      <h5 class="card-title">Họ Tên:</h5>
      <p class="card-text" id="kq_hoten"> <?php  echo "bạn tên là ... " . $_GET["HoTen"]; ?>   </p>
    </div>
  </div>


</body>

<script>
function xulyThongTin() {
    var ht = document.getElementById("HoTen").value;
    document.getElementById("kq_hoten").innerText = ht;
}
</script>

</html>