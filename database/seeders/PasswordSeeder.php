<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Password;

class PasswordSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Password::truncate();
    // DB::table($tableName)->truncate();
    Password::create([
      'id' => '1',
      'title' => 'Gmail',
      'account' => 'aaa',
      'email' => 'aaa@gmail.com',
      'password' => '11111111',
      'memo' => '最初のGmail',
    ]);

   Password::create([
      'id' => '2',
      'title' => 'Microsoft',
      'account' => 'bbb',
      'email' => 'bbb@outlook.com',
      'password' => '22222222',
      'memo' => '最初のMicrosoft',
    ]);

    Password::create([
      'id' => '3',
      'title' => 'twitter',
      'account' => 'ccc',
      'email' => 'ccc@au.com',
      'password' => '33333333',
      'memo' => '最初のツイッター',
    ]);

    Password::create([
      'id' => '4',
      'title' => 'instagrm',
      'account' => 'ddd',
      'email' => 'ddd@docomo.co.jp',
      'password' => '44444444',
      'memo' => '最初のインスタグラム',
    ]);

    Password::create([
      'id' => '5',
      'title' => 'facebook',
      'account' => 'eee',
      'email' => 'eee@i.softbank.co.jp',
      'password' => '55555555',
      'memo' => '最初のフェイスブック',
    ]);

    Password::create([
      'id' => '6',
      'title' => 'Gmail',
      'account' => 'aaaaaa',
      'email' => 'aaaaaa@gmail.com',
      'password' => '66666666',
      'memo' => '2個目のGmail',
    ]);

   Password::create([
      'id' => '7',
      'title' => 'Microsoft',
      'account' => 'bbbbbb',
      'email' => 'bbbbbb@outlook.com',
      'password' => '77777777',
      'memo' => '2個目のMicrosoft',
    ]);

    Password::create([
      'id' => '8',
      'title' => 'twitter',
      'account' => 'cccccc',
      'email' => 'cccccc@au.com',
      'password' => '88888888',
      'memo' => '2個目のツイッター',
    ]);

    Password::create([
      'id' => '9',
      'title' => 'instagrm',
      'account' => 'dddddd',
      'email' => 'dddddd@docomo.co.jp',
      'password' => '99999999',
      'memo' => '2個目のインスタグラム',
    ]);

    Password::create([
      'id' => '10',
      'title' => 'facebook',
      'account' => 'eeeeee',
      'email' => 'eeeeee@i.softbank.co.jp',
      'password' => '101010101010101010',
      'memo' => '2個目のフェイスブック',
    ]);
       
  }
}
