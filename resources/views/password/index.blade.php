@extends('layouts.guest')

@section('content')

<div class="container mt-4">
  <h3>パスワード一覧</h3>
</div>

<br>

<div class="container">
  <form action="{{ route('password.index') }}" method="get">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
    
  </form>
  
</div>

<br>

<div class="container">
  <table class="table table-borderd">
    <thead>
      <tr>
        <th>ID</th>
        <th>ユーザー</th>
        <th>説明</th>
        <th>アカウント</th>
        <th>メールアドレス</th>
        <th>パスワード</th>
        <th>メモ</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($passwords as $password)
        <tr>
          <td>{{ $password->id }}</td>
          <td>{{ $password->user_id}}</td>
          <td>{{ $password->title }}</td>
          <td>{{ $password->account }}</td>
          <td>{{ $password->email }}</td>
          <td>{{ $password->password }}</td>
          <td>{{ $password->memo }}</td>
        </tr>
      @empty
        <p>該当するキーワードはありません。</p>
      @endforelse
    </tbody>
  </table>
</div>

<div class="container">
  <div class="d-flex justify-content-end">
    <a href="{{ route('password.index') }}"><一覧を表示></a>
  </div>
</div>

@endsection