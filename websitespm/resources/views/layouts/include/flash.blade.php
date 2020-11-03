      	@if(session()->has('flash_message.message'))
      	<div class="alert alert-{{ session()->get('flash_message.warna') }} alert-dismissible" role="alert">
      		<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
      		{{!! session()->get('flash_message.message') !!}}
      	</div>
      	@endif