<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
</style>

</head>
    <body style="background-color:lightyellow">
    <div class="gallery">
        <center>
        <div class="content" style="margin-top:10%">
        <img src="{{ asset('upload/gallery/'.$rec->img)}}" height='200px' border-radius='60px' width='200px'> 
        
        <h2 class="text-uppercase" >{{$rec->name}}</h2>
        <h2 class="text-uppercase mb-0" style="color:Green;"><b>Price:</b>₹{{$rec->price}}</h2>
        
        <button class="buy-1" style="background-color:Blue"><a  href="{{url('addTocart/'.$rec->id)}}" style="color:White" >Add-To-Cart</a></button><br>
        <button class="buy-1" style="background-color:Blue"><a  href="/prod" style="color:White">Back</a></button>

       
        <!-- <button class="buy-1">Add to Cart</button>   -->
</div>
</center>
</div>
</body>
</html>