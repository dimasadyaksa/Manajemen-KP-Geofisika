<?php
$conn = mysqli_connect("localhost", "root", "", "sistemmkp");
function registrasi ($data){
	global $conn;
	$email = $data["email"];
	$status = strtolower($data["status"]);
	$password = $data["password"];
	$result = msqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
		alert('Username yang dipilih sudah terdaftar!');
		</script>";
		return false;
	}

	mysqli_query($conn, "INSERT INTO user VALUES ('', '$email', '$status', '$password')");
	return mysqli_affected_rows($conn);
}
function tambah($data){
		global $conn;
		$email = $data["email"];
        $status = $data["status"];
        $password = $data["password"];
        $query = "INSERT INTO user
                        VALUES
                        ('', '$email', '$status', '$password')";
        mysqli_query($conn, $query);
        return  mysqli_affected_rows($conn);
}
?>