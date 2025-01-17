<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id','slug','body'];

    // agar semua menjadi eage loading
    protected $with = ['author', 'category'];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void{
        // Filter by search
    $query->when(
        $filters['search'] ?? false,
        fn ($query, $search) => 
        $query->where('title', 'like', '%' . $search . '%')
    );

    // Filter by category
    $query->when(
        $filters['category'] ?? false,
        fn ($query, $category) => 
        $query->whereHas('category', fn ($query) =>
            $query->where('slug', $category))
    );

    // Filter by author
    $query->when(
        $filters['author'] ?? false,
        fn ($query, $author) => 
        $query->whereHas('author', fn ($query) =>
            $query->where('username', $author))
    );
    }
}
















