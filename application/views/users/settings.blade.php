@layout('templates.user')

@section('content')
{{ Form::open('users/settings') }}
<div class="row-fluid">
    <div class="span8">                
        <div class="widget">
            <div class="head dark">
                <div class="icon"><i class="icos-pencil2"></i></div>
                <h2>Your Profile Settings</h2>
            </div>                        
            <div class="block-fluid">
                @if (Session::has('error'))
                    <div class="alert alert-error">{{ Session::get('error') }}</div>
                @elseif (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                <div class="row-form">
                    <div class="span2">First Name:</div>
                    <div class="span10">{{ Form::text('firstname', Auth::user()->firstname) }}</div>
                </div>
                <div class="row-form">
                    <div class="span2">Last Name:</div>
                    <div class="span10">{{ Form::text('lastname', Auth::user()->lastname) }}</div>
                </div>
                <div class="row-form">
                    <div class="span2">City:</div>
                    <div class="span10">{{ Form::text('city', Auth::user()->city) }}</div>
                </div>
                <div class="row-form">
                    <div class="span2">Country:</div>
                    <div class="span10">{{ Form::text('country', Auth::user()->country) }}</div>
                </div>
                <div class="toolbar bottom TAL">
                    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                </div>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="head dark">
                <div class="icon"><i class="icos-upload"></i></div>
                <h2>Profile Picture</h2> 
            </div>                    
            <div class="block">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                        <img src="{{url('img/noimg.gif')}}"/>
                    </div>
                    <div>
                        <span class="btn btn-file btn-primary">
                            <span class="fileupload-new">Select image</span>
                            <span class="fileupload-exists">Change</span>
                            <input type="file" /></span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}

@endsection