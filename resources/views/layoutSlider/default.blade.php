
<!DOCTYPE html>
<html>
 	@include('elements.head')
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-12">
	            @include('elements.header')
	        </div>
	    </div>
	    
	    <div class="row col-12">
			  <div class="col-3">
			  		
			  		<div class="card col-12" style="width: 18rem; margin-right: 6px; ">
					  
					  @include('elements.leftManu')

					</div>
					
		    
			  </div>
			  <div class=""></div>
			  <div class="col-9">
			      <div class="card-header">
                    Featured
                  </div>
			      <div class="card-body">
			      		
			      		@include('layoutSlider.sliders')
			      		

			      		@yield('content')
                    	@show
			      </div>
			  </div>
		</div>

		<div class="row">
			<div class="col-12">
	            @include('elements/footer')
	        </div>
		</div>

	</div>
@include('elements/scripts')
</body>
</html>


