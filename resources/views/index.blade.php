
<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

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

        <header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-4xl">
             <span class="text-blue-500">hdmd-laravel</span> laravel-exam
            </h1>

            <h2 class="inline-flex mt-2">By Jordan Cardines <img src="./images/lary-head.svg"
                                                               alt="Head of Lary the mascot"></h2>

            <p class="text-sm mt-14">
                Another year. Another update. We're refreshing the popular Laravel series with new content.
                I'm going to keep you guys up to speed with what's going on!
            </p>

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                <!--  Category -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="category" disabled selected>Category
                        </option>
                        <option value="Audio"> Audio</option>
                        <option value="Video"> Video</option>
                        <option value="Gaming"> Gaming</option>
                        <option value="Future">  Future</option>
                        <option value="PC">  PC</option>
                        <option value="Phones"> Phones</option>
                        <option value="Security"> Security</option>
                        <option value="Wearable Technology"> Wearable Technology</option>
                        <option value="Travel"> Travel</option>

                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                <!-- Other Filters -->
           

                <!-- Search -->
                <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form action="">
                        <input type="text" name="search" id="search" placeholder="Find something"
                               class="bg-transparent placeholder-black font-semibold text-sm"
                           />
                    </form>
                </div>
      
        </header>

        <div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">List of Products</h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
    @foreach ($product as $company)
    <div class="group relative">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
          <img src="{{ url($company->image) }}" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="{{ route('shop.show',  $company->slug )}}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $company->name }}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ $company->short_description }}</p>
          </div>
          <p class="text-sm font-medium text-gray-900">${{ $company->price }}</p>
        </div>
       <!-- <button class="mt-10 bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-3">
                    Add to Cart -->
</button>
      </div>

@endforeach

      <!-- More products... -->
    </div>
  </div>
</div>
{!! $product->links() !!}









        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
