@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="active">Daftar Guru</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Daftar Guru</h2>
					</div>

					<div class="panel-body">
					<p> <a href="{{ route('gurus.create') }}" class="btn btn-success btn-sm"> Tambah</a></p>
						{!! $html->table(['class'=>'table table-bordered']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection