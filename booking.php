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
    margin-top:30px;
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
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	/* text-decoration: none; */
    text-align:left;
	color: #444;
    /* margin-left:auto; */
    /* align:left; */
    float:left;
    margin-left:40px;
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
.quantity {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  margin top:10px;
}
.quantity__minus,
.quantity__plus {
  display: block;
  width: 22px;
  height: 23px;
  margin: 0;
  background: #dee0ee;
  text-decoration: none;
  text-align: center;
  line-height: 23px;
}
.quantity__minus:hover,
.quantity__plus:hover {
  background: #575b71;
  color: #fff;
} 
.quantity__minus {
  border-radius: 3px 0 0 3px;
  margin-left: 20px;
}
.quantity__plus {
  border-radius: 0 3px 3px 0;
}
.quantity__input {
  width: 32px;
  height: 19px;
  margin: 0;
  padding: 0;
  text-align: center;
  border-top: 2px solid #dee0ee;
  border-bottom: 2px solid #dee0ee;
  border-left: 1px solid #dee0ee;
  border-right: 2px solid #dee0ee;
  background: #fff;
  color: #8184a1;
}
.quantity__minus:link,
.quantity__plus:link {
  color: #8184a1;
} 
.quantity__minus:visited,
.quantity__plus:visited {
  color: #fff;
}
#num{
    margin-left:2px;
    margin-right:2px;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

</style>


</head>

<body>
   <div class="grid">
    <div class = "o">
    <button type="submit"  class="nb" onclick="window.location.href = 'booking.php';">Book Tickets</button><br>
    <button type="submit" class="nb" onclick="window.location.href = 'viewticket.php';">View Tickets</button><br>
    <button type="submit" class="nb" onclick="window.location.href = 'cancel_tickets.php';">Cancel Tickets</button><br>
    <button type="submit"  class="nb" onclick="window.location.href = 'practice.php';">HOME</button><br>
    <button type="submit"  class="nb" onclick="window.location.href = 'Logout.php';">Logout</button><br>
    
            
    </div>
   <div class="f">
         <form  action ="ind_book.php" method="POST" class="form">
        <div class ="container">
            <div class="inside">
                
			<h3 >Book Tickets</h3><br>
           
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
			
				<!-- Username:<input type="text" name="uname"><br><br>
				Password:<input type="Password" name="password"><br><br> -->
                <label  >Choose a Show:</label>

                <select name="shows" id="shows">
                <option value="">--select--</option>
                <option value="Proshows">Proshows</option>
                <option value="Stand-Up comedy">Stand-Up comedy</option>
                <option value="Garba Nights">Garba Nights</option>
                <option value="Singing Shows">Singing Shows</option>
                <option value="Stage Dramas">Stage Dramas</option>
                <option value="Dance Shows">Dance Shows</option>
                </select>
<br>

<label >Choose Time:</label>
<select name="time" id="time" >
                <option value="">--select--</option>
                <option value="11:00AM">11:00AM</option>
                <option value="3:00PM">3:00PM</option>
                <option value="6:00PM">6:00PM</option>
                <option value="9:00PM">9:00PM</option>
                <!-- <option value="Stage Dramas">Stage Dramas</option>
                <option value="Dance Shows">Dance Shows</option> -->
                </select>
<br>
<div class="con">
<!--   
  <h1>Increment/decrement counter</h1>
  <h4>on CSS and JS</h4> -->
 
  <div class="quantity">
  <label >No. of Tickets:</label>
    <!-- <a href="#" class="quantity__minus" id="m" ><span>-</span></a> -->
    <!-- <input name="quantity" type="text" class="quantity__input" value=1 id= "num"> -->
    <div >
      <input type="number" name="no" id="num"/>
    </div>
    <!-- <a href="#" class="quantity__plus" id="p"><span>+</span></a> -->
  </div>
  
</div>
<button type="submit" class="ob" name= "save">BOOK</button>

     	<!-- <label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
			<button type="submit" >LOGIN</button>
            <a href="Sign_in.php" class="ca">Create an account?</a> -->

			</div>
		</div>
    </div>
            </div>
</form>
<!-- <form action="ind_login.php" method="post">
     	<h2>LOGIN</h2>
     	
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="Sign_in.php" class="ca">Create an account</a>
     </form>
 -->

 <script src="inc.js"></script>

 </body>

</html>


