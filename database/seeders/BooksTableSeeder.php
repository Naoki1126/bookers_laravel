<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('books')->trunscate();

        $books = [
                    [ "title" => "PHP Book",
                        "body" => "PHP入門書です。非常にわかりやすいです。"],
                    ["title" => "Ruby Book",
                        "body" => "Ruby 中級者向け本です。さまざまなメソッドが登場します。"]
                    ];

        foreach( $books as $book ){
            \App\Models\Book::create($book);
        }
    }
}
