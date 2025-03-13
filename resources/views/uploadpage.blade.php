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
            <th>Images</th>
            
            @foreach($allImages as $rec)
               <tr style="display:inline-block;">
               <td><img src="upload/gallery/{{$rec->img}}" height='150px' width='200px'></td>
               
                </tr>
            @endforeach
            
        </tbody>
        
            
       
    </table>
    
    
</body>
</html>
