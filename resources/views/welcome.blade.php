<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Shayari Dost</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShayariDost</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            /* html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}} */
        </style>

        <style>
            /* .jumbotron{
                background-color: rgb(250, 250, 161);
            } */
            h1{
                font-size: 50px;
            }
            body {
                /* font-family: 'Nunito', sans-serif; */
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="jumbotron text-center" style="text-align: center">
            {{-- <h1 class="bg-danger">ShayariDost</h1> --}}
              
            <a href="/shayari">
              <button type="button" class="btn btn-primary btn-lg">Shayari</button>
            </a>

            <a href="/joke">
              <button type="button" class="btn btn-primary btn-lg">Jokes</button>
            </a>

          </div>
                </div>
            </div>
        </div>
    </body>
</html>
@extends('layouts.app')
@section('content')
<title>Shayari</title>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px">    
  <!-- The Grid -->
  <h3 style="text-align: center">Shayari</h3>
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">

        </div>
      </div>
      
      <br>
      
    </div>

       @foreach ($shayaris as $k => $shayari)
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <div class="row">
            <div class="col-lg-6 col-md-12 mt-2">
              <div class="pb-2">{!! nl2br($shayari->shayari)!!}</div>
               <ul class="social-icons pl-0" id="hz">  
                <li>  
                  <a class="p-1" href="https://www.facebook.com/sharer.php?u={{url('/')}}" id="facebook-btn">
                    <i class="fa fa-facebook-square" aria-hidden="true" style="color: #3b5998; font-size: 2rem "></i>
                  </a>
                </li>
                <li>
                  <a class="p-1" href="https://wa.me/?text={{ str_replace("\n", '%0A', $shayari->shayari) }}%0A%0AFor more: {{ url('/') }}" id="whatsapp-btn">
                    <i class="fa fa-whatsapp" aria-hidden="true" style="color: #25d366; font-size: 2rem"></i>
                  </a>
                </li>
              </ul>
        {{-- {{ $k + 1}}. --}}
        {{-- {!! nl2br($joke->joke)!!} --}}
       <br>
      </div>
      </div>
    </div> 
        @endforeach
        <style>
          ul#hz li{
            display: inline;
            margin: 4px;
          }
        </style>
        
  
    <!-- End Middle Column -->
    </div>

        <div class="container">
          <ul class="pagination pagination-sm ">
            <li class="page-item">{{ $shayaris->onEachSide(1)->links('pagination::bootstrap-4') }} </li>
          </ul>
        </div>
    <!-- End Middle Column -->
   
    
    <!-- Right Column -->

      <br>
      <br>
      
      <div class="container">
        <h2>Categories:</h2>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <ul class="list-group" id="myList">
          <li><a href="/shayari">All</a></li>
          {{-- @csrf --}}
          <li><a href="/morning">Good Morning</a></li>
          <li><a href="/night">Good Night</a></li>
          <li><a href="/sad">Sad</a></li>
          <li><a href="/bewafa">Bewafa</a></li>
          <li><a href="/comedy">Comedy</a></li>
          <li><a href="/birthday">Birthday</a></li>
          <li><a href="/attitude">Attitude</a></li>
        </ul>  
      </div>

@endsection