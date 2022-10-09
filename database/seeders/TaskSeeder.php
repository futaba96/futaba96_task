<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //paramに配列を代入
        $param = [
            [
                'title' => 'テストタスク１',
                'body' => 'タスク１の内容',
            ],
            [
                'title' => 'テストタスク２',
                'body' => 'タスク２の内容',
            ]
        ];
        // DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
