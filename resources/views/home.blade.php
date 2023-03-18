@extends('layouts.guest')

@section('content')

<div class="container mt-4">
  <h3>HOME</h3>
</div>

<div class="container">
	<div class="d-flex justify-content-center">
  	<img src="{{ asset('img/home_img.jpg') }}">
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="d-flex justify-content-center">
			<button class="m-3 py-3 px-5 btn-dark"><a href="{{ route('password.index') }}" class="text-decoration-none text-light">検索</a></button>
			<button class="m-3 py-3 px-5 btn-dark"><a href="{{ route('password.create') }}" class="text-decoration-none text-light">生成</a></button>
			<button class="m-3 py-3 px-5 btn-dark"><a href="{{ route('password.entry') }}" class="text-decoration-none text-light">登録</a></button>
			<button class="m-3 py-3 px-5 btn-dark"><a href="{{ route('login') }}" class="text-decoration-none text-light">ログイン</a></button>
		</div>
	</div>
</div>

@endsection