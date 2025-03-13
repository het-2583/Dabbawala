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
            
            border: 1px solid Black;
            color:Black;
  border-radius: 10px;
  padding: 15px;
  text-align: center;
  /* opacity: 0.5;  */
        } 
        </style>
</head>
<body style="background-image: url('address.png');
            background-size: 1440px 820px;">
    <div>
    <table>
        <tbody>
            <th>Address</th>
            <th>Ordered Item</th>
            @foreach($allRecords as $rec)
               <tr>
                <td>{{$rec['add']}}</td>
                    <td>{{$rec['tiffOrd']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <button type="button" class="butt" style="height:30px;background-color:black;width:60px;border-radius:5px"><a style="color:White" href="/admin">Back</a></button> -->
    </div>
</body>
</html>