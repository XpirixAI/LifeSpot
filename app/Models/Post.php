<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // https://www.itsolutionstuff.com/post/laravel-generate-unique-slug-exampleexample.html
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($post) {
    //         $post->slug = $post->createSlug($post->title);
    //         $post->save();
    //     });
    // }

    // private function createSlug($title){
    //     if (static::whereSlug($slug = Str::slug($title))->exists()) {
    //         $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');

    //         if (is_numeric($max[-1])) {
    //             return preg_replace_callback('/(\d+)$/', function ($matches) {
    //                 return $matches[1] + 1;
    //             }, $max);
    //         }

    //         return "{$slug}-2";
    //     }

    //     return $slug;
    // }

    public function scopeFilter($query, array $filters)
    {
        // $query->when($filters['author'] ?? false, fn($query, $author)=>
        //     $query->whereHas('author'. fn($query) =>
        //         $query->where('name', $author)
        //     )
        // );

        //     $query->when($filters['search'] ?? false, fn($query, $search)=>
        //         $query->where(fn($query)=>
        //             $query
        //                 ->where('title', 'like', '%' . $search . '%')
        //                 ->orwhere('excerpt', 'like', '%' . $search . '%')
        //                 ->orwhere('body', 'like', '%' . $search . '%')
        //         )
        //     );

        //     $query->when($filters['category'] ?? false, fn($query, $category) =>
        //         $query->whereHas('category', fn ($query) =>
        //             $query->where('name', $category)
        //         )
        //     );

        //     $query->when($filters['author'] ?? false, fn($query, $author) =>
        //         $query->whereHas('author', fn ($query) =>
        //             $query->where('uname', $author)
        //     )
        // );

        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query) =>
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('excerpt', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
                // ->orWhere('categories', function ($query) use ($search) {
                //     $query->where('name', 'like', '%' . $search . '%');
                // })

                    // Category::whereHas('name', function ($query) use ($customer_name) {
                    //     $query->where('name', 'like', '%'.$customer_name.'%');
                    // })->get();
            )

        );

        //     $query->when($filters['category'] ?? false, fn($query, $category) =>
        //     $query->where(fn($query) =>
        //         $query->where('name', 'like', '%' . $category . '%')
        //             ->orWhere('slug', 'like', '%' . $category . '%')
        //     )
        // );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $category)
            )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('uname', $author)
            )
        );



    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
