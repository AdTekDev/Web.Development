
solan = 0;


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

