@extends('dashboard.template.layout')

@section('container')


<section class="bg-white">
  <div class="flex flex-col items-center justify-center py-8 md:h-screen lg:py-0">
      @if (session()->has('success'))
      <div class="container mt-48 p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-normal">{{ session('success') }}</span>
      </div>
      @endif
      
      @if (session()->has('loginError'))
      <div class="container mt-48 p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <span class="font-normal">{{ session('loginError') }}</span>
      </div>
      @endif
        <div class="w-full bg-white rounded-lg shadow-lg border">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Login to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                  @csrf
                    <input type="hidden" name="remember" value="true">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 invalid:focus:border-pink-600 invalid:text-pink-600" placeholder="name@company.com" required value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 invalid:focus:border-pink-600 invalid:text-pink-600" required value="{{ old('password') }}">
                    </div>
                    
                    <button type="submit" class="w-full text-white bg-teal-600 hover:bg-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                    <p class="text-sm font-light text-gray-500">
                        Don’t have an account yet? <a href="/register" class="font-medium text-teal-600 hover:underline">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
    
@endsection