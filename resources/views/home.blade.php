<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel2</title>
  @vite('resources/css/style.scss')
</head>

<body>
  
  <x-nav />

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

  @vite('resources/js/app.js')
</body>

</html>