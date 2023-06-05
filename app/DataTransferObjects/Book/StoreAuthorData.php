<?php

namespace App\DataTransferObjects\Book;

use Spatie\LaravelData\Data;

class StoreAuthorData extends Data
{
    /**
     * @param string $name
     * @param int|null $age
     */
    public function __construct(
        public readonly string $name,
        public readonly ?int   $age,
    )
    {
    }


    /**
     * @return string[]
     */
    public static function rules(): array
    {
        return [
            'name' => 'required|string|min:10|max:30|unique:authors,name'
        ];
    }
}
