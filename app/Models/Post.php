<?php
namespace App\Models;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post 
{
    public $title; //my first post => my-first-post
    public $slug;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $slug, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        
    }
    
    public static function all()
    {

      return collect(File::files(resource_path('posts')))

      ->map(fn($file) => YamlFrontMatter::parseFile($file))

      ->map(fn($document) => new Post(
          $document->title,
          $document->slug,
          $document->excerpt,
          $document->date,
          $document->body()  
      ))
      ->sortByDesc('date');
    }

    

  public static function find($slug)
  {
    return static::all()->firstWhere('slug', $slug);
   }
}