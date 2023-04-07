
BatDen = false;
CountTime = 0;
DenNaoDangSang = 0;  // 1: Xanh;     2: Vang;   3: Do
Mau = ["gray", "Green", "Yellow", "Red"];
ThoiGian = [0, 2, 1, 3];

setInterval(HienThiDenGiaoThong, 1000);

function veMotDen(x,y,r,DenNao) {
    mauDen = Mau[0];
    if (DenNao == DenNaoDangSang) {
        mauDen = Mau[DenNao];
    }
    return "<circle cx=" + x 
        + " cy=" + y 
        + " r=" + r 
        + " fill='" + mauDen 
        + "' />";
}


function ResetTime() {
    tdo = parseInt(document.getElementById("timeDo").value);
    txanh = parseInt(document.getElementById("timeXanh").value);
    tvang = parseInt(document.getElementById("timeVang").value);

    ThoiGian[1] = txanh;
    ThoiGian[2] = tvang;
    ThoiGian[3] = tdo;
}


function ChayDenGiaoThong() {
    BatDen = true;
}

function HienThiDenGiaoThong()
{
    if (BatDen) {
        if (CountTime <= 0) {
            DenNaoDangSang++;
            if (DenNaoDangSang < 1 || DenNaoDangSang > 3) {
                DenNaoDangSang = 1;
            }
            CountTime = ThoiGian[DenNaoDangSang];
            document.getElementById("DataKetQua").innerHTML 
                = "<svg height='600' width='600'>"
                + veMotDen(100,100,30,1)
                + veMotDen(200,100,30,2)
                + veMotDen(300,100,30,3)
                + "</svg>"
        } else {
            CountTime--;
        }
    }
}