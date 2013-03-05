@layout('templates.user')

@section('content')

@if (Auth::user()->firstname == '' && Auth::user()->lastname == '' && Auth::user()->city == '' && Auth::user()->country == '' && Auth::user()->profession == '')
    <div class="alert alert-success">Looks like you have not updated your profile! Click Settings on the left to add your profile information before you book a session.</div>
@endif

<div class="row-fluid">
    <div class="span4">
        <div class="widget">
            <div class="profile clearfix">
                <div class="image">
                    @if (File::exists(path('public') . '/profile/' . Auth::user()->username . '.jpg'))
                    <img src="<?php echo url('profile/'.Auth::user()->username.'_b.jpg'); ?>" class="img-polaroid"/>
                    @else
                    <img src="<?php echo url('profile/user.jpg'); ?>" class="img-polaroid">
                    @endif
                </div>                        
                <div class="info">
                    <h2>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h2>
                    <p><strong>Profile:</strong> {{ Auth::user()->username }}</p>
                    <p><strong>Location:</strong> {{Auth::user()->city}}, {{Auth::user()->country}}</p>
                    <p><strong>Profession:</strong> {{ Auth::user()->profession }}</p>
                    <div class="status">User</div>
                </div>
                <div class="stats">
                    <div class="item">
                        <div class="title">{{$blog_count}}</div>
                        <div class="descr">Blog Posts</div>                                
                    </div>                            
                    <div class="item">
                        <div class="title">38</div>
                        <div class="descr">Pins</div>                                
                    </div>                                                        
                    <div class="item">
                        <div class="title">{{$follower_count}}</div>
                        <div class="descr">Followers</div>
                    </div>
                    <div class="item">
                        <div class="title">{{$following_count}}</div>
                        <div class="descr">Following</div>                                
                    </div>                            
                </div>
            </div>
        </div>
    </div>
    <div class="span8">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="widget">
            <div class="head">
                <div class="icon"><i class="icosg-cube"></i></div>
                <h2>Status and Blog Posts</h2>
            </div>
            <div class="block-fluid">
                <div class="row-form">
                    {{ Form::open('users/status') }}
                    <div class="span2">Status:</div>
                    <div class="span10">
                        {{ Form::text('status', Auth::user()->status, array('placeholder' => 'Press enter to submit your status')) }}
                        <?php if($errors) echo '<p class="text-error" style="font-size:12px;">'.$errors->first('status').'</p>'; ?>
                    </div>
                    {{ Form::close() }}
                </div> 
                <div class="row-form">
                    {{ Form::open('users/blog') }}
                    <div class="span2">Blog:</div>
                    <div class="span10">
                        {{ Form::text('title', Auth::user()->title, array('placeholder' => 'Enter your blog title')) }}
                        <?php if($errors) echo '<p class="text-error" style="font-size:12px;">'.$errors->first('title').'</p>'; ?>

                        {{ Form::textarea('post', Auth::user()->post, array('placeholder' => 'Start your blog post here...')) }}
                        <?php if($errors) echo '<p class="text-error" style="font-size:12px;">'.$errors->first('post').'</p>'; ?>
                        {{ Form::submit('Post Blog', array('class' => 'btn btn-primary', 'style' => 'float: right;')) }}
                    </div>
                    {{ Form::close() }}
                </div>

            </div>
        </div>
    </div>

</div>

<div class="row-fluid">    
    <div class="span12">
        <div class="timeline">
            @foreach ($posts as $post)
                <div class="event">
                <div class="date">{{date('d', strtotime($post->created_at))}}<span>{{date('M', strtotime($post->created_at))}}</span></div>
                @if (isset($post->status))
                <div class="icon"><span class="icos-comments2"></span></div>
                <div class="body">
                    <div class="arrow"></div>
                    <div class="head">Updated status:</div>
                    <div class="text">{{$post->status}}</div>
                </div>
                @elseif (isset($post->post))
                <div class="icon"><span class="icos-clipboard1"></span></div>
                <div class="body">
                    <div class="arrow"></div>
                    <div class="head">Added new blog post:</div>
                    <div class="text">
                        <h5><a href="{{url('users/blog_post/' . $post->id)}}">{{$post->title}}</a></h5>
                        {{substr(nl2br($post->post), 0, 300)}}...<a href="{{url('users/blog_post/' . $post->id)}}">read more</a>
                    </div>
                </div>
                @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection