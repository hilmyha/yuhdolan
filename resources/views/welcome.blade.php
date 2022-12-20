@extends('components.layout')

@section('container')
  {{-- wrapper --}}
  <section class="wrapper">
    <div class="owl-carousel owl-theme owl-loaded">
      @foreach ($kotas as $kota)
        <div class="item">
          <div class="carousel-textarea">
            <div class="text">
              <h3 class="font-bold text-5xl">Hello {{ $kota->name }}</h3>
              <p>{{ $kota->description }}</p>
            </div>
          </div>
          <img src="http://source.unsplash.com/1920x1080?{{ $kota->name }}" alt="">
        </div>
      @endforeach
    </div>
    
    <div class="owl-dots">
      <!-- <button type="button" class="owl-dot"><span></span></button>
      <button type="button" class="owl-dot"><span></span></button>
      <button type="button" class="owl-dot"><span></span></button> -->
    </div>
    
  </section>
  
  {{-- feature --}}
  <section class="bg-white">
    <div class="py-24 px-4 container border">
      <div class="max-w-screen-md mb-8 lg:mb-16">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Designed for business teams like yours</h2>
        <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
    </div>
    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Finance</h3>
            <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
        </div>
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Enterprise Design</h3>
            <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
        </div>
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Operations</h3>
            <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable, iterative, and structured workflows built for all efficient teams and individual.</p>
        </div>
    </div>
    </div>
  </section>

  {{-- destinasi --}}
  <section class="bg-white">
    <div class="py-24 px-4 container border">
      
      <div class="pb-10">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Top Destination</h2>
        <p class="font-light text-gray-500 sm:text-xl">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
      </div>
    
      <div class="grid gap-8 xl:grid-cols-3 lg:grid-cols-2">     
        @foreach ($wisatas as $wisata)
          <article class="card">
            <div class="p-5">
              <div class="img-card">
                <img class="rounded-lg" src="http://source.unsplash.com/1920x1080?{{ $wisata->kota->name }}" alt="" />
              </div>
              <div class="flex justify-between items-center mb-5 text-gray-500">
                <span class="bg-teal-100 text-teal-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                    {{ $wisata->kota->name }}
                </span>
                <span class="text-sm">{{ $wisata->created_at->diffForHumans() }}</span>
              </div>
              <a href="/wisata/{{ $wisata->slug }}">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 hover:underline">{{ $wisata->title }}</h5>
              </a>
              <p class="mb-4 font-normal text-gray-700">{{ $wisata->excerpt }}</p>
            </div>
          </article>
        @endforeach 
      </div>
      {{-- <div class="pt-10 text-end">
        <a href="#" class="px-3 py-2 text-sm font-medium text-center text-white bg-yellow-300 rounded-lg hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-teal-300">View more</a>
      </div> --}}
      {{-- <div class="pt-6">
        {{ $wisatas->links() }}
      </div> --}}
      
    
    </div>
  </section>
  
  {{-- hidden gems --}}
  <section class="bg-white">
    <div class="py-24 px-4 container border">
      <div class="pb-10">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Hidden Gems</h2>
        <p class="font-light text-gray-500 sm:text-xl">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
      </div>
      
      <div class="grid gap-8 grid-cols-1 xl:grid-cols-4 lg:grid-cols-2">
        @if ($blogs->count())
          <a class="lg:col-span-2" href="/blog/{{ $blogs[0]->slug }}">
            <div class="card-image ">
              <img src="http://source.unsplash.com/1920x1080?{{ $blogs[0]->title }}" alt="">
                
                <div class="image-child">
                  <div class="image-textarea">
                    
                    <span class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $blogs[0]->title }}</span>
                    <p>{{ $blogs[0]->excerpt }}</p>
                    
                  </div>
                </div>
              
            </div>
          </a>
          
            @foreach ($blogs->skip(1) as $blog)
            <a href="/blog/{{ $blog->slug }}">
              <div class="card-image">
                <img src="http://source.unsplash.com/1920x1080?{{ $blog->title }}" alt="">
                
                <div class="image-child">
                  <div class="image-textarea">
                    
                    <span class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $blog->title }}</span>
                    <p>{{ $blog->excerpt }}</p>
                    
                  </div>
                </div>
              
              </div>
            </a>
            @endforeach 
          @else
          
          @endif 
          
        </div>
      </div>
    </section>
    
    {{-- post by city --}}
    <section class="bg-white">
      <div class="py-24 px-4 container border">
        
        <div class="pb-10">
          <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Destination by City</h2>
          <p class="font-light text-gray-500 sm:text-xl">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
        </div>
      
        <div class="grid gap-8 xl:grid-cols-3 lg:grid-cols-2">     
          @foreach ($kotas as $kota)
            
          
          <a href="/kota/{{ $kota->slug }}" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $kota->name }}</h5>
            <p class="font-normal text-gray-700">{{ $kota->description }}</p>
          </a>


          @endforeach
        
      
      </div>
    </section>
    @endsection
    
    
    
    