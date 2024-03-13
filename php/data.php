<?php

    require_once('helper.php');

    $query = "SELECT * FROM barang";
    $sql = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array ();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result, array(
                'id' => $row['id'],
                'barang' => $row['barang'],

            ));
        }
        echo json_encode(array('barang' =>$result));
    }
