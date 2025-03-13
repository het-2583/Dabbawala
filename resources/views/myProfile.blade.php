
<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background:url('/profileBack.jpeg');background-size:1440px 820px;">

<div class="height d-flex justify-content-center align-items-center" style="margin-top:300px;">

    <div class="card p-3" style="width:30%;width:30%" >
     
        
    <h4  style="font-size:20px;" >Name: {{$rec->Name}}</h4>
                <h4  style="font-size:20px;" >Phone: {{$rec->Phone}}</h4>
                <h4  style="font-size:20px;" >Email:</b>{{$rec->Email}}</h4>
        </div>
        
        
        
        
        
        
          
</div>
<br>

<div style="height:20px; margin-left:40%">
        <button style="background-color:Green"><a href="{{url('proedit/'.$rec->id)}}" class="btn"  style="width:100px">Update</a></button>
    
        <button style="background-color:Green"><a href="/dashboard" class="btn" style="width:100px">Back</a></div></button>
    </div>
    
</body>
</html>

