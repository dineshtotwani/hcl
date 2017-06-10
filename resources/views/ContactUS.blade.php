@extends('layouts.app')


@section('content')
<body>



<div class="container">
	
	 <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>
                <div class="panel-body">


	@if(Session::has('success'))
	    <div class="alert alert-success">
	      {{ Session::get('success') }}
	    </div>
	@endif

	{!! Form::open(['route'=>'contactus.store']) !!}

		<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}" class="col-md-6">
			{!! Form::label('First Name:') !!}
			{!! Form::text('first_name', old('first_name'), ['class'=>'form-control', 'placeholder'=>'Enter First Name','autocomplete' =>'off' ] ) !!}
			<span class="text-danger">{{ $errors->first('first_name') }}</span>
		</div>

		<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}" class="col-md-6">
			{!! Form::label('Last Name:') !!}
			{!! Form::text('last_name', old('last_name'), ['class'=>'form-control', 'placeholder'=>'Enter Last Name', 'autocomplete' =>'off']) !!}
			<span class="text-danger">{{ $errors->first('last_name') }}</span>
		</div>
		
		<div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}" class="col-md-6">
			{!! Form::label('Mobile:') !!}
			{!! Form::text('mobile', old('mobile'), ['class'=>'form-control', 'placeholder'=>'Enter Mobile number','autocomplete' =>'off']) !!}
			<span class="text-danger">{{ $errors->first('mobile') }}</span>
		</div>



		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" class="col-md-6">
			{!! Form::label('Email:') !!}
			{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email','autocomplete' =>'off']) !!}
			<span class="text-danger">{{ $errors->first('email') }}</span>
		</div>

		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}"class="col-md-6">
			{!! Form::label('Message:') !!}
			{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
			<span class="text-danger">{{ $errors->first('message') }}</span>
		</div>

		<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button class="btn btn-primary">Contact US!</button>
		</div>
		</div>

	{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>

@endsection