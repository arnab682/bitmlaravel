      @extends ('layout.layout')

{{$A}} <br>
<?php echo $A;?> <br>
<?php print_r($A)?> <br>
<?php print($A)?> <br>
<?php print "$A";?> <br>
<?php var_dump($A)?> <br>


      @section('content')

      <h1 class="text-hide animated fadeIn mb-4"
        style="background-image: url('https://mdbootstrap.com/img/logo/mdb-transparent-250px.png'); width: 250px; height: 90px;">
        MDBootstrap</h1>

      <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

      <p class="animated fadeIn text-muted">MDB Team {{$A}}</p>

      @endsection