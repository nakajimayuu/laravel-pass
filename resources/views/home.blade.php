@extends('layouts.guest')

@section('content')

  <div class="container">
		<table class="table table-borderd">
			<thead>
				<tr>
					<th>ID</th>
					<th>説明</th>
					<th>アカウント</th>
					<th>メールアドレス</th>
					<th>パスワード</th>
					<th>メモ</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Gmail</td>
					<td>aaaa</td>
					<td>aaa@gmail.com</td>
					<td>最初のGmail</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Microsoft</td>
					<td>bbbb</td>
					<td>bbb@outlook.com</td>
					<td>最初のWindowsメール</td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection