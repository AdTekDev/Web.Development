

function tinhCVDT() {
  var chieudai = document.getElementById("ChieuDai").valueAsNumber;
  var chieurong = document.getElementById("ChieuRong").valueAsNumber;

  var kq_chieudai = document.getElementById("kq_chieudai");
  kq_chieudai.textContent = chieudai;

  var kq_chieurong = document.getElementById("kq_chieurong");
  kq_chieurong.textContent = chieurong;

  var kq_chuvi = document.getElementById("kq_chuvi");
  kq_chuvi.textContent = 2 * (chieurong + chieudai);

  var kq_dientich = document.getElementById("kq_dientich");
  kq_dientich.textContent = chieurong * chieudai;

}

/*
  alert("Kết quả HCN có: Chiều dài= " + chieudai
       + " . Chiều rộng= " + chieurong
       + "  THÌ Diện Tích= " + (chieudai*chieurong)
       + "  .. Chu Vi= " + 2*(chieudai+chieurong));

  */


