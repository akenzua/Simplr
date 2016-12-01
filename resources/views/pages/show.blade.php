
         @extends('layouts.app')


         @section('content')

         <div class="blogsPage container-fluid">
         	<div class="row"><!-- Main Row -->
         		<div class="col-md-1 chevron"> <!-- Left Chevron -->
               @foreach($previous as $previous)
         		<a href="{{ $previous->url }}"><i class="fa fa-chevron-left fa-lg lefttChevy" aria-hidden="true">
                    <span class="leftPop switch">
                        <h4>Previous</h4>

                        <div class="row">
                        <span class="col-sm-5"><img  class="img-responsive" src="{{ $previous->image}}" alt="blog1"></span>
                        <p class="col-sm-7">{{ $previous->title}}</p>
                        
                        </div>
                     </span> <!-- eftPop -->   
               </i></p>
               
               </a>
               @endforeach
               
         		<ul class="fa-ul">
         			<span class="fa-stack fa-lg">
         				<i class="fa fa-circle fa-stack-2x"></i>
         				<i class="fa fa-facebook fa-stack-1x fa-inverse fa-spin" aria-hidden="true"></i>
         			</span>
         			<span class="fa-stack fa-lg">
         				<i class="fa fa-circle fa-stack-2x"></i>
         				<i class="fa fa-twitter fa-stack-1x fa-inverse fa-spin" aria-hidden="true"></i>
         			</span>
         			<span class="fa-stack fa-lg">
         				<i class="fa fa-circle fa-stack-2x"></i>
         				<i class="fa fa-google-plus fa-stack-1x fa-inverse" aria-hidden="true"></i>
         			</span>
         			<span class="fa-stack fa-lg">
         				<i class="fa fa-circle fa-stack-2x"></i>
         				<i class="fa fa-linkedin fa-stack-1x fa-inverse" aria-hidden="true"></i>
         			</span>
         			
         		</ul>
									
         		</div><!-- Left Chevron Ends-->
         		<div class="col-md-6 blog"> <!-- Main Blogs Content -->
	         		<div class="blogHeader">
			         		<h1>{{ $blog->title}}</h1>
                         @foreach($authors as $author)
			         		<p>{{$author->name}}</p>
                        @endforeach
			         		<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><span>&nbsp;&nbsp;

                        {{ $category}}
                        </span>
			         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			         		<span class="glyphicon glyphicon-comment" aria-hidden="true"></span> &nbsp;<span>{{ $blog->comments->count() }}</span>

			         		<span class="dates pull-right">{{ $blog->created_at->format('F d, Y') }}</span>
	         		</div>
	         		<div class="blogImage">
	         			<img  class="img-responsive" src="{{ $blog->image}}" alt="blog1">
	         		</div>
	         		<div class="blogBody">
	         			
	         			{!!$blog->content!!}
                     
	         			
	         			

	         		</div>
         			<div class="comments">
                  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//simplr-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
         				<!-- <div class="heading"><h3> COMMENT(S)</h3></div>
         				
                     @foreach ($blog->comments as $comment)
                     <div class="row comment">
         					<div class="col-xs-2 row">

                           <div class="col-xs-11">
         						   <img  class="img-responsive" src="/images/passport1.jpg" alt="blog1">
                           </div>
         					</div> --><!-- End of Img Row -->
         					<!-- <div class="col-xs-10 commentBox">
                           <span class="commentor">Kerry Lim</span><br>
                           <span class="commentDate">10th Jan 2017</span>
                           <span class="reply pull-right">REPLY</span>
                           
                           <p class="commentContent">{{ $comment->comment }}</p>
         						
         					</div>
                         

        @foreach($comment->replies as $reply)
          <div class="col-xs-offset-1 col-xs-2 row"> --> <!-- Reply -->
                          <!-- <div class="col-xs-10">
                              <img  class="img-responsive" src="/images/passport2.jpg" alt="blog1">
                           </div>
               </div>
               <div class="col-xs-9 commentBox">
                           <span class="commentor">Shaki Kilani &nbsp<i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp Kerry Lim</span><br>
                           <span class="commentDate">10th Jan 2017</span> -->
                           <!-- <span class="reply pull-right">REPLY</span> -->
                           
                          <!--  <p class="commentContent">{{$reply->reply}}</p>
                           
                        </div>
            

        @endforeach
        
                        </div>
                        @endforeach -->
                        
         			</div><!-- Comment -->

                  <div class="author row">

                     <h3 class="">Author</h3>
                   
                        <div class="col-xs-3 col-sm-2">
                           
                              <img  class="img-responsive" src="/images/passport5.jpg" alt="blog1">
                           </div>
                      
                        <div class="col-xs-9 col-sm-10 authorBox">
                        @foreach($authors as $author)
                           <span class="authorName">{{ $author->name }} {{ $author->title }}</span><br>
                                                      
                           <p class="">{{ $author->designation }}</p>
                           <p>{{ $author->office }}</p>
                           <i class="fa fa-twitter-square" aria-hidden="true"></i> &nbsp
                           <i class="fa fa-facebook-square" aria-hidden="true"></i> &nbsp
                           <i class="fa fa-envelope" aria-hidden="true"></i>

                           @endforeach
                           
                        </div>
                     
                  </div>
                  
         		</div><!-- Main Blogs Content Ends-->
         		<div class="col-md-4 aside"> <!-- Blog Aside -->
         			

         		</div><!-- Blog Aside  Ends-->

         		<div class="col-md-1 chevron"> <!-- Right Chevron -->
               @foreach($next as $next)
         			<a href="{{ $next->url }}"><i class="fa fa-chevron-right fa-lg rightChevy" aria-hidden="true">
               

                  <span class="rightPop switch">
                  
                  <h4>Next</h4>

                  <div class="row">
                  
                  <p class="col-sm-7">{{ $next->title}}</p>
                  <span class="col-sm-5"><img  class="img-responsive" src="{{ $next->image}}" alt="blog1"></span>
                  @endforeach
                  </div>
               </span>      
                  
                  </i>

                  </p>
                  

                  </a>
                  
         		</div><!-- Right Chevron Ends-->


         	</div><!-- Main Row Ends -->

         	

         </div>


          <!--Blogs Ends-->
      @include('footer')
      @endsection