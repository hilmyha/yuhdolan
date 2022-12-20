@extends('components.layout')

@section('container')
<section class="bg-white">
  <div class="pt-48 pb-24 px-4 container border">
    
    <div class="pb-10">
      <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">{{ $title }}</h2>
      <p class="font-light text-gray-500 sm:text-xl">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
    </div>
  
    <div class="grid gap-8 grid-cols-1 xl:grid-cols-4 lg:grid-cols-2">     
      @if ($blogs->count())
      <a class="lg:col-span-2" href="/blog/{{ $blogs[0]->slug }}">
        <div class="card-image ">
          <img src="http://source.unsplash.com/1920x1080?{{ $blogs[0]->title }}" alt="">
          
          <div class="image-child">
            <div class="image-textarea">
              
              <span class="text-sm">{{ $blogs[0]->created_at->diffForHumans() }}</span>
              <span class="mb-1 text-2xl font-bold tracking-tight text-white">{{ $blogs[0]->title }}</span>
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
                  
                  <span class="text-sm">{{ $blog->created_at->diffForHumans() }}</span>
                  <span class="mb-1 text-2xl font-bold tracking-tight text-white">{{ $blog->title }}</span>
                  <p>{{ $blogs[0]->excerpt }}</p>
  
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
@endsection