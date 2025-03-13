<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<center>

                                <div class="col-md-5 col-12 ps-md-5 p-0 ">
                                   <div class="box-left"> 
                                    <p class="textmuted h8"><h2>Order Recap</h2></p>
                                     <p class="fw-bold h7"></p> 
                                     <p class="textmuted h8"></p> 
                                     <p class="textmuted h8 mb-2"></p> 
                                     <div class="h8">
                                       <div class="row m-0 border mb-3"> 
                                        <div class="col-6 h8 pe-0 ps-2"> 
                                          <p class="textmuted py-2">Items</p>
                                           <span class="d-block py-2 border-bottom">Order Total</span> 
                                           <span class="d-block py-2">Tax</span>
                                           <span class="d-block py-2">Delivery Charge</span>
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
                                                 
                                                      <div class="col-2 p-0 text-center"> 
                                                        <p class="textmuted p-2">Total</p> 
                                                        <span class="d-block py-2 border-bottom"><span class="fas fa-dollar-sign"></span>₹{{$total}}</span> 
                                                        <span class="d-block py-2"><span class="fas fa-dollar-sign"></span>₹{{$tax}}</span> 
                                                        <span class="d-block py-2"><span class="fas fa-dollar-sign"></span>₹{{$delivery}}</span> 
                                                      </div>
                                                     </div> 
                                                     <div class="d-flex h7 mb-2">
                                                       <p class="">Total Amount</p>
                                                        <p class="ms-auto"><span class="fas fa-dollar-sign"></span>₹{{$finalprice}}</p> 
                                                      </div>
                                                       
                                                       </div>
                                                        <div class="">
                                                           <!-- <p class="h7 fw-bold mb-1">Pay this Invoice</p> 
                                                           <div class="d-flex flex-row pb-3">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                      value="" aria-label="..." checked />
                  </div>
                                                           <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fab fa-cc-visa fa-lg text-primary pe-2"></i>Cash on Delivery
                      
                    </p>
                    <div class="ms-auto"></div>
                  </div>
                                                           <p class="textmuted h8 mb-2">Make payment for this invoice by filling in the details</p>
                                                            <div class="form">
                                                               <div class="row">
                                                                 <div class="col-12">
                                                                   <div class="card border-0">
                                                                     <input class="form-control ps-5" type="text" placeholder="Card number"> 
                                                                     <span class="far fa-credit-card"></span>
                                                                     </div>
                                                                     </div>
                                                                      <div class="col-6">
                                                                         <input class="form-control my-3" type="text" placeholder="MM/YY"> 
                                                                        </div> 
                                                                        <div class="col-6"> 
                                                                          <input class="form-control my-3" type="text" placeholder="cvv">
                                                                         </div>
                                                                          <p class="p-blue h8 fw-bold mb-3">MORE PAYMENT METHODS</p>
                                                                         </div> -->
                                                                         <form class="pb-3">
                <div class="d-flex flex-row pb-3">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                      value="" aria-label="..." checked />
                  </div>
                  <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fab fa-cc-visa fa-lg text-primary pe-2"></i>Cash on Delivery
                      
                    </p>
                    <div class="ms-auto"></div>
                  </div>
                </div>

                <div class="d-flex flex-row">
                  <div class="d-flex align-items-center pe-2">
                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                      value="" aria-label="..." />
                  </div>
                  <div class="rounded border d-flex w-100 p-3 align-items-center">
                    <p class="mb-0">
                      <i class="fab fa-cc-mastercard fa-lg text-dark pe-2"></i>Visa Card
                      Office
                    </p>
                    <div class="ms-auto">**** **** **** 6007</div>
                  </div>
                </div>
              </form>
                                                                          <!-- <button ><div class="btn btn-primary d-block h8"><a href="/generate-pdf" style="color:white;text-decoration:none">PAY</a><span class="fas fa-dollar-sign ms-2"></span>₹{{$finalprice}}<span class="ms-3 fas fa-arrow-right"></span></button> -->
                                                                          <button style="background-color:blue;border-radius:8px;width:90%"><a style="color:white;text-decoration:none" href="/generate-pdf">PAY ₹{{$finalprice}}</a></button>
                                                                        </div>
                                               </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

</div>
                        <center>
                        @endif
</body>
</html>







                    