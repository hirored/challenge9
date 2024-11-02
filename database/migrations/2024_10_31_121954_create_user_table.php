<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // 自動増分の主キー
            $table->string('name'); // ユーザー名
            $table->string('email')->unique(); // メールアドレス（ユニーク制約付き）
            $table->string('password'); // パスワード
            $table->timestamps(); // created_at と updated_at のカラムを自動作成
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); // テーブルを削除するコマンド
    }
}
