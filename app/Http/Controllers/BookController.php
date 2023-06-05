<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\Book\StoreBookData;
use App\Http\Resources\BookCollection;
use App\Models\Book;
use App\Services\Books\BookService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function __construct(protected BookService $bookService)
    {
    }

    /**
     * @return BookCollection
     */
    public function index()
    {
        return new BookCollection($this->bookService->index());
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json(Book::findOrfail($id));
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json(Book::findOrfail($id)->delete(), 204);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json(Book::create(StoreBookData::from($request)->toArray()));
    }

    /**
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $book = Book::findOrfail($id);
        $book->isbn = $request->isbn;
        $book->language = $request->language;
        $book->name = $request->name;
        $book->pages = $request->pages;
        $book->save();
        return response()->json($book);
    }
}
