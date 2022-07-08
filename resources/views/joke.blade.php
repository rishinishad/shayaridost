    @extends('layouts.app')
    @section('content')
    <title>Jokes</title>
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    

      <h3 style="text-align: center">Jokes</h3>
      <div class="w3-row">
      
        <div class="w3-col m3">
        
          <div class="w3-card w3-round w3-white">
            <div class="w3-container">
    
            </div>
          </div>
          
          <br>
        </div>
      @foreach ($jokes as $k => $joke)
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <div class="row">
            <div class="col-lg-6 col-md-12 mt-2">
              <div class="pb-2">{!! nl2br($joke->joke)!!}</div>
               <ul class="social-icons pl-0" id="hz">  
                <li>  
                  <a class="p-1" href="https://www.facebook.com/sharer.php?u={{url('/')}}" id="facebook-btn">
                    <i class="fa fa-facebook-square" aria-hidden="true" style="color: #3b5998; font-size: 2rem "></i>
                  </a>
                </li>
                <li>
                  <a class="p-1" href="https://wa.me/?text={{ str_replace("\n", '%0A', $joke->joke) }}%0A%0AFor more: {{ url('/') }}" id="whatsapp-btn">
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
        <li class="page-item">{{ $jokes->onEachSide(1)->links('pagination::bootstrap-4') }} </li>
      </ul>
    </div>
    
    <!-- Right Column -->

      <br>
      <br>
      
      <div class="container">
        <h2>Categories:</h2>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <ul class="list-group" id="myList">
          <li><a href="/joke">All</a></li>
          <li><a href="/santa_banta">Santa-Banta</a></li>
          <li><a href="/veg">Veg</a></li>
          <li><a href="/non_veg">Non_veg</a></li>
          <li><a href="/other_joke">Others</a></li>
        </ul>  
      </div>
      @endsection
