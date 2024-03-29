<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZYBR6D5LNQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZYBR6D5LNQ');
</script>
{{-- <title>W3.CSS Template</title> --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
</head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="/" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ShayariDost</a>
  <a href="/shayari" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Shayari">Shayari</a>
  <a href="/joke" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Jokes">Jokes</a>
  {{-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a> --}}
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large" style="margin-top: 45px">
  {{-- <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a> --}}
  <a href="/shayari" class="w3-bar-item w3-button w3-padding-large">Shayari</a>
  <a href="/joke" class="w3-bar-item w3-button w3-padding-large">Jokes</a>
  {{-- <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a> --}}
</div>

@yield('content')

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  {{-- <h3 style="text-align: center">Jokes</h3> --}}
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
            
        </div>
      </div>
      
      <br>
      
      <!-- Interests --> 

      
      <!-- Alert Box -->    
    <!-- End Left Column -->
    </div>

    <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
      </head>
      <body>

        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myList li").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            </script>
            
            </body>
            </html>
      
            <br>
            
       
            
          <!-- End Right Column -->
          </div>
          
        <!-- End Grid -->
        </div>
        
      <!-- End Page Container -->
      </div>
      <br>
      
      <!-- Footer -->
      <footer class="w3-container w3-theme-d3 w3-padding-16">
        <h5>Shayari Dost</h5>
      </footer>


      <script>
      // Accordion
      function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
          x.previousElementSibling.className += " w3-theme-d1";
        } else { 
          x.className = x.className.replace("w3-show", "");
          x.previousElementSibling.className = 
          x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
      }
      
      // Used to toggle the menu on smaller screens when clicking on the menu button
      function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else { 
          x.className = x.className.replace(" w3-show", "");
        }
      }
      </script>
      
      </body>
      </html> 
