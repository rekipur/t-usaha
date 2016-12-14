<div class="form-group{{ $errors->has('nama') ? ' has-error':'' }}">
	{!! Form::label('nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('jabatan') ? ' has-error':'' }}">
	{!! Form::label('jabatan', 'Jabatan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('jabatan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('email', 'E-mail', ['class'=>'col-md-4 control-label']) !!}
	<div class="col-md-6">
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div> 

<div class="form-group{{ $errors->has('alamat') ? 'has-error' : '' }}">
    {!! Form::label('alamat', 'Alamat', ['class'=>'col-md-4 control-label']) !!}
	<div class="col-md-6">
        {!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div> 

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn info']) !!}
	</div>
</div>