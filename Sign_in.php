<html>
	<head>
		<title>Login to Yummies</title>
		<style>
			body{
    background-color: slategrey;
    background-image: linear-gradient(315deg,#b8c6db 0%, #f5f7f7 100%);
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
	padding-top: 7px;
	padding-right: 0px;
}
.container{
	  background-color:#fff;
    border-radius:10px;
    /* box-shadow: 0 0 10px 2px rgba(100,100,100,0.1); */
    width:600px;
	height:540px;
    overflow:hidden;
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
/* button{
    background-color:orange ;
    color:black;
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
	margin-right: 80px;
	border: none;
}
button:hover{
	opacity: .7;
}
h2{
	text-align: center;
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
    margin-left:70px;
}
.ca:hover {
	text-decoration: underline;
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
		<form action ="signup_check.php" method="post">
		<div class ="container">
			<h2 >SIGN UP</h2><br>
			<div class ="inside">
			<!-- <h2>SIGN UP</h2> -->
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <!-- <label>Name</label> -->
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <!-- <label>User Name</label> -->
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<!-- <label>Password</label> -->
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <!-- <label>Re Password</label> -->
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="Login.php" class="ca">Already have an account?</a>
			<!-- <button type="submit" onclick="">SUBMIT</button> -->
</form>

			</div>
		</div>
	</body>
</html>
