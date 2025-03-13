<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body{
        background-image:url('/productback3.jpeg');
        background-size: 1440px 820px;
    }
    </style>
</head>
<body>
<table >
        <tbody>
            <tr >
                <th style="color:#29AB87"><h2>Products</h2></th>
            </tr>
            @foreach($allImages as $rec)
            <tr style="display:inline-block;">    
                    <td ></div><a href="{{url('des/'.$rec->id)}}" class="btn" ><img src="upload/gallery/{{$rec->img}}" height='240px' width='240px' style="border-radius:20px;"></a>
                    <p class="pname" style="color:#29AB87">{{$rec['name']}}</p></div>
                    <p class="pname" style="color:#29AB87">₹{{$rec['price']}}</p></div> </td>
                    
            </tr>    
            @endforeach
            
        </tbody>
    </table>
</body>
</html>
