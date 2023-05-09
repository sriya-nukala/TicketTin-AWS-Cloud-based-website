<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>



<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">




<title>Document</title>
<style>
			body{
    background-color: #F1F6F5;
    background-image: linear-gradient(315deg,#F1F6F5);
    font-family: 'Poppins' ,sans-serif;
    display:flex;
    align-items:center;
    justify-content: center;
    height: 100vh;
    overflow: hidden;
    margin: 0;
}
.inside{
	align-content: center;
	/*background-color:blue;*/
	padding-top: 10px;
	padding-right: 0px;
    margin-top:50px;
}
.container{
    float:center;
	  background-color:#fff;
    border-radius:10px;
    box-shadow: 0 0 10px 2px rgba(100,100,100,0.1);
    width:600px;
    height:500px;
    overflow:hidden;
    text-align: center;

}
/* button{
    background-color:black;
    color:white;
    opacity: 0.8;
    border:none;
    display:block;
    width:100%;
    cursor:pointer;
    font-size: 1.1rem;
    font-family: inherit;
    padding:1.3rem;
} */

.ob {
	float: center;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 55px;
    margin-top:80px;
	border: none;
}
button:hover{
	opacity: .7;
}
h2{
	text-align: center;
}
input {
	display: block;
	border: 2px solid #ccc;
	width: 75%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
/* label {
    float:left;
	color: #888;
	font-size: 18px;
	padding: 10px;
    margin-left:40px;
    text-align:left;
} */

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.ca {
	font-size: 20px;
	display: inline-block;
	padding: 10px;
	/* text-decoration: none; */
    text-align:left;
	color: blue;
    /* margin-left:auto; */
    /* align:left; */
    float:center;
    /* margin-left:40px; */
    margin-top:20px;
}
.ca:hover {
	text-decoration: underline;
} 
.form{
    float:left;
}
.grid{
    height: 90vh;
    width: 90vw;
    display:grid;
    grid-template-columns:1fr 2fr;
}
.nb{
    width:200px;
    height: 40px;
    float: center;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	/* margin-right: 55px; */
    margin-left:50px;
    margin-top:50px;
	border: none;
font-size:20px
 } 
#shows{
    width:180px;
    height: 30px;
}
#time{
    margin-top:20px;
    width:180px;
    height: 30px;
}



.con{
  display: flex;
  /* width: 100%;
  height: 100vh; */
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top:40px;
}

</style>


</head>

<body>
   <div class="grid">
    <div class = "o">
    <button type="submit"  class="nb" onclick="window.location.href = 'booking.php';">Book Tickets</button><br>
    <button type="submit" class="nb" onclick="window.location.href = 'viewticket.php';">View Tickets</button><br>
    <button type="submit" class="nb" onclick="window.location.href = 'cancel_tickets.php';" >Cancel Tickets</button><br>
    <button type="submit"  class="nb" onclick="window.location.href = 'practice.php';">HOME</button><br>
    <button type="submit"  class="nb" onclick="window.location.href = 'Logout.php';">Logout</button><br>
            
    </div>
   <div class="f">
         <form  action ="" method="POST" class="form">
        <div class ="container">
            <div class="inside">

                
			<h3 >View Bookings</h3><br>
             
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
$query = "DELETE FROM bookings  WHERE id='$bid'";
  
// FETCHING DATA FROM DATABASE
$result2 =mysqli_query($conn,$query);

 echo "Your bookings are cancelled successfully<br>";
?>


<a href="booking.php" class="ca">Book your tickets now!</a>
			




			</div>
            <!-- <button type="submit"  onclick="window.location.href = 'booking.php';" class="ob" >Book Your Tickets</button> -->
		</div>
    </div>
        
</form>


 

 </body>

</html>


