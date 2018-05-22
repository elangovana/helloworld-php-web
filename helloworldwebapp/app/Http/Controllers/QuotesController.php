<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Quotes;
use Illuminate\Support\Facades\View;
//QuotesController.php
class QuotesController extends Controller {

    public function index()
    {
        //$quotes = Movies:all();
        $mockDb = [["Whatever the mind of man can conceive and believe, it can achieve.", "Napoleon Hill"]
,["Strive not to be a success, but rather to be of value.", "Albert Einstein"]
,["Two roads diverged in a wood, and I—I took the one less traveled by, And that has made all the difference.", "Robert Frost"]
,["I attribute my success to this: I never gave or took any excuse.", "Florence Nightingale"]
,["You miss 100% of the shots you don’t take.", "Wayne Gretzky"]
,["I’ve missed more than 9000 shots in my career. I’ve lost almost 300 games. 26 times I’ve been trusted to take the game winning shot and missed. I’ve failed over and over and over again in my life. And that is why I succeed.", "Michael Jordan"]
];
        $quotes =[];

        foreach($mockDb as $item) {
          $quote = new Quotes();
          $quote->name =$item[1];
          $quote->message =$item[0];
          $quotes[] = $quote;
        }

        //Simulate slow page.. Sleep for 5 seconds
        sleep(5);
        return View::make('quotes.index', compact('quotes'));
    }

}
