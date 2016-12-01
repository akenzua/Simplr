
         @extends('layouts.app')


         @section('content')
         <div class="category container">
	         <div class="row">
	         	<div class="col-md-7">
            
	         		<h3>{{$cat->category}}</h3>
                
             @foreach($main as $main)
	         		<div class="catImage">
              <a href="/blogs/{{$main->url}}">
		         		<img  class="img-responsive" src="{{$main->image}}" alt="blog1">
		         		<h2><span>{{$main->title}}</span></h2>
                </a>
	         		</div>
              @endforeach
	         		<div class="blogsStrat">
              
	         		<div class="row">
                     @foreach($cat->blog as $category)
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="{{$category->image}}" alt="blog1">
                        <p class="col-xs-7 col-md-12">{{$category->title}}</p>
                      
                      </div>
                      @endforeach
                       <!-- <div class="col-xs-12 col-md-4 cont">
                       <img  class="img-responsive col-xs-5 col-md-12" src="/images/blog2.jpeg" alt="blog1">
                       <p class="col-xs-7 col-md-12">Personal Computers dropping value in the face of economic recession</p>

                      </div> -->
                      <!-- <div class="col-xs-12 col-md-4 cont">
                      <img  class="img-responsive col-xs-5 col-md-12" src="/images/blog3.jpg" alt="blog1">
                      <p class="col-xs-7 col-md-12">Inflation rate to exceed double digit for the first time in 20 years</p>

                      </div> -->

                     </div>
                     <!-- <div class="row">
                     
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="/images/blog1.jpeg" alt="blog1">
                        <p class="col-xs-7 col-md-12">Goldmans Sach ranks Nigeria stock high at 0.97% return</p>
                      
                      </div>
                       <div class="col-xs-12 col-md-4 cont">
                       <img  class="img-responsive col-xs-5 col-md-12" src="/images/blog2.jpeg" alt="blog1">
                       <p class="col-xs-7 col-md-12">Personal Computers dropping value in the face of economic recession</p>

                      </div>
                      <div class="col-xs-12 col-md-4 cont">
                      <img  class="img-responsive col-xs-5 col-md-12" src="/images/blog3.jpg" alt="blog1">
                      <p class="col-xs-7 col-md-12">Inflation rate to exceed double digit for the first time in 20 years</p>

                      </div>

                     </div> -->
                     </div>
                     <div class="others">
                     	<p>Inflation rate to exceed double digit for the first time in 20 years</p>
                     	<p>Goldmans Sach ranks Nigeria stock high at 0.97% return</p>
                     	<p>Personal Computers dropping value in the face of economic recession</p>
                     	<p>Inflation rate to exceed double digit for the first time in 20 years</p>
                     	<p>Goldmans Sach ranks Nigeria stock high at 0.97% return</p>
                     	<p>Personal Computers dropping value in the face of economic recession</p>
                     </div>
	         	</div> <!-- col-md-7 -->
	         	

	         </div> <!-- main row -->

         </div> <!-- container -->




         @include('footer')
     	 @endsection