<!DOCTYPE HTML>
<html lang="en-GB">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->

    <title>{{$title}} - REIT Project</title>

    {{ HTML::style('css/stylesheets.css') }}

    <!--[if lt IE 10]>
        {{ HTML::style('css/ie.css') }}
    <![endif]--> 

    <script type='text/javascript' src='{{url()}}js/plugins/jquery/jquery-1.8.3.min.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/jquery/jquery-ui-1.9.1.custom.min.js'></script>

     <script type='text/javascript' src='{{url()}}js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='{{url()}}js/plugins/bootstrap/bootstrap.min.js'></script>            
    
    <script type='text/javascript' src='{{url()}}js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/jflot/jquery.flot.js'></script>    
    <script type='text/javascript' src='{{url()}}js/plugins/jflot/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='{{url()}}js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/jflot/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/epiechart/jquery.easy-pie-chart.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/knob/jquery.knob.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/sparklines/jquery.sparkline.min.js'></script>    
    
    <script type='text/javascript' src='{{url()}}js/plugins/pnotify/jquery.pnotify.min.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/fullcalendar/fullcalendar.min.js'></script>        
    
    <script type='text/javascript' src='{{url()}}js/plugins/datatables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='{{url()}}js/plugins/wookmark/jquery.wookmark.js'></script>        
    
    <script type='text/javascript' src='{{url()}}js/plugins/jbreadcrumb/jquery.jBreadCrumb.1.1.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    
    <script type='text/javascript' src="{{url()}}js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="{{url()}}js/plugins/select/select2.min.js"></script>
    <script type='text/javascript' src='{{url()}}js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/multiselect/jquery.multi-select.min.js'></script>    
    
    <script type='text/javascript' src='{{url()}}js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/validationEngine/jquery.validationEngine.js'></script>        
    <script type='text/javascript' src='{{url()}}js/plugins/stepywizard/jquery.stepy.js'></script>
        
    <script type='text/javascript' src='{{url()}}js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/hoverintent/jquery.hoverIntent.minified.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/media/mediaelement-and-player.min.js'></script>    
    
    <script type='text/javascript' src='{{url()}}js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/shbrush/shBrushCss.js'></script>    
        
    <script type='text/javascript' src='{{url()}}js/plugins/filetree/jqueryFileTree.js'></script>
    
    <script type='text/javascript' src='{{url()}}js/plugins/slidernav/slidernav-min.js'></script>    
    <script type='text/javascript' src='{{url()}}js/plugins/isotope/jquery.isotope.min.js'></script>    
    <script type='text/javascript' src='{{url()}}js/plugins/jnotes/jquery-notes_1.0.8_min.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/jcrop/jquery.Jcrop.min.js'></script>
    <script type='text/javascript' src='{{url()}}js/plugins/ibutton/jquery.ibutton.min.js'></script>
        
    <script type='text/javascript' src='{{url()}}js/plugins.js'></script>
    <script type='text/javascript' src='{{url()}}js/charts.js'></script>
    <script type='text/javascript' src='{{url()}}js/actions.js'></script>

</head>
<body>
    <div class="header">
        {{HTML::link('/', '', array('class' => 'logo'));}}

        <div class="buttons">
            <div class="popup" id="subNavControll">
                <div class="label"><span class="icos-list"></span></div>
            </div>
            <div class="dropdown">
                <div class="label"><span class="icos-cog"></span></div>
                <div class="body" style="width: 160px;">
                    <div class="itemLink">
                        <a href="#"><span class="icon-cog icon-white"></span> Settings</a>
                    </div>
                    <div class="itemLink">
                        <a href="#"><span class="icon-comment icon-white"></span> Messages</a>
                    </div>                    
                    <div class="itemLink">
                        <a href="{{url('logout')}}"><span class="icon-off icon-white"></span> Logoff</a>
                    </div>                                        
                </div>                
            </div>            
        </div>

    </div>

    
    <div class="navigation">
        <ul class="main">
            <li><a href="{{url('users')}}" class="{{ URI::is('users/*') || URI::is('friends/*') ? 'active' : '' }}"><span class="icom-user1"></span><span class="text">Profile</span></a></li>
            <li><a href="{{url('users')}}" class="{{ URI::is('rank') ? 'active' : '' }}"><span class="icom-list"></span><span class="text">Rank</span></a></li>
            <li><a href="{{url('users')}}" class="{{ URI::is('myreit') ? 'active' : '' }}"><span class="icom-stats-up"></span><span class="text">MyREIT</span></a></li>
            <li><a href="{{url('users')}}" class="{{ URI::is('interact') ? 'active' : '' }}"><span class="icom-mail"></span><span class="text">Interact</span></a></li>
        </ul>

        @section('subnav')
        <div class="control"></div>        

        <div class="submain">

            <div id="default">
                <div class="menu">
                    <a href="{{url('users/index')}}"><span class="icon-user"></span> Your Profile</a>
                    <a href="buttons.html"><span class="icon-th-list"></span> News Feed</a>
                    <a href="{{url('users/settings')}}"><span class="icon-cog"></span> Settings</a>                    
                    <a href="{{url('friends/index')}}"><span class="icosg-users"></span> Friends</a>
                </div>  

                <div class="widget-fluid" style="margin-bottom: 30px;">
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Recent Interactions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Dave</a> followed You - <small>Jan. 16th, 2013</small></td>
                            </tr>
                            <tr>
                                <td>New <a href="#">Pin</a> - <small>Jan. 10th, 2013</small></td>
                            </tr>
                            <tr>
                                <td>You followed <a href="#">John</a> - <small>Jan. 16th, 2013</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="widget-fluid">
                    <h6>New Members in Your Sector</h6>
                    <div class="userCard">
                        <div class="image">
                            <img src="{{url('img/examples/users/alexey.jpg')}}" class="img-polaroid"/>
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
                    <div class="userCard">
                        <div class="image">
                            <img src="{{url('img/examples/users/olga.jpg')}}" class="img-polaroid"/>
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


        </div>
        
        @yield_section
    </div>
    

    <div class="content">
        @yield('content')
    </div>

<div>
   
</div>
</body>
</html>