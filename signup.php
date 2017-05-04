<html><body>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div id="main">

<nav class="navbar navbar-default">
  <div class="container-fluid">
   
	 <div class="navbar-header">
      <a class="navbar-brand" href="#"><h1>BuddyDaily</h1></a>
   
    </div></br>
	<ul class="nav navbar-nav navbar-right">
	 <form class="form-inline" action="signup2.php" method="POST"> 
     <div class="form-group "  >
       <input type="text"class="form-control" name="lemail"  id="lemail" placeholder="Enter E-mail">
</div>
<div class="form-group "  >

    <input type="password" class="form-control"name="lpass" id="lpass" placeholder="Enter Password"></div>
	  <button type="submit" class="btn btn-default">Log In</button>
 
  </form>
  <label><a href="#">Forgotten Something?</a></label> 
  
    </ul>
  </div>
</nav>
  
<!-----<form action="signup2.php" method="POST">
<div  class="contain">
<table >
<tr>
<th>Email</th>
<th>Password</th>
</tr>
<tr>
<td><input type="text" name="lemail" ></td>
<td><input type="password"  name="lpass"></td>

<td><input type="submit"  value="Log In"></td>
</tr>
</table>
<div id="result"></div>
</div>
</form>----->


<!---<div class="container-fluid">
<div class="row">
 <div class="col-sm-3">
      
    </div>
    <div class="col-sm-9" >
      
    </div>
</div>
</div>---->
<form action="signup4.php" method="POST">
<div class="container">
	<div class="row">
	<div class="col-sm-5">
	<div class="glyphicon glyphicon-globe" id="slide"></div>
	</div>
	<div class="col-sm-7">
	<div class="jumbotron text-center">
	<h1>
	Sign-Up
	</h1>
	<p>Create An Account</p>
	</div>
  <form class="form-inline" > 
    <div class="form-group"  >

	<div class="row">
	
	<div class="col-sm-6">
	
      <input type="name" class="form-control" name="name"id="name" placeholder="First Name">
	  
	</div>
	
	<div class="col-sm-6">
	
      <input type="name" class="form-control" name="surname"id="name" placeholder="Surname">
	</div>
	
	</div>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" name="email"placeholder="Enter E-mail">
    </div>
	
    <div class="form-group">
      <input type="password" class="form-control" id="pwd"name="password" placeholder="Enter password">
    </div>
	
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" name="vpassword" placeholder="Re-enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default"data-toggle="modal" data-target="#myModal">Submit</button>
  
  </form>
  
  </div>
  </div>
</div>



<!---<div id="signup">
<input type="text" name="name" id="name" placeholder="Firstname"/>

<input type="text"  name="surname"id="name" placeholder="Surname"/>
<br/><br/>
<input type="text"  name="email" id="email" placeholder="Email Address"/>
<br/><br/>
<input type="text" name="vemail" id="email" placeholder="Re-enter Email Address"/>
<br/><br/>
<input type="password" name="password" id="email" value="dcwd"placeholder="Password"/>
<br/>
<br/>
<input type="submit"  value="Log In">
</div>---->
</form>
</div>
<head><style>
#lpass,#lemail{
width:200px;	
height:30px;
}
.jumbotron{
	background-color:#f4ca8c;

}
body{
	background-color:#fbedd8;

}
.glyphicon{ font-size: 300px;
     margin-top:150px;
	
}
#signup{
border:1px solid black;
width:30%;
height:60%;
margin-left:35%;
margin-top:7%;
}
#name{
	width:300px;
	
}
#name,#email,#pwd{
	
	height:45px;
}
th{color:white;}

#gen{margin-left:-60px;}
.contain{
	border:1px solid black;
	height:60px;
	background-color:blue;
}
body{margin:0;}
table{
	margin-left:60%;
}
#result{
	
	margin-top:-39%;
	margin-left:90%;
	color:white;
}
#slide{
	    animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  
	
}
#main{display:none;}
.panel{
	height:50px;
	
}
</style></head>

</body>
<?php
session_start();
	if(isset($_SESSION['email']))
	{echo'dddddddddddddddddddd';
	header('Location:signup3.php');
	}
//echo'im there';
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>
<script src="jquery-3.1.0.min.js"></script>
<script>

$('#main').fadeIn(700);
</script>

</html>