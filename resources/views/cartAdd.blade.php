<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
             th{
                background-color:white;
                
            }
            table {
                background-color:white;
                border-radius:20px;
            }
            .back{
                background-color:#62B6B7;border-radius:5px;color:white;text-decoration:none;padding:10px;
                margin-left:50px;
                margin-top:80px;
            }
            .back:hover{
                background-color:#62D6C3;border-radius:5px;color:white;text-decoration:none;padding:10px;
            }
            </style>
    </head>
<body style="background-color:#EAEAEA">
    
<a href="/Products" class="back" >Continue Shopping</a>
        
    <center><table  style="width:60%;box-shadow:5px 15px 30px grey;margin-top:120px;">
                @if(Session::has('success'))
                <span style="background-color:lightgreen;color:white;border-radius:20px;padding:2php0px; ">
                    {{Session::get('success')}}
                    </span>
                        @endif
           <tr> <th>Product Image</th>
            <th>Product name</th>
            <th>price</th>
            <th>Quantity</th>
            <th>Sub-total</th>
        </tr>
        @php $total=0;@endphp
            @if(session('cart'))
            @foreach(session('cart') as $id=>$product)
            @php  
            $sub_total=$product['price']*$product['quantity'];
            $total += $sub_total;
            @endphp
                <tr>
                <td><img src="{{asset('upload/gallery/'.$product['img'])}}"  width='200px'></td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    
                    <td>{{$sub_total}}</td>
                    <td><a href="{{route('remove',[$id])}}" class="btn btn-warning">Remove Product</a>
                </tr>
                <tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
            @endforeach
            @endif
            
            <tr><td></td><td></td><td></td><td><strong>Total: </strong></td><td><strong>{{$total}}</strong></td>
            <td>
            <a href="/buy" class="btn btn-danger">Buy Now</a> 
            </td></tr>
    </table></center>
    

</body>
</html>