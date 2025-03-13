



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
 tr,td {
  
  background-color:white;
}
table{
  border: spacing 20px;
  border: 5px solid grey; 
}

  </style>
</head>
<body style="background-color:grey">

  

       
          <center><h3 class="fw-normal mb-0 text-black">Shopping Cart</h3></center>

          
          @if(Session::has('success'))
          {{Session::get('success')}}
          @endif

              @php $total=0;@endphp
              @if(session('cart'))
              @foreach(session('cart') as $id=>$product)
              @php  
              $sub_total = floatval($product['price']) * intval($product['quantity']);
              $total += $sub_total;
              @endphp


            <table>
              
            <tr style="display:inline-block;margin-left:200px">
              
              <td style="width:180px"><img src="{{asset('upload/gallery/'.$product['img'])}}" height='120px' width='150px'></td>
              <td style="width:180px">{{$product['name']}}</td>
              <td style="width:180px">{{$product['quantity']}}</td>
              <td style="width:180px">{{$product['price']}}</td>
              <td style="width:180px"><button type="button" class="btn btn-warning"><a href="{{route('remove',[$id])}}" >REMOVE PRODUCT</a></button></td>
  

</tr>
</table>
              

              


        @endforeach
            @endif
            <center><h4>TOTAL:{{$total}}</h4></center>
        <div class="card">
          <div class="card-body">
          
          <button type="button" class="btn btn-warning btn-block btn-lg"><a href="/prod" >Continue Shopping</a> </button>
            <button type="button" class="btn btn-warning btn-block btn-lg"><a href="/buy"  >Proceed to Pay</a> </button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
    
</body>
</html>
