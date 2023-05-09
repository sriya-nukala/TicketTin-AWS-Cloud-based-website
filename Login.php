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
}
.container{
	  background-color:#fff;
    border-radius:10px;
    box-shadow: 0 0 10px 2px rgba(100,100,100,0.1);
    width:500px;
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

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 55px;
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
label {
    float:left;
	color: #888;
	font-size: 18px;
	padding: 10px;
    margin-left:40px;
    text-align:left;
}
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
h1{
	text-align:center;
}


</style>


</head>

<body>
    <form  action ="ind_login.php" method="post">
		<h1>Welcome to TicketTin</h1>
        <div class ="container">
			<h3 >LOGIN </h3><br>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
			<div class ="inside">
				<!-- Username:<input type="text" name="uname"><br><br>
				Password:<input type="Password" name="password"><br><br> -->
                <label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
			<button type="submit" >LOGIN</button>
            <a href="Sign_in.php" class="ca">Create an account?</a>

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


 </body>

</html>

