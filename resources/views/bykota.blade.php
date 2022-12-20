@extends('components.layout')

@section('container')
<section class="bg-white">
  <div class="pt-48 pb-24 px-4 container border">
    
    <div class="pb-10">
      <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Post by city in {{ $title }}</h2>
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
    
  
  </div>
</section>
@endsection