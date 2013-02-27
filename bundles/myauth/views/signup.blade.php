@layout('templates.login')


@section('content')
<div class="login" id="login">
        <div class="wrap">
            {{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.signup_route')) }}


                <div class="row-fluid">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        {{ Form::text('username', Input::old('username'), array('placeholder' => 'Username')) }}
                        <?php if($errors) echo '<p class="text-error" style="font-size:12px;">'.$errors->first('username').'</p>'; ?>
                    </div>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        {{ Form::text('email', Input::old('email'), array('placeholder' => 'Email')) }}
                        <?php if($errors) echo '<p class="text-error" style="font-size:12px;">'.$errors->first('email').'</p>'; ?>
                    </div>                
                    <div class="dr"><span></span></div>                
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                        {{ Form::password('password', array('placeholder' => 'Password')) }}
                        <?php if($errors) echo '<p class="text-error" style="font-size:12px;">'.$errors->first('password').'</p>'; ?>
                    </div>                          
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-question-sign"></i></span>
                        {{ Form::password('password_confirmation', array('placeholder' => 'Confirm Password')) }}
                        <?php if($errors) echo '<p class="text-error" style="font-size:12px;">'.$errors->first('password_confirmation').'</p>'; ?>
                    </div>                                
                    <div class="dr"><span></span></div>                                
                </div>
                <div class="row-fluid">
                    <div class="span8">
                    </div>
                    <div class="span4 TAR">
                        {{ Form::submit('Register', array('class' => 'btn btn-block btn-primary', 'onclick' => 'return validate()')) }}
                    </div>
                </div>
            {{ Form::close() }}
    </div>
</div>
@endsection