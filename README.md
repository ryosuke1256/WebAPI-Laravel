# WebAPI-Laravel

リソースコントローラを使って API を作ってみる  
今回は MySQL を使用しています。データベースは各々準備して.env ファイルを設定しておいてください

### users

| Name       | Type         | Collation          | Extra          |
| ---------- | ------------ | ------------------ | -------------- |
| id         | int(10)      |                    | AUTO_INCREMENT |
| username   | varchar(191) | utf8mb4_unicode_ci |                |
| email      | varchar(191) | utf8mb4_unicode_ci |                |
| created_at | timestamp    |                    |                |
| updated_at | timestamp    |                    |                |

## Usage

`git clone https://github.com/ryosuke1256/WebAPI-Laravel.git`

マイグレーションを実行  
`php artisan migrate`  
シーダーの実行  
`php artisan db:seed`
