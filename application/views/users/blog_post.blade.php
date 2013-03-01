@layout('templates.user')

@section('content')

<div class="row-fluid">
            
    <div class="span4">
        <div class="widget">
            <div class="profile clearfix">
                <div class="image">
                    <img src="<?php echo url('profile/'.Auth::user()->username.'_b.jpg'); ?>" class="img-polaroid"/>
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
                        <div class="title">12</div>
                        <div class="descr">Blog Posts</div>                                
                    </div>                            
                    <div class="item">
                        <div class="title">38</div>
                        <div class="descr">Pins</div>                                
                    </div>                                                        
                    <div class="item">
                        <div class="title">45</div>
                        <div class="descr">Followers</div>
                    </div>
                    <div class="item">
                        <div class="title">14</div>
                        <div class="descr">Following</div>                                
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">    
    <div class="span12">
        <div class="widget">
            <div class="head simple">                        
                <h2>{{$post->title}}</h2>
            </div>
            <div class="block">
                <p>{{nl2br($post->post)}}</p>
            </div>
        </div>
    </div>
</div>
@endsection