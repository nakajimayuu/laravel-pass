@extends('layouts.guest')

@section('content')

<div class="container">
  <form action="{{ route('password.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">タイトル</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="account" class="form-label">アカウント</label>
      <input type="text" class="form-control" id="account" name="account">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">パスワード</label>
      <input type="text" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">メールアドレス</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="memo" class="form-label">メモ</label>
      <textarea class="form-control" id="memo" name="memo"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">登録する</button>
  </form>
</div>

@endsection