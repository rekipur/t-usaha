@if(session()->has('flash_notification.message'))
	<div class="container">
		<div class="alert alert-{{ session()->get('flash_notification.level') }}" style="width: 50%;">
			<button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button>
			{!! session()->get('flash_notification.message') !!}
		</div>
	</div>
@endif