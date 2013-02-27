@layout('templates.login')

@section('content')
<div class="login">
    <div class="wrap">
        <h1>Welcome to the REIT Project</h1>
        {{HTML::link('login', 'Please login here', array('class' => 'btn btn-block'));}}
    </div>
</div>

@endsection