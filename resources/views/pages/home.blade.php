
         @extends('layouts.app')


         @section('content')
        <div class="banner" id="featured">
            
            
        </div>
            
        
      
        <div class="who page container-fluid" id="aboutId">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-2 weAre">
                    <h2 class="professional">WE ARE<span class="desc">PROFESSIONALS</span></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Its your Repo!
                    </p>
                    <p>
                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. 
                    </p>
                    <hr>
                    
                    
                </div>
                <div class="col-sm-5 prof">
                  <img  class="img-responsive" src="images/professional.jpg" alt="professionals">  
                </div>
         
            </div><!--row-->
     
        </div><!--who-->
      
      
      
      <!--Services Starts-->
          <div class="container-fluid services page" id="servicesId">
              <div class="rows">

                  <div class="row col-md-3 serv">
                  <div class="col-md-10">
                  <p class="dot1">.</p>
                  <p class="dot2">.</p>
                  <p class="dot3">.</p>

                  <img  class="barcode" src="images/barcode.svg" alt="services">
                    <img  class="coffee" src="images/coffee-black.svg" alt="services">
                    <!-- <img  class="img-responsive" src="images/services.jpg" alt="services"> --> 
                    <h5>Services</h5>
                    </div>
                  </div><!--col-md-5 serv-->
                  <div class="col-md-7">
                      <div class="row servDesc">
                          <div class="col-md-6 first">
                              <h4>Business Planning</h4>
                                  <p>
                                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                                  </p>
                          
                          </div><!--Business Planning-->
                          <div class="col-md-6 first">
                              <h4>Marketing Plan</h4>
                              <p>
                                   Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. 
                              </p>
                          
                          </div><!--Marketing Plan-->
                          <div class="col-md-6">
                              <h4>Business Plan Review</h4>
                              <p>
                                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                              </p>
                          
                          </div><!--Business Plan Review-->
                          <div class="col-md-6">
                              <h4>Feasibility Study</h4>
                              <p>
                                  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                              </p>
                          
                          </div><!--Feasibility Study-->
                          
                      </div><!--row servDesc-->

                  </div><!--col-md-7-->
              </div><!--row-->
          </div><!--container-fluid services page-->
      
      <!--Services Ends-->
      <!--How We Work Starts-->
      <div class="container-fluid page work" id="workId">
          <div class="row">
              @foreach($works as $work)
              
              <div class="col-md-3 col-sm-6">

                  <div class="row steps">
                    
                      <div class="col-xs-3 ">
                        <h1 class="num">
                          {{$work->id}}
                        </h1>
                      
                      </div>
                      <div class="col-xs-9 workTitle">
                      <h5>
                      {{$work->title}}
                      </h5>
                      </div>
                      
                      <div class="col-xs-3"></div>
                      <div class="col-xs-9 content">
                          {!! $work->work !!}
                      </div>
            
                  </div>
            
              </div><!--col-md-2-->

              
               @endforeach
          </div><!--row-->
       </div><!--container-fluid work page-->
     
      <!--How We Work Ends-->
      
     

     
      
      
      
      <!--Blogs Start-->
      <div class="container-fluid page blogs" id="blogsId">
          <div class="row">
           
          @foreach ($blogHome as $blog)
              <div class="col-md-2 off col-sm-4"><a href="/blogs/{{$blog->url}}">
                  <img  class="img-responsive" src="{{$blog->image}}" alt="blog1">
                  <h4>{{$blog->title}}</h4>
                   </a>
                  <!-- <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><span>&nbsp;&nbsp;INVESTMENTS

                   </span> -->
                  <p><a href="/blogs/{{$blog->url}}">
                      {{$blog->excerpt}}  
                      </a>
                  </p>
                  <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> &nbsp;<span>{{ $blog->comments->count() }}</span>
                  <span class="dates pull-right">{{ $blog->created_at->format('F d, Y')}}</span>

                  <hr>

              </div>
               @endforeach
               
               


               
              
          
          </div><!-- First Sets of blogs -->
       </div><!--Page Blog-->
      
      
      <!--Blogs Ends-->
      @include('footer')
      @endsection
      