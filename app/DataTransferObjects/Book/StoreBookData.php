<?php

namespace App\DataTransferObjects\Book;

use Spatie\LaravelData\Data;

class StoreBookData extends Data
{
    /**
     * @param string $name
     * @param string $language
     * @param string $isbn
     * @param int $pages
     * @param int $author_id
     * @param int $url
     */
    public function __construct(
        public readonly string $name,
        public readonly string $language,
        public readonly string $isbn,
        public readonly int    $pages,
        public readonly int    $author_id,
        public readonly string    $url,
    )
    {
    }

    /**
     * @return string[]
     */
    public static function rules(): array
    {
        return [
            'name' => 'required|string|min:10|max:30',
            'author_id' => 'required|exists:authors,id',
        ];
    }
}
