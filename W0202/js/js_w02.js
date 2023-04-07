
solan = 0;

function  XacDinhTamGiac() {
    ketqua = "None";
    soA = parseFloat(document.getElementById("soA").value);
    soB = parseFloat(document.getElementById("soB").value);
    soC = parseFloat(document.getElementById("soC").value);

    if (soA + soB > soC && soA + soC > soB && soB + soC > soA) 
    {
        if (soA == soB && soA == soC) {
            ketqua = "đây là tam giác ĐỀU !";
        } else if (soA == soB) {
            ketqua = "đây là tam giác CÂN TẠI C !";
        } else if (soA == soC) {
            ketqua = "đây là tam giác CÂN TẠI B !";
        } else if (soC == soB) {
            ketqua = "đây là tam giác CÂN TẠI A !";
        } else if (soA*soA == soB*soB + soC*soC) {
            ketqua = "đây là tam giác VUÔNG TẠI A !";
        } else if (soB*soB == soA*soA + soC*soC) {
            ketqua = "đây là tam giác VUÔNG TẠI B !";
        } else if (soC*soC == soB*soB + soA*soA) {
            ketqua = "đây là tam giác VUÔNG TẠI C !";
        } else {
            ketqua = "Day la TG thuong !!!";
        }
    } else {
        ketqua = "Bạn nhập cai gì vậy ?! Đây không phải là tam giác !";
    }
    
    heso = 10;
    cx = (soA*heso);
    cosB = (soA**2 + soC**2 - soB**2)/(2*soA*soC);
    sinB = Math.sqrt(1 - cosB**2);
    ax = Math.round(soC*cosB)*heso;
    ay = Math.round(soC*sinB)*heso;
    document.getElementById("DataKetQua").innerHTML 
    = ketqua
    + "<svg height='600' width='600'>"
    + "<polygon points=' 0,0  "
    + cx + ",0 "
    + ax + "," + ay + " ' "
    + "stroke='black' stroke-width='3' fill='red' />  </svg>"
    ;
}

function  TinhToan() {
    ketqua = "None";
    soA = parseFloat(document.getElementById("soA").value);
    soB = parseFloat(document.getElementById("soB").value);

    if (document.getElementById("phepcong").checked) 
        ketqua =  soA + soB;
    if (document.getElementById("pheptru").checked) 
        ketqua =  soA - soB;
    if (document.getElementById("phepnhan").checked) 
        ketqua =  soA * soB;
    if (document.getElementById("phepchia").checked) 
        ketqua =  soA / soB;
    document.getElementById("DataKetQua").innerHTML 
    = ketqua
}

