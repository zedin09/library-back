<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\Book\StoreAuthorData;
use App\Http\Resources\AuthorResource;
use App\Services\Books\AuthorService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends Controller
{
    /**
     * @param AuthorService $authorService
     */
    public function __construct(protected AuthorService $authorService)
    {
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->authorService->index());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json(
            new AuthorResource(
                $this->authorService->create(StoreAuthorData::from($request))),
            Response::HTTP_CREATED
        );
    }
}
