<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'isbn',
        'pages',
        'language',
        'author_id',
        'url',
    ];

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
