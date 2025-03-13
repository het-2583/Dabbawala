<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            place-items: center;
            
        
        }

        table{
            margin-top:150px ;
        }

        table th, td{
            
            border: 1px solid white;
            color:White;
  border-radius: 10px;
  padding: 15px;
  text-align: center;
  /* opacity: 0.5;  */
        } 
        </style>
</head>
<body style="background-image: url('viewback.jpeg');
            background-size: 1440px 820px;">
    <div>
    <table>
        <tbody>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Pwd</th>
            <th>Edit</th>
            <th>Delete</th>
            @foreach($allRecords as $rec)
               <tr>
                <td>{{$rec['Name']}}</td>
                    <td>{{$rec['Phone']}}</td>
                    <td>{{$rec['Email']}}</td>
                    <td>{{$rec['Pwd']}}</td>
                    <td><a href="{{url('edit/'.$rec->id)}}">Edit</a> </td>
                    <td><a href="{{url('delrec/'.$rec->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>