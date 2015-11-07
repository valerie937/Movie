@extends('admin.layout')

@section('content')
<div class="container-fluid"> <div class="row page-title-row">
<div class="col-md-12">
<h3>Movie <small>&raquo; Add New Movie</small></h3>
      </div>
    </div>
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default"> <div class="panel-heading">
<h3 class="panel-title">New Movie Form</h3> </div>
<div class="panel-body">

{{-- {{ Html::post('admin/create',($errors->all()) }} --}}
{{-- {{Html::link_to('admin/create',($errors->all()))}} --}}
{{-- @extends('admin.partial.errors') --}}
{!! Form::open(['url' => 'admin'],array('class' => 'form-horizontal'))!!}

{{-- {{ url('/')}} --}}

{{-- <form class="form-horizontal" role="form" method="POST" action="/admin/store">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
<div class="form-group">
		{!! Form::label('title', 'Title',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
		{!! Form::label('image', 'Image',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('image', Input::old('image'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
		{!! Form::label('synopsis', 'Synopsis',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('synopsis', Input::old('synopsis'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
		{!! Form::label('slug', 'Slug',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('slug', Input::old('slug'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
		{!! Form::label('release_date', 'Release Date',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('release_date', Input::old('release_date'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
		{!! Form::label('director', 'Director',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('director', Input::old('director'), array('class' => 'form-control')) !!}
	</div>
</div>


<div class="form-group">
		{!! Form::label('writer_1', 'Writer',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('writer_1', Input::old('writer_1'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
		{!! Form::label('actor', 'Actor',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::text('actor', Input::old('actor'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
		{!! Form::label('rating', 'Rating',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::select('rating',array('G', 'PG', 'PG-13', 'R','NC-17'), Input::old('rating'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">

		{!! Form::label('categories', 'Categories',array('class' => 'col-md-3 control-label')) !!}
	<div class="col-md-8">
		{!! Form::select('categories', array('Drama', 'Action', 'Comedy', 'Suspense', 'Horror', 'Western', 'Romance'), Input::old('categories'), array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-7 col-md-offset-3">
		<div class="col-md-8">
			{!! Form::submit('Add New Movie', array('class' => 'btn btn-primary btn-md')) !!}
		</div>
</div>
	
{!! Form::close()!!}
</div>
@stop