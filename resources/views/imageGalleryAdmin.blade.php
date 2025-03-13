<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th, td{
            
            
            border-radius: 10px;
            padding: 15px;
            text-align: center;
  
        }
        
        </style>
</head>
<body>
    <table>
        <tbody>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
            @foreach($allImages as $rec)
               <tr>
               <td><img src="upload/gallery/{{$rec->img}}" height='150px' width='200px'></td>
               <td><a href="{{url('edit/'.$rec->id)}}">Edit</a> </td>
               <td><a href="{{url('delrec/'.$rec->id)}}">Delete</a></td>
                </tr>
            @endforeach
            <tr>
                <td>{{$allImages->links()}}</td>
            </tr>
        </tbody>
        
            
       
    </table>
    
    
</body>
</html>
