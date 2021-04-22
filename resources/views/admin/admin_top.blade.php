@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">管理側TOP</div>
		<div class="card-body">
			<div>
				<a href="{{ url('admin/user_list') }}" class="inline-flex mb-3 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-black">ユーザー一覧</a>
			</div>
		
			<form method="post" action="{{ url('admin/logout') }}">
				@csrf
				<input type="submit" class="inline-flex mb-3 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-red-500" value="ログアウト" />
			</form>
		</div>
	</div>
</div>
@endsection