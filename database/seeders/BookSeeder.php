<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author = new Author();
        $author->name = "Gabriel García Márquez";
        $author->save();

        $book = new Book();
        $book->isbn = '4332.234.234.234';
        $book->language = 'es';
        $book->url = 'https://panamericana.vtexassets.com/arquivos/ids/348536/cien-anos-de-soledad-9789585118010.jpg?v=637184983986530000';
        $book->name = 'Cien año de soledad';
        $book->pages = 600;
        $book->author_id = $author->id;
        $book->save();

        $book = new Book();
        $book->isbn = '4332.234.234.235';
        $book->language = 'es';
        $book->url = 'https://www.resumenlibro.com/img/libros/cronica-de-una-muerte-anunciada.jpg';
        $book->name = 'Crónica de una muerte anunciada';
        $book->pages = 200;
        $book->author_id = $author->id;
        $book->save();

        $book = new Book();
        $book->isbn = '4332.234.234.239';
        $book->language = 'es';
        $book->url = 'https://www.penguinlibros.com/co/1668110-large_default/relato-de-un-naufrago.jpg';
        $book->name = 'Relato de un náufrago';
        $book->pages = 134;
        $book->author_id = $author->id;
        $book->save();

        $author2 = new Author();
        $author2->name = "Miguel de Cervantes";
        $author2->save();

        $book = new Book();
        $book->isbn = '4332.234.234.567';
        $book->language = 'es';
        $book->url = 'https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2016/07/20201800/mejores-libros-Don-Quijote-sf.jpg';
        $book->name = 'Don Quijote de la Mancha';
        $book->pages = 765;
        $book->author_id = $author2->id;
        $book->save();
    }
}
