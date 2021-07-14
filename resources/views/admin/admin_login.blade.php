@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header ">Login</div>
		<div class="card-body">

			@if ($errors->any())
			<div style="color:red;">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
			</div>
			@endif

			<form method="post" action="{{ url('admin/login') }}">
			@csrf 
			<div>
				ID: <input class="form-control" type="text" name="user_id" value="" />
			</div>
			<div>
				PASS: <input class="form-control" type="password" name="password" value="" />
			</div>
			<div class="form-group mt-2">
				
						<div class="form-check">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

								<label class="form-check-label" for="remember">
										{{ __('Remember Me') }}
								</label>
					
				</div>
		</div>

			<div class="mt-3">
				<input class="btn btn-dark" type="submit" value="Login" />
			</div>
			</form>

		</div>
	</div>
</div>
@endsection