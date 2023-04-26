<?php 

function connectDB() {
    $server = "localhost";
    $dbUsername = "db01";
    $dbPassword = "Nh[gwIHsa[8W0rNQ";
    $dbName = "web_phone";
    // Kết nối
    $dbconnect = mysqli_connect( $server , 
        $dbUsername , $dbPassword);
    mysqli_select_db( $dbconnect,  $dbName);

    return $dbconnect;
}

?>


