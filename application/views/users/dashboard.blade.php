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

     <div class="widget">                    
                    <div class="head simple">                        
                        <h2>Following</h2>
                        <ul class="buttons">
                            <li><a href="#"><span class="label label-info">Show all</span></a></li>
                        </ul>                        
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="userCard">
                                <div class="image">
                                    <img src="img/examples/users/alexey.jpg" class="img-polaroid"/>
                                </div>
                                <div class="info">
                                    <h3>Alexey</h3>
                                    <p><span class="icon-heart"></span> 2,195 <span class="icon-camera"></span> 121</p>
                                    <button class="btn btn-danger">Unfollow</button>
                                    <div class="informer">
                                        6,422
                                        <span>Followers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="userCard">
                                <div class="image">
                                    <img src="img/examples/users/olga.jpg" class="img-polaroid"/>
                                </div>
                                <div class="info">
                                    <h3>Olga</h3>
                                    <p><span class="icon-heart"></span> 3,521 <span class="icon-camera"></span> 89</p>
                                    <button class="btn btn-danger">Unfollow</button>
                                    <div class="informer">
                                        7,327
                                        <span>Followers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="userCard">
                                <div class="image">
                                    <img src="img/examples/users/helen.jpg" class="img-polaroid"/>
                                </div>
                                <div class="info">
                                    <h3>Helen</h3>
                                    <p><span class="icon-heart"></span> 1,341 <span class="icon-camera"></span> 168</p>
                                    <button class="btn btn-danger">Unfollow</button>
                                    <div class="informer">
                                        7,327
                                        <span>Followers</span>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="span6">
                            <div class="userCard">
                                <div class="image">
                                    <img src="img/examples/users/valentin.jpg" class="img-polaroid"/>
                                </div>
                                <div class="info">
                                    <h3>Valentin</h3>
                                    <p><span class="icon-heart"></span> 2,653 <span class="icon-camera"></span> 257</p>
                                    <button class="btn btn-danger">Unfollow</button>
                                    <div class="informer">
                                        4,523
                                        <span>Followers</span>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>                    
                    
                </div>                
                
            </div>
            <div class="span8">
                
                <div class="timeline">
                    
                    <div class="event">
                        <div class="date red">15<span>min ago</span></div>
                        <div class="icon"><span class="icos-comments3"></span></div>
                        <div class="body">
                            <div class="arrow"></div>
                            <div class="head">Leave comment on <a href="img/examples/photo/example_3.jpg" class="fb">image</a>:</div>
                            <div class="text">Realy great!!! I like it! What kind of lens do you use???</div>
                        </div>
                    </div>

                    <div class="event">
                        <div class="date">16<span>dec</span></div>
                        <div class="icon"><span class="icos-clipboard1"></span></div>
                        <div class="body">
                            <div class="arrow"></div>
                            <div class="head">Added new blog post:</div>
                            <div class="text typography">
                                <h5>Lorem ipsum dolor, sit amet</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.</p>
                                <p>Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            </div>
                        </div>
                    </div>                    
                    
                    <div class="event">
                        <div class="date">12<span>dec</span></div>
                        <div class="icon"><span class="icos-power"></span></div>
                        <div class="body">
                            <div class="arrow"></div>
                            <div class="head">Request technical support:</div>
                            <div class="text">
                                I need MySQL dump! Quickly!!! Couse customers will kill me, if i don't give it...
                            </div>
                        </div>
                    </div>                    
                </div>
                
            </div>
            
        </div>   
@endsection