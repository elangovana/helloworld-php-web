<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Support\Facades\View;
// MoviesController.php
class MoviesController extends Controller {

    public function index()
    {
        //$movies = Movies:all();

        $movies =[];
        $movie = new Movies();
        $movie->name ="Hello";
        $movies[] = $movie;
        $movie = new Movies();
        $movie->name ="Spain";
        $movies[] = $movie;
        $movie = new Movies();
        $movie->name ="Magic monkey";
        $movies[] = $movie;
        return View::make('movies.index', compact('movies'));
    }

}
