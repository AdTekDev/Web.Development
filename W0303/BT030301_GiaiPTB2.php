<!DOCTYPE html>
<html>

<head>
    <title> BT03.03.01 - GIẢI PHƯƠNG TRÌNH BẬC 2   </title> 
    
    <?php  require "./layout_head.php"; ?>

</head>

<body>
  <script src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>


  <h1> BT03.03.01 - GIẢI PHƯƠNG TRÌNH BẬC 2     </h1>

  <form  method="POST"   action=""  id="FormGiaiPTB2">

    <div class="mb-3">
      <label for="HeSoA" class="form-label">Hệ số a*: </label>
      <input type="number" class="form-control" 
        id="HeSoA"   name="HeSoA"
        placeholder="nhập hệ số a ...">
    </div>

    <div class="mb-3">
      <label for="HeSoB" class="form-label">Hệ số b*: </label>
      <input type="number" class="form-control" 
        id="HeSoB"   name="HeSoB"
        placeholder="nhập hệ số b ...">
    </div>

    <div class="mb-3">
      <label for="HeSoC" class="form-label">Hệ số c*: </label>
      <input type="number" class="form-control" 
        id="HeSoC"   name="HeSoC"
        placeholder="nhập hệ số c ...">
    </div>

    <div>
        <button type="button" onclick="callSubmit()" class="btn btn-secondary" >Giải phương trình</button>
    </div>

  </form>

  <!------------------->

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Kết Quả:</h5>
      <p class="card-text" id="ketqua"> 

        <?php  
            $HeSoA =  $_POST["HeSoA"];
            $HeSoB =  $_POST["HeSoB"];
            $HeSoC =  $_POST["HeSoC"];
            
            $error = "";
            $x1 = 0;
            $KetQua = "";
            $koloiSubmit = true;
            // Validate - Input DATA 
            try {
                $HeSoA = (float) $HeSoA;
                $HeSoB = (float) $HeSoB;
                $HeSoC = (float) $HeSoC;
            } catch (Exception $e) {
                echo 'ERROR: ',  $e->getMessage() ;
            }
            
            // Xử lý / Tính toán 
            if ( $HeSoA == 0) {
                if ( $HeSoB == 0) {
                    if ( $HeSoC == 0) {
                        $KetQua = "PT có VSN !";
                    } else {
                        $KetQua = " Vô nghiệm !";
                    }                
                } else {
                    $KetQua = " PTB1 có 1 nghiệm x= " 
                        . (-$HeSoC/$HeSoB);
                }
            } else {
                $Delta = $HeSoB * $HeSoB - 4 * $HeSoA * $HeSoC;
                if ($Delta < 0) {
                    $KetQua = " PTB2 Vô nghiệm ! hoặc có 2 nghiệm phức !";
                } else if ($Delta > 0) {
                    $KetQua = "PTB2 có 2 nghiệm: "
                    . "<br> .  X1 = " . ( (-$HeSoB -sqrt($Delta)) / (2*$HeSoA) )
                    . "<br> .  X2 = " . ( (-$HeSoB +sqrt($Delta)) / (2*$HeSoA) );
                } else {
                    $KetQua = "<br> .  PTB2 có 1 nghiệm KÉP "
                    . "<br> .  X = " . ( -$HeSoB / (2*$HeSoA) );
                }
            }

            // Trả về kết quả !!!
            echo "GPTB2 tại Server: " 
            . "<br> . Hệ số A = " . $HeSoA
            . "<br> . Hệ số B = " . $HeSoB
            . "<br> . Hệ số C = " . $HeSoC
            . "<br> . Có KQ sau: ------ " . $KetQua
            . "<br> . " . $error; 
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
    var  HeSoA = document.getElementById("HeSoA").valueAsNumber;
    var  HeSoB = document.getElementById("HeSoB").valueAsNumber;
    var  HeSoC = document.getElementById("HeSoC").valueAsNumber;


    // Code submit ở đây 
    if (chophepSubmit) {
        document.getElementById("FormGiaiPTB2").submit();
    } else {
        // hiển thị thông báo lỗi ...
        document.getElementById("ketqua").innerText = error;
    }

}
</script>

</html>