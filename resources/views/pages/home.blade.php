
         @extends('layouts.app')
         @section('title_and_meta')
          <title>Simplr: Home</title>
          <meta name="description" content="Simplr" />
        @endsection

         @section('content')
        <div class="banner" id="featured">
            <div class="jumbotron col-md-6 col-md-offset-3">
              <div>We will get you the attention of investors and lenders at the first impression</div>
              
              <div class="highlight">
                 as we work with you from scratch to completion; taking advantage of our exposure, experience and expertise
                 to create a compelling business document
                 <!-- -business plan, pitch deck, feasibility study, marketing plan and more. -->
              </div>
            </div>
            

        </div>
        
      
        <div class="who page container-fluid" id="aboutId">
            <div class="row">
            <div class="col-sm-7 identity">
          <h2>who we are ...</h2>
        </div>
       
                <div class="col-sm-5 col-sm-offset-2 weAre">
                    <h2 class="professional">WE ARE<span class="desc">PROFESSIONALS</span></h2>
                    <p>
                        We are professionals who offer premium consulting services to startups looking to raise fund from 
                        venture capitalists, angels, business incubators, banks, grants and subsidies. We do not just prepare your documents, we also point you to the direction of the funding. 
                    </p>
                    <p>
                        Our team comprises experts from key business sectors, with proven track records, who are not only
                        capable of producing first class business document but also review each others work. Our consultants relate with you from the very beginning till you have your completed document because
                        know that at the end of the day, its your plan. 
                    </p>
                    <p>
                    We are based in Lagos, Nigeria but we do serve clients from all over Africa. We understand the financial
                    market and We know what the investors want.
                    </p>
                    <hr>
                    
                    
                </div>

                
         
            </div><!--row-->
     
        </div><!--who-->
      </div>
       <!--  <div id="identity2">
          <h2>what we do</h2>
        </div> -->
      
      
      <!--Services Starts-->
          <div class="services page" id="servicesId">
            <div class="col-sm-12 identity">
          <h2>what we do ...</h2>
        </div>
              <div class="container main">
               
                  <div class="row col-sm-12">
                      <div class="row servDesc">
                         <div  class="col-sm-6 servEach">
                          <div class="col-sm-12">
                          <img  class="img-responsive servImg" src="images/strategy1.svg" alt="Planning"> 
                          </div>
                          <div class="col-sm-12 servText">
                              <h4><a href="/services#businessplan">Business Planning</a></h4>
                                  <p><a href="#">
                                      Entrepreneur are usually overwhelmed with enlisting team members,
                                      developing products, marketing their products among other activities.
                                      We will take preparing business plan out of the list, and we rightly do so.
                                  </a></p>
                          </div>
                          </div><!--Business Planning-->
                          <div  class="col-sm-6">
                          <div class="col-sm-12">
                          <img  class="img-responsive servImg" src="images/strategy.svg" alt="Planning"> 
                          </div>
                          <div class="col-sm-12 servText">
                              <h4><a href="#">Pitch Deck</a></h4>
                                  <p><a href="#">
                                      The presentation has to impressive, succint, attractive and detailed; and that 
                                      is exactly how we do pitch decks at Simplr Consulting. So much so that you would start
                                      getting calls after the session.

                                  </a></p>
                          </div>
                          </div><!--Marketing Plan-->
                          <div  class="col-sm-6">
                          <div class="col-sm-12">
                          <img  class="img-responsive servImg" src="images/clipboard.svg" alt="Planning"> 
                          </div>
                          <div class="col-sm-12 servText">
                              <h4><a href="/services#businessplanreview">Business Plan Review</a></h4>
                                  <p><a href="/services#businessplanreview">
                                      The ever changing economic indicators have the effect of the effect of making 
                                      a business plan obsolete. At simplr, we can rework your business plan to reflect
                                      current realities.
                                  </a></p>
                          </div>
                          </div><!--Feasibilty-->
                          <div  class="col-sm-6">
                          <div class="col-sm-12">
                          <img  class="img-responsive servImg" src="images/feasibility.svg" alt="Planning"> 
                          </div>
                          <div class="col-sm-12 servText">
                              <h4><a href="#">Marketing Plan</a></h4>
                                  <p><a href="#">
                                      Detailing how to get your product to the intended customer is as important
                                      as starting the business in the first place. Our team can help you to design a great marketing plan that is just right for your market.
                                  </a></p>
                          </div>
                          </div><!--Feasibility-->
                          
                      </div><!--row servDesc-->

                  </div><!--col-md-7-->
              </div><!--row-->
          </div><!--container-fluid services page-->
      
      <!--Services Ends-->
      <!--How We Work Starts-->
      </div>
        
      <div class="container-fluid page work" id="workId">
      <div class="identity">
          <h2 id="works">how it works ...</h2>
        </div>
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
      <!--  <div class="col-sm-12 identity">
          <h2>what we do ...</h2>
        </div> -->
      <div class="container-fluid page blogs" id="blogsId">
      <div class="identity">
      <h2>blogs ...</h2>
      </div>
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
      