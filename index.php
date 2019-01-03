<?php 

	require_once 'koneksi.php';

	$type = $_GET['item_type'];

	if ($type == 'users') {
	    $query = "SELECT * FROM dataormas";
	    $result = mysqli_query($conn, $query);
	    $response = array();
	    while( $row = mysqli_fetch_assoc($result) ){
	        array_push($response, 
	        array(
	            'id'=>$row['id_ormas'], 
	            'name'=>$row['nama_organisasi'], 
	            'address'=>$row['alamat'],
	            'type'=>$row['jenis_organisasi']) 
	        );
	    }
	    echo json_encode($response);   
	}

	mysqli_close($conn);

?>