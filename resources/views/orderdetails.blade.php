<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
  rel="stylesheet"
/>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <!--<img src="./images/logo.svg" alt="Laracasts Logo" width="165" height="16">-->
                </a>
            </div>

         
   

            <div class="bg-gray-100 font-sans w-full  m-0">
	<div class="bg-white shadow">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between py-4">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-purple-600" viewBox="0 0 24 24">
            <path fill="currentColor" d="M14.5,16 C14.2238576,16 14,15.7761424 14,15.5 L14,9.5 C14,9.22385763 14.2238576,9 14.5,9 L16,9 C17.1045695,9 18,9.8954305 18,11 C18,11.4116588 17.8756286,11.7942691 17.6624114,12.1123052 C18.4414283,12.3856578 19,13.1275982 19,14 C19,15.1045695 18.1045695,16 17,16 L14.5,16 Z M15,15 L17,15 C17.5522847,15 18,14.5522847 18,14 C18,13.4477153 17.5522847,13 17,13 L15,13 L15,15 Z M15,12 L16,12 C16.5522847,12 17,11.5522847 17,11 C17,10.4477153 16.5522847,10 16,10 L15,10 L15,12 Z M12.9499909,4 L19.5,4 C20.8807119,4 22,5.11928813 22,6.5 L22,19.5 C22,20.8807119 20.8807119,22 19.5,22 L13.5,22 C12.2700325,22 11.2475211,21.1117749 11.0389093,19.9417682 C10.8653433,19.9799013 10.6850188,20 10.5,20 L4.5,20 C3.11928813,20 2,18.8807119 2,17.5 L2,4.5 C2,3.11928813 3.11928813,2 4.5,2 L10.5,2 C11.709479,2 12.7183558,2.85887984 12.9499909,4 Z M13,5 L13,17.5 C13,18.3179089 12.6072234,19.0440799 12,19.5001831 C12.0000989,20.3285261 12.6716339,21 13.5,21 L19.5,21 C20.3284271,21 21,20.3284271 21,19.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L13,5 Z M8.56005566,11.4964303 C8.54036595,11.4987873 8.52032459,11.5 8.5,11.5 L6.5,11.5 C6.47967541,11.5 6.45963405,11.4987873 6.43994434,11.4964303 L5.96423835,12.6856953 C5.86168164,12.9420871 5.57069642,13.066795 5.31430466,12.9642383 C5.0579129,12.8616816 4.93320495,12.5706964 5.03576165,12.3143047 L7.03576165,7.31430466 C7.20339081,6.89523178 7.79660919,6.89523178 7.96423835,7.31430466 L9.96423835,12.3143047 C10.066795,12.5706964 9.9420871,12.8616816 9.68569534,12.9642383 C9.42930358,13.066795 9.13831836,12.9420871 9.03576165,12.6856953 L8.56005566,11.4964303 Z M8.16148352,10.5 L7.5,8.8462912 L6.83851648,10.5 L8.16148352,10.5 Z M10.5,3 L4.5,3 C3.67157288,3 3,3.67157288 3,4.5 L3,17.5 C3,18.3284271 3.67157288,19 4.5,19 L10.5,19 C11.3284271,19 12,18.3284271 12,17.5 L12,4.5 C12,3.67157288 11.3284271,3 10.5,3 Z M6.5,18 C6.22385763,18 6,17.7761424 6,17.5 C6,17.2238576 6.22385763,17 6.5,17 L8.5,17 C8.77614237,17 9,17.2238576 9,17.5 C9,17.7761424 8.77614237,18 8.5,18 L6.5,18 Z M15.5,20 C15.2238576,20 15,19.7761424 15,19.5 C15,19.2238576 15.2238576,19 15.5,19 L17.5,19 C17.7761424,19 18,19.2238576 18,19.5 C18,19.7761424 17.7761424,20 17.5,20 L15.5,20 Z"/>
          </svg>
        </div>

        <div class="hidden sm:flex sm:items-center">
          <a href="/" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Home</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">About</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Blog</a>
        </div>

        <div class="hidden sm:flex sm:items-center">
          <a href="{{ route('login') }}" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>
          <a href="{{ route('register') }}" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
          <a href="{{ route('cart.list') }}" class="flex items-center mr-5 ml-5">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                           <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        {{ Cart::getTotalQuantity()}}
                     </a>
        </div>

        <div class="sm:hidden cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z"/>
          </svg>
        </div>
      </div>
      
      <div class="block sm:hidden bg-white border-t-2 py-2">
        <div class="flex flex-col">
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Products</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Marketplace</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Partners</a>
          <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Pricing</a>
          <div class="flex justify-between items-center border-t-2 pt-2">
            <a href="{{ route('login') }}" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>
            <a href="{{ route('register') }}" class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
         
        </nav>


        <section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">
          <div class="card-header px-4 py-5">
            <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">Jordan</span>!</h5>
          </div>
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
              <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
            </div>
            @foreach ($cartItems as $item)
            <div class="card shadow-0 border mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp" class="img-fluid" alt="Phone">
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">{{ $item->name }}</p>
                  </div>
                  
                  
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Qty: {{ $item->quantity }}</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">{{ $item->price }}</p>
                  </div>
                </div>
                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <div class="col-md-2">
                    <p class="text-muted mb-0 small">Track Order</p>
                  </div>
                  <div class="col-md-10">
                    <div class="progress" style="height: 6px; border-radius: 16px;">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 65%; border-radius: 16px; background-color: #a8729a;"
                        aria-valuenow="65"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <div class="d-flex justify-content-around mb-1">
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         @endforeach

            <div class="d-flex justify-content-between pt-2">
              <p class="fw-bold mb-0">Order Details</p>
              <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> ${{ Cart::getTotal() }}</p>
            </div>

            <div class="d-flex justify-content-between pt-2">
              <p class="text-muted mb-0">Invoice Number : 788152</p>
             
            </div>

            <div class="d-flex justify-content-between">
              <p class="text-muted mb-0">Invoice Date : 22 Dec,2019</p>
            
            </div>

            <div class="d-flex justify-content-between mb-5">
              <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
           
            </div>
          </div>
          <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
          <a href="/" type="button" class="btn text-white" >Ok</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
