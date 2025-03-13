<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<form action="{{url('update/'.$rec->id )}}"  method="post">
@csrf
<div class="d-flex flex-row align-items-center mb-4">
    
                    <!-- <div class="form-outline flex-fill mb-0">
                      <input type="hidden" id="name" name="id" class="form-control" :value="$myData->id" />
                      <label class="form-label" for="form3Example3c">Id</label>
                    </div>
                  </div> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="Name" name="Name" class="form-control" value="{{$rec->Name}}"/>
                      <label class="form-label" for="form3Example3c">Name</label>
                    </div>
                  </div>
                  <div class="form-outline flex-fill mb-0">
                      <input type="text" id="Phone" name="Phone" class="form-control" value="{{$rec->Phone}}"/>
                      <label class="form-label" for="form3Example3c">Phone</label>
                    </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="Email" name="Email" class="form-control" value="{{$rec->Email}}"/>
                      <label class="form-label" for="form3Example4c">Email</label>
                    </div>
                  </div>
                  
                 
                  <button type="submit">Update</button>
</form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html>