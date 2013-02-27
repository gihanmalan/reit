@layout('templates.login')


@section('content')
<div class="login" id="login">
        <div class="wrap">
        {{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.login_route')) }}
            <!-- check for login errors flash var -->
            @if (Session::has('error'))
                <div class="alert alert-error">{{ Session::get('error') }}</div>
            @elseif (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            <div class="row-fluid">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    {{ Form::text('username', '', array('placeholder' => 'Username')) }}
                </div>                                                 
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    {{ Form::password('password', array('placeholder' => 'Password')) }}
                </div>          
                <div class="dr"><span></span></div>                                
            </div>
            <div class="row-fluid">
                <div class="span8 remember">
                    {{Form::checkbox('rem', '1')}} Remember Me
                </div>
                <div class="span4 TAR">
                    {{ Form::submit('Login', array('class' => 'btn btn-block btn-primary')) }}
                </div>
            </div>
            <div class="dr"><span></span></div>
            <div class="row-fluid">
                <div class="span8">
                    {{HTML::link('/', 'Forgot password', array('class' => 'btn btn-block')) }}
                </div>
                <div class="span4">
                    {{HTML::link('signup', 'Register', array('class' => 'btn btn-warning btn-block'));}}
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection