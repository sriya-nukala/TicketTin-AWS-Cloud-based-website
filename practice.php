<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<html>
	<head><title>
		TicketTin
	</title>
<link rel="stylesheet" href="practice.css">
<style>
	.b{
			
			float: center;
			background: #262A56;
			padding: 10px 15px;
			color: #fff;
			margin-top:50px;
			font-size:25px;
			/* margin */
			width:300px;
			height: 80px;
			/* padding-top: 1000px; */
			border-radius: 8px;
			/* margin-right: 55px; */
			border: none;
		
		
	}
	.b:hover{
		opacity: .7;
	}
	</style>
</head>
	<body>
	<div class="background">
		<nav>
			<a class="active" style="margin-left: 15px; float: left"><img src="ticket.png" width="50px"></a>
		<ul>
		    <li><a href="Logout.php">Logout</a></li>

		    <li><a href="yummies contact.html">Contact</a></li>

			<li><a href="Sign_in.php">Sign up</a></li>
         
            <li><a href="Login.php">Login</a></li>
			



		</ul>
	</nav>
		
	<div class="font" style="text-align:center;">
	<h1 style="padding-top: 150px;color: azure;">TicketTin</h1>
	<!-- <marquee width="100%" direction="left">
		
	<P> We are here to serve you hot</P></marquee> -->
	<button  class="b" onclick="window.location.href = 'booking.php';">Book your Tickets</button>
</div>
 		<!-- <input type="text" placeholder="search for restaurant,cuisine and dish.." width="100%"> -->
		</div>
		<div class="layout">
			<p style="	font-family: serif;
        	font-size: 70px;
        	color: black;">Events for You</p>
			<!-- <h2>Explore curated lists of cuisine ,foods and street foods of your choice!!</h2> -->
	<div class="gallery">
		
			<img src ="https://i.pinimg.com/564x/a8/8b/9a/a88b9ae22e2bc04ca221a2a15ae1447b.jpg"><br>
			
			<a href="proshow.html"><b>Pro Shows</b></a>

		</div>
		<div class="gallery" style="margin-right: 100px;">
			<img src ="https://i.pinimg.com/564x/28/dc/a6/28dca60ef3bbf27f82d3b77578fc7c29.jpg">
			
			<a href="Comedy.html"><b>Stand-Up Comedy</b></a>
		</div>
		
		<div class="gallery" >
			<img src ="https://i.pinimg.com/474x/e7/b2/1d/e7b21d536460a686589c6bc4a3c6f874.jpg">
			
			<a href="garba.html"><b>    Garba Nights</b></a>
		</div>
		<div class="gallery" style="margin-right: 300px;">
			<img src ="https://i.pinimg.com/474x/15/75/6f/15756f526e679813ed2ddd5d36e524a3.jpg">
			
			<a href="Stage_drama.html"><b>Stage Dramas</b>
		</div>
		 <!-- <p style="	font-family: serif;
        	font-size: 70px;
        	
        	color: black;">Restaurants</p>
			<h2>Explore curated lists of top restaurants, cafes, pubs, and bars in  your city, based on trends</h2> -->
					<div class="gallery">
			<img src ="https://i.pinimg.com/474x/fa/d5/b1/fad5b19454b873c7495c465483e5d46f.jpg">
			
			<a href="Dancing.html"><b>Dance Shows</b></a>

		</div>
		<div class="gallery" style="margin-right: 300px;">
			<img src ="https://i.pinimg.com/474x/83/aa/13/83aa132baa183c557cbcb904ea588ae3.jpg">
			
			<a href="singing.html"><b>Singing Shows</b></a>
		</div>
		
		<!-- <div class="gallery">
			<img src ="https://cdn.pixabay.com/photo/2019/04/07/18/58/insect-hotel-4110513_1280.jpg">
			
		<b>Keens Steakhouse</b>
		</div>
		<div class="gallery" style="margin-right: 300px;">
			<img src ="https://image.shutterstock.com/image-photo/chhatru-himachal-pradesh-india-july-600w-1125124649.jpg">
			
			<b>Sardar ji da Dhaba</b>
		</div> -->
			

		</div>

		<!-- <div class="new" style="background: #CFFFDC;max-width: 1200px;
        	margin:auto;
        	padding-top: 20px;
        
        	overflow:auto;
        	padding-left: 50px;
        	align-content: center;">
		<div class="grid-item"><img src="https://images.pexels.com/photos/7110149/pexels-photo-7110149.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></div>
            <div class="grid-item">2</div>
            <table style="align-: center;">
    <tr>
    <td rowspan="5"><img src="https://images.pexels.com/photos/7110149/pexels-photo-7110149.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></td>
    <td style="padding-left: 50px;"><h1 style="font-size: 40px;"><b>Get the YUMMIES App</b></h1></td></tr>
   	<tr>
    <td style="padding-left: 50px;"><h2>We will send you a link, open it on your phone to download the app<h2></td></tr>
   <tr> <td > <label for="email" style="align">Enter your email:</label>
                                         <input type="email" name="email">
                                         <button>submit</button></td></tr>
     <td style="padding-left: 50px;">we are here ho serve u hot </td></tr>
   <tr> <td style="padding-left: 50px;">we are here ho serve u hot </td></tr>
</table></div> -->
<div class="info" style="background-color: #819a9d;">
	<p style="font-family:monospace;
        	font-size: 50px;

        	
        	color: black;padding-left: 30px"><b>To host events contact us.....<b></p>
			<br>
			<p style="font-size: 25px;"><b>Email: </b>2003sneha2003@gmail.com</p>
			<p style="font-size: 25px;"><b>Contact number: </b>8010031886</p>

</div>
		

	</body>
</html>
<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>