<?php
	
	$conn = mysqli_connect("localhost","root","","shopbanquanao") or die("loi");
	mysqli_set_charset($conn, 'UTF8');

	$id = $_GET['id'];

	$sql = " DELETE FROM user WHERE idUser= $id ";

	if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Xóa thành công")</script>';
	} else {
	    echo "Xóa thất bại: " . mysqli_error($conn);
	}
	#echo'<script>alert("'.$sql.'")</script>';
	echo "<script>window.location='index.php?xem=khachhang&id=1'</script>";
?>