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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    {{ HTML::script('js/plugins/jquery/jquery-ui-1.9.1.custom.min.js');}}
    {{ HTML::script('js/plugins/bootstrap/bootstrap.min.js');}}

    {{ HTML::script('js/actions.js');}}

</head>
<body>
    <div class="header">
        {{HTML::link('/', '', array('class' => 'logo centralize'));}}
    </div>
    <div class="content">
        @yield('content')
    </div>

<div>

</div>
</body>
</html>