<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="homepagestyle.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<header>
	
<nav>
	
	<div class="logo"> <h1 style="font-size: 20px;"> <p> {{$myData->Name}}</p>Dabbawala Tiffin Service </h1> </div>
	<div class="menu">
		<a href="/myimage">Gallery</a>
		<a href="/contactemail">Contact</a>
		<a href="/prod">Tiffins</a>
		<a href="{{url('profile/'.$myData->id)}}">Profile</a>
		
		<a href="/logout">Logout</a>
	</div>
</nav>
<center>
<div style="margin-top: 60px">
<button style="background-color:Black;border-radius:10px;height:50px;width:130px"> <a style="color:White" href="/Address">Delivery Address</a></button>
</div>
</center>
	<main>
		<section>
			<h1> <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
			


		</section>
	</main>


</header>

</body>
</html>