<?php

namespace App\Services\Books;

use App\DataTransferObjects\Book\StoreAuthorData;
use App\Models\Author;
use Illuminate\Database\Eloquent\Collection;

interface AuthorService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param StoreAuthorData $storeAuthorData
     * @return Author
     */
    public function create(StoreAuthorData $storeAuthorData): Author;
}
