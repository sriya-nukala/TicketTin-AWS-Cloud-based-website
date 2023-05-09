<?php 
session_start(); 
include "db_conn.php";
// echo $_SESSION['name'];
$nid= $_SESSION['user_name'];
$sql = "SELECT id FROM users WHERE user_name='$nid' ";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $bid= $row['id'];
}
// function validate($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//  }
if(isset($_POST['save'])){
 $shows = $_POST['shows'];
 $time = $_POST['time'];
 $no = $_POST['no'];

//  $user_data2 = '&shows='. $shows. '&time='. $time. '&no='.$no;
 $sql2 = "INSERT INTO bookings(id, event,time,num) VALUES('$bid', '$shows', '$time','$no')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: booking.php?success= Tickets booked successfully");
	         exit();
           }else {
	           	header("Location: booking.php?error=unknown error occurred");
		        exit();
           }}
           ?>