@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/admin/gurus') }}">Guru</a></li>
					<li class="active">Tambah Guru</li>
				</ul>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Tambah Guru</h2>
					</div>

					<div class="panel-body">
						{!! Form::open(['url'=>route('gurus.store'), 'method'=>'post', 'class'=>'form-horizontal']) !!}
						@include('gurus._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection