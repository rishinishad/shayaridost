@extends('layouts.app')
@section('content')
<title>Shayari</title>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
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
          <li><a href="/index">All</a></li>
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