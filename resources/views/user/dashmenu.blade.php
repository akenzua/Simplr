<div class="panel panel-default">
            <div class="panel-heading">
            Dashboard
                
            </div>
            <div class="panel-body">
            <span class="create"><a href="/home/request"> <i class="fa fa-file-text" aria-hidden="true"></i> Create a new job</a></span><br>

            <p class="jobs">Jobs ({{$user->jobs->count()}})</p>

            	
		        @foreach ($user->jobs as $job)
			        @if($job->payfirst)
			        <h4>{{$job->business}}</h4>
			        <ul class="job-menu">
			        <li><a id="{{$job->id}}" href="/home/questionnaire/1/{{$job->id}}">Start Questionnaire</a></li>
			        <li><a href="">Messages (4)</a></li>
			        <li><a href=""> Previews</a></li>
			        </ul>
			        
			        @endif
		        @endforeach
		        @php
		        function jobId(){
               
                     $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                     $ext = strrchr($url, "/");
                     $ext = substr($ext, 1);
                     echo $ext;
                     }
                 function redAlert(){
               
                     $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                     $ext = strrchr($url, "/");
                     $ext = substr($ext, 1);
                     return $ext;
                     }


                
		        @endphp


            </div>
        </div>