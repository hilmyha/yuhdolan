@extends('components.layout')

@section('container')
{{-- Post by City --}}
<section class="bg-white">
  <div class="pt-48 pb-24 px-4 container border">
    <div class="pb-10">
      <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Post by {{ $title }}</h2>
      <p class="font-light text-gray-500 sm:text-xl">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
    </div>
  
    <div class="grid gap-8 xl:grid-cols-3 lg:grid-cols-2">  
      @foreach ($kotas as $kota)
      <div class="card-image">
        <img src="http://source.unsplash.com/1920x1080?{{ $kota->name }}" alt="">
        
        <div class="image-child">
          <div class="image-textarea">
            <a href="/kota/{{ $kota->slug }}">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-white hover:underline">{{ $kota->name }}</h5>
            </a>
          
          </div>
        </div>
      
      </div>
      @endforeach 
      
      
    </div>
  </div>
</section>
@endsection