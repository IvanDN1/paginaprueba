
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


<div class="topnav" id="myTopnav">
  <a href="/" class="active"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="/nosotros"><i class="fa fa-fw fa-user"></i>NOSOTROS</a>
  <a href="/contact"><i class="fa fa-fw fa-envelope"></i>CONTACTANOS</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
 </script>
