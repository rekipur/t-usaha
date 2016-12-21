@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashbord</a></li>
					<li><a href="{{ url('/admin/gurus') }}">Guru</a></li>
					<li class="active">Ubah Penulis</li>
				</ul>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h2 class="panel-title">Ubah Penulis</h2>
					</div>
					
					<div class="panel-body">
						{!! Form::model($guru, ['url'=>route('gurus.update', $guru->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}
						@include('gurus._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection