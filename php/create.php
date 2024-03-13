<?php 

    require_once('helper.php');


    $barang = $_POST['barang'];

    $query = "INSERT INTO barang(barang) VALUES ('$barang')";
    $sql = mysqli_query($db_connect, $query);


    if ($sql) {
        echo json_encode ( array( 'message' => 'created!') );
    } else {
        echo json_encode ( array('message' => 'error') );
    }

?>

