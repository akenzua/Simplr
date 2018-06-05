
         @extends('layouts.app')


         @section('content')
        



         <div class="blogsPage container">
         	<div class="row"><!-- Main Row -->
         		<div class="col-md-7">
              <h3>Latest</h3>
                 <div id="myCarousel" class="carousel slide  latest" data-ride="carousel">
                    
                    <div class="carousel-inner" role="listbox">
                    @foreach ($blogHome as $blog)

                      <div class="item on">
                      <a href="/blogs/{{$blog->url}}">
                        <img src="{{$blog->image}}" alt="Chania">
                        <div class="carousel-caption">
                          <h2>{{$blog->title}}</h2>
                          <p>{{$blog->excerpt}}</p>
                        </div>
                      </a>
                      </div>
                      @endforeach
                    </div> 
                    

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div><!-- Latest -->


                  <div class="blogsStrat">
                    <h3>Growth Strategies</h3>
                     <div class="row">
                     @foreach($growth as $growth)
                     <a href="/blogs/{{$growth->url}}">
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="{{$growth->image}}" alt="blog1">
                        <p class="col-xs-7 col-md-12">{{$growth->title}}</p>
                      
                      </div>
                      </a>
                      @endforeach
                     </div>
                    
                  </div> <!-- blogsztrat -->


                  <div class="startUp">
                    <h3>Start Ups</h3>
                     <div class="row">
                     @foreach($start as $start)
                     <a href="/blogs/{{$blog->url}}">
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="{{$start->image}}" alt="blog1">
                        <p class="col-xs-7 col-md-12">{{$start->title}}</p>

                      </div>
                      </a>
                      @endforeach
                    
                     </div>
                    
                  </div> <!-- startup -->

                  <div class="blogsTech">
                    <h3>Technology</h3>
                     <div class="row">
                     @foreach($tech as $tech)
                     <a href="/blogs/{{$tech->url}}">
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="{{$tech->image}}" alt="blog1">
                        <p class="col-xs-7 col-md-12">{{$tech->title}}</p>

                      </div>

                      </a>
                      @endforeach

                     </div>
                    
                  </div> <!-- blogsTech -->

                  <div class="blogsLegal">
                    <h3>Legal</h3>
                     <div class="row">
                     @foreach($legal as $legal)
                     <a href="/blogs/{{$legal->url}}">
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="{{$legal->image}}" alt="blog1">
                        <p class="col-xs-7 col-md-12">{{$legal->title}}</p>

                      </div>
                      </a>
                      @endforeach
                     </div>
                  </div> <!-- blogsLegal -->


                  <div class="blogsFin">
                    <h3>Finance</h3>
                     <div class="row">
                     @foreach($finance as $finance)
                     <a href="/blogs/{{$finance->url}}">
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="{{$finance->image}}" alt="blog1">
                        <p class="col-xs-7 col-md-12">{{$finance->title}}</p>

                      </div>
                      </a>
                      @endforeach
                      </div>
                    
                  </div>
                  <div class="blogsMarkSal">
                    <h3>Marketing & Sales</h3>
                     <div class="row">
                      @foreach($mns as $mns)
                     <a href="/blogs/{{$mns->url}}">
                      <div class="col-xs-12 col-md-4 cont">
                        <img  class="img-responsive col-xs-5 col-md-12" src="{{$mns->image}}" alt="blog1">
                        <p class="col-xs-7 col-md-12">{{$mns->title}}</p>

                      </div>
                      </a>
                      @endforeach
                      </div>
                      
                     

                     </div>
                    
                  </div>

               </div>
               <div class="col-md-4 aside"> <!-- Blog Aside -->
                  

               </div><!-- Blog Aside  Ends-->


         	</div><!-- Main Row Ends -->

         	

         </div>


          <!--Blogs Ends-->
      @include('footer')
      @endsection