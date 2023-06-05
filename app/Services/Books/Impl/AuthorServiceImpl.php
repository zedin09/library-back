<?php

namespace App\Services\Books\Impl;

use App\DataTransferObjects\Book\StoreAuthorData;
use App\Models\Author;
use App\Services\Books\AuthorService;
use Illuminate\Database\Eloquent\Collection;

class AuthorServiceImpl implements AuthorService
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Author::orderBy('id', 'desc')->get();
    }

    /**
     * @param StoreAuthorData $storeAuthorData
     * @return Author
     */
    public function create(StoreAuthorData $storeAuthorData): Author
    {
        return Author::create($storeAuthorData->toArray());
    }
}
