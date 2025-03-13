 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        p{
            font-size:20px;
            font-family:arial;
            color:grey;
        }
        .border{
            border: 1px solid #ddd;
            width: 50%;
            margin-left:25%;
            margin-top:35%;
            padding: 15px;
        }
        #border{
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
        }
        
        
    </style>
</head>
<body>
    
       
        <div class="rounded d-flex flex-column p-2" style="background-color: #f8f9fa;">
              <div class="p-2 me-3">
                <h4>Order Recap</h4>
              </div>
              @php $total=0;@endphp
            @if(session('cart'))
            @foreach(session('cart') as $id=>$product)
            @php  
            $sub_total=$product['price']*$product['quantity'];
            $total += $sub_total;
            $tax = $sub_total*0.05;
            $delivery =0;
            $finalprice = $total+$tax+$delivery;
            @endphp
            @endforeach
              <div class="p-2 d-flex">
                <div class="col-8">Order Total:</div>
                <div class="ms-auto">₹{{$total}}</div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Tax:</div>
                <div class="ms-auto">₹{{$tax}}</div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Dilevery Charge:</div>
                <div class="ms-auto">₹{{$delivery}}</div>
              </div>
              
                <div class="col-8"><b>Pateble Amount:</b></div>
                <div class="ms-auto"><b class="text-success">₹{{$finalprice}}</b></div>
              </div>
            </div>
            
            
            
          </div>
          @endif
</body>
</html>