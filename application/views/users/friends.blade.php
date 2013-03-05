@layout('templates.user')

@section('content')

<div class="row-fluid">
    <div class="widget">                    
        <div class="head simple">
            <h2>Your followers:</h2>
            <ul class="buttons">
                <li><a href="#"><span class="label label-info">Show all</span></a></li>
            </ul>
        </div>     
        <div class="row-fluid">
            <div class="row-fluid">
                @if (empty($followers))
                    <h6>No one is following you</h6>
                @else
                    <?php $counter = 0 ?>
                    @foreach ($followers as $follow)
                    @if ($counter % 4 == 0)
                    <div class="row-fluid">
                    @endif
                    <div class="span3">
                        <div class="userCard">
                            <div class="image">
                                @if (File::exists(path('public') . '/profile/' . $follow->username . '.jpg'))
                                <img src="<?php echo url('profile/'.$follow->username.'.jpg'); ?>" class="img-polaroid">
                                @else
                                <img src="<?php echo url('profile/user.jpg'); ?>" class="img-polaroid">
                                @endif
                            </div>
                            <div class="info">
                                <h3>{{$follow->firstname}} {{$follow->lastname}}</h3>
                                @if (in_array($follow->id, $following_user_id))
                                <a class="btn btn-danger" href="{{url('friends/unfollow/' . $follow->id)}}">Unfollow</a>
                                @else
                                <a class="btn btn-primary" href="{{url('friends/follow/' . $follow->id)}}">Follow</a>
                                @endif
                                <div class="informer">
                                    7,327
                                    <span>Followers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $counter++; ?>
                    @if ($counter % 4 == 0 && $counter != 0)
                    </div>
                    @endif
                    @endforeach
                @endif
            </div>   
        </div>
    </div>

</div>

<div class="row-fluid">
    <div class="widget">                    
        <div class="head simple">
            <h2>You are following:</h2>
            <ul class="buttons">
                <li><a href="#"><span class="label label-info">Show all</span></a></li>
            </ul>
        </div>
        <div class="row-fluid">
            @if (empty($following))
                <h6>You are not following anyone</h6>
            @else
                <?php $counter = 0 ?>
                @foreach ($following as $follow)
                @if ($counter % 4 == 0)
                <div class="row-fluid">
                @endif
                <div class="span3">
                    <div class="userCard">
                        <div class="image">
                            @if (File::exists(path('public') . '/profile/' . $follow->username . '.jpg'))
                            <img src="<?php echo url('profile/'.$follow->username.'.jpg'); ?>" class="img-polaroid">
                            @else
                            <img src="<?php echo url('profile/user.jpg'); ?>" class="img-polaroid">
                            @endif
                        </div>
                        <div class="info">
                            <h3>{{$follow->firstname}} {{$follow->lastname}}</h3>
                            <a class="btn btn-danger" href="{{url('friends/unfollow/' . $follow->id)}}">Unfollow</a>
                            <div class="informer">
                                7,327
                                <span>Followers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $counter++; ?>
                @if ($counter % 4 == 0 && $counter != 0)
                </div>
                @endif
                @endforeach
            @endif
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="widget">                    
        <div class="head simple">
            <h2>Who to follow:</h2>
            <ul class="buttons">
                <li><a href="#"><span class="label label-info">Search</span></a></li>
            </ul>
        </div>
            @if (empty($who_to_follow))
                <h6>There is no one in your sector</h6>
            @else
                <?php $counter = 0 ?>
                @foreach ($who_to_follow as $follow)
                @if ($counter % 4 == 0)
                <div class="row-fluid">
                @endif
                <div class="span3">
                    <div class="userCard">
                        <div class="image">
                            @if (File::exists(path('public') . '/profile/' . $follow->username . '.jpg'))
                            <img src="<?php echo url('profile/'.$follow->username.'.jpg'); ?>" class="img-polaroid">
                            @else
                            <img src="<?php echo url('profile/user.jpg'); ?>" class="img-polaroid">
                            @endif
                        </div>
                        <div class="info">
                            <h3>{{$follow->firstname}} {{$follow->lastname}}</h3>
                            <a class="btn btn-primary" href="{{url('friends/follow/' . $follow->id)}}">Follow</a>
                            <div class="informer">
                                7,327
                                <span>Followers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $counter++; ?>
                @if ($counter % 4 == 0 && $counter != 0)
                </div>
                @endif
                @endforeach
            @endif




           
    </div>
</div>
@endsection