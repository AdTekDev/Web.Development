<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gio hang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


  </head>

  <body>

        <h1>Cac mon hang</h1>
        <a onclick="xulygiohang()">
            <img width="64" src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/512x512/shopping_cart.png"> 
            <a id="SoLuong">0</a>
        </a>
    <form id="cartshow" method="post"  action="cart.php"  hidden>
      <input type="text" id="datacart"  name="datacart">
    </form>

        <br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" width="200" src="https://thegioiquattran.com.vn/wp-content/uploads/2022/03/Airfusion-1217-mau-go.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Quat TRan</h5>
              <p class="card-text">...</p>
              <a  class="btn btn-primary" onclick="themvaogiohang(112, 'QuatTran')">Them vao gio hang</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top"  width="200" 
            src="https://thegioisofa.com/wp-content/uploads/2022/03/ghe-tinh-yeu-1.webp" 
            alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ghe tinh yeu</h5>
              <p class="card-text">...</p>
              <a  class="btn btn-primary" onclick="themvaogiohang(6789, 'GheTinhYeu')">Them vao gio hang</a>
            </div>
          </div>

          <button class="btn btn-secondary" value="Chot Don" onclick="ChotDon()">Chot don hang</button>

  </body>

  <script>
    soluong = 0;
    danhsachvatpham = {};

    function themvaogiohang(idmonhang, mamonhang) {
        soluong++;
        //alert(soluong);
        var elemSL = document.getElementById("SoLuong");
        elemSL.innerText = soluong;
        if (danhsachvatpham[idmonhang]) {
            danhsachvatpham[idmonhang][2]++;
        } else {
            danhsachvatpham[idmonhang] = [idmonhang, mamonhang, 1];
        }
    }

    function ChotDon() {
        alert(JSON.stringify(danhsachvatpham));
    }

    function xulygiohang() {
      var  indata = document.getElementById("datacart");
      indata.value = JSON.stringify(danhsachvatpham);
      var inform = document.getElementById("cartshow");
      inform.submit();
    }
  </script>

  </html>   