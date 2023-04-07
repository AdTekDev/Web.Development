
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
    

    document.getElementById("DataKetQua").innerHTML 
    = ketqua
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

