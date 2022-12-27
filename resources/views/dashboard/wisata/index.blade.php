@extends('dashboard.components.dashboard')

@section('container')
  <h1>Post by, {{ auth()->user()->name }}</h1>

  
  <div class="overflow-x-auto relative mt-5 border">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6">
                    #
                </th>
                <th scope="col" class="py-3 px-6">
                    Title
                </th>
                <th scope="col" class="py-3 px-6">
                    Kota
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($wisatas as $wisata)
            
          
            <tr class="bg-white border-b">
                <td class="py-4 px-6">
                  {{ $loop->iteration }}
                </td>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    {{ $wisata->title }}
                </th>
                <td class="py-4 px-6">
                    {{ $wisata->kota->name }}
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium mr-2 border text-green-500 hover:underline">Show</a>
                    <a href="#" class="font-medium mr-2 border text-yellow-300 hover:underline">Edit</a>
                    <a href="#" class="font-medium mr-2 border text-pink-500 hover:underline">Delete</a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </div>

  <div class="my-4">
    {{ $wisatas->links() }}

  </div>

@endsection