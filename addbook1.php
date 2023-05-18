<html>
<Head>
<link rel="stylesheet" type="text/css" href="Home1.css">
	<Title>  HookaBook / Add book  </Title>
	<header id="header">
		<div class="logo">
			<img id="header-img" src="C:\Users\TRIVIKRAM MR\OneDrive\Desktop\logo.png.jpg"" alt="HookaBook Logo" />
		</div>

		<nav id="nav-bar">
							
				<a class="nav-link" href="#features"><i><b>Connecting renters and sharers</b></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a class="nav-link" href="Home1.php">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
		
				<a class="nav-link" href="SignOut.php">Sign Out</a>
			
		</nav>
	</header>
</Head>
<style>
#btn {
	width: 100px;

  height: 40px;
  font-size: 0.85em;
  font-weight: 400;
  text-transform: uppercase;
  
  padding: 8px;
border-radius: 15px 50px;
  background: green;
  cursor: pointer;
	color:white;
}
#btn:hover {
  background-color: yellowgreen;
  transition: background-color 1s;
}
h2{
	padding-bottom:8px;
	color:green;
}
#header{
		width:100%;
		height:110px;
		
		
	}
	body {
		width: 100%;
		height: 100%;
		
		font-size: 13px;
		text-align: center;
		background: cornsilk;
	}
	h1{
	padding-top:100px;
	align:center;
	padding-bottom:2px;
	}
	a:hover{color:white;}
	a{color:green;}
	footer {
  margin-top: 30px;
  background-color:#127234;
  padding: 10px;
	color:white;
	position:fixed;
	bottom:0px;
	width:95%;
	margin-left:15px;
	align:center;
}

td:hover{
background-color:yellowgreen;

}
table{
	border: 2px solid black;
	border-radius:15px 45px;
	width:30%;
	text-align:center;
padding:15px;
}
tr{
	
	width:20%;
	
	text-align:center;
padding:10px;
}

td{
	
	width:20%;
	
	text-align:center;
padding:10px;
}
</style>
<Body>

	<h1><center>Welcome to hook a book </center></h1>
	
	<form action="addbook2.php" method="POST">
     <center>
	 <h2><b>Enter details for the new crop:</b></h2> 
			 <table>
			 
			 
			 <tr>
			 <td><b>Book Name:</b></td>
			 <td><b><input type="text"  placeholder="" required="required" name="prod_name" id='prod_name' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b></td>
			 </tr>
			 
			 
			 
			 <tr>
			 <td><b>Rent Price:</b></td>
			 <td><b><input  type="number" min="0" max="500" placeholder="" min='1' required="required" name="rate" id='rate' value="" size="15" onblur="FormValidation2()"/><div id="div2"></div></b></td>
			 </tr>
			 
			 <tr>
			 <td><b>Genre:</b></td>
			 <td><b><select name="Genre" required="required"  value="">
            
                     <option>Romance</option>
                     <option>Action</option>
                     <option>Thriller</option>
                     <option>Suspense</option>
                     <option>Engg</option>
                     <option>medical</option>
                     <option>Competitive exams</option>
                     </select><div id="div1"></div></b>
                     </select><div id="div1"></div></b>
			 </td>
			 </tr>
			 </table><br>
             <input type="submit" value="SUBMIT" name="sbmt" id="btn"/><br>
			
    <br/>
	</form>
</Body>
</html>
<footer>
			<ul>
				<li><a id="footlinks">Contact Us: Phone - +8478574697 </a></li>

				<li><a id ="footlinks"> Email - djsd@bnmit.in</a></li>
			</ul>
			<span>HookaBook Copyright 2023</span>
		</footer>
