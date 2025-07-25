<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="addressStyle.css">
</head>
<body> 
    
<div>
                            @if(Session::has('success'))
                            <div class="alert alert success">
                                {{Session('success')}}
                            </div>
                            @endif
                        </div>
    <div class="container">
        <div class="myCard">
            <!-- <div class="row"> -->
                <!-- <div class="col-md-6"> -->
                    <div class="myLeftCtn"> 
                       
                        <form class="myForm text-center" action="/store"  method="post" >
                            @csrf
                            <header>Address Bar</header>
                            

                            <div class="form-group">
                                <!-- <i class="fas fa-envelope"></i> -->
                                <input class="myInput" placeholder="Address" type="text" name="add" id="add" required> 
                            </div>

                            <div class="form-group">
                                <!-- <i class="fas fa-lock"></i> -->
                                <input class="myInput" type="text" name="tiffOrd" id="tiffOrd" placeholder="Tiffin Ordered" required> 
                            </div>

                           

                            <button type="submit" class="butt" >Send</button>
                            <br>
                            <br>
                             <a href="/prod">Not Ordered ?? Order Here</a>
                            
                        </form>
                    </div> 
                <!-- </div>  -->
            <!-- </div> -->
        </div>
</div>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>