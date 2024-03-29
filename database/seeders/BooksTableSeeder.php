<?php

namespace Database\Seeders;

use App\Models\API\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Story of Burma',
                'author' => 'Mr. John',
                'inventory' => 10,
                'price' => 2000,
            ],
            [
                'title' => 'Tree',
                'author' => 'Mrs. Maria',
                'inventory' => 10,
                'price' => 3000,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
