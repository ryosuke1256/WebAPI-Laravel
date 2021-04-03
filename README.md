# WebAPI-Laravel

リソースコントローラを使って API を作ってみる(JSON)  
今回は MySQL を使用しています。データベースは各々準備して.env ファイルを設定しておいてください

## Usage

`git clone https://github.com/ryosuke1256/WebAPI-Laravel.git`

**マイグレーションを実行**  
`php artisan migrate`  
**シーダーの実行**  
`php artisan db:seed`

### users テーブル

| Name       | Type         | Collation          | Extra          |
| ---------- | ------------ | ------------------ | -------------- |
| id         | int(10)      |                    | AUTO_INCREMENT |
| username   | varchar(191) | utf8mb4_unicode_ci |                |
| email      | varchar(191) | utf8mb4_unicode_ci |                |
| created_at | timestamp    |                    |                |
| updated_at | timestamp    |                    |                |

10 個のダミーデータが生成されます  
username と email は faker を使っています

### route list

+--------+-----------+------------------------------+------------------+-------------------------------------------------+------------+
| Domain | Method | URI | Name | Action | Middleware |
+--------+-----------+------------------------------+------------------+-------------------------------------------------+------------+
| | GET|HEAD | / | | Closure | web |
| | GET|HEAD | api/resource | resource.index | App\Http\Controllers\ResourceController@index | api |
| | POST | api/resource | resource.store | App\Http\Controllers\ResourceController@store | api |
| | GET|HEAD | api/resource/create | resource.create | App\Http\Controllers\ResourceController@create | api |
| | GET|HEAD | api/resource/{resource} | resource.show | App\Http\Controllers\ResourceController@show | api |
| | PUT|PATCH | api/resource/{resource} | resource.update | App\Http\Controllers\ResourceController@update | api |
| | DELETE | api/resource/{resource} | resource.destroy | App\Http\Controllers\ResourceController@destroy | api |
| | GET|HEAD | api/resource/{resource}/edit | resource.edit | App\Http\Controllers\ResourceController@edit | api |
+--------+-----------+------------------------------+------------------+-------------------------------------------------+------------+
