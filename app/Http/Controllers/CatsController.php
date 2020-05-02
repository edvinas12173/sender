<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \Cache;
use App\ViewCount;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Services\JsonLoggingService;

class CatsController extends Controller
{
    public function index($value)
    {
        if($value > 0 && $value < 1000001){
            $count = new ViewCount();
            $count->page_id = $value;
            $count->page_count = '1';
            $count->save();

            $findNcount = ViewCount::where('page_id', '=', $value)->count();
            $findAllcount = ViewCount::all();

            $CountAll = 0;

            foreach ($findAllcount as $all) {
                $CountAll = $CountAll + $all->page_count;
            }

            $N = $value;

            $Cache = Cache::remember($value, 60,
                function () use ($value) {
                    return $this->getRandomCats($value);
                });

            $cats = array();
            foreach ($Cache as $item) {
                array_push($cats, $item);
            }

            $datetime = date("y-M-d H:m:s");

            $data = json_encode(['datetime' => $datetime, 'N' => $N, 'Cats' => $cats, 'CountN' => $findNcount, 'CountAll' => $CountAll]);

            JsonLoggingService::log('log.json', $data);

            return view('randomcats', compact('N', 'findNcount', 'CountAll'))->with('Cache', $Cache);
        }
        else {
            return redirect('/');
        }
    }

    public function getRandomCats()
    {
        $f_contents = file('cats.txt');
        while(TRUE) {
            $line1 = $f_contents[array_rand($f_contents)];
            $line2 = $f_contents[array_rand($f_contents)];
            $line3 = $f_contents[array_rand($f_contents)];
            $Cat1 = $line1;
            $Cat2 = $line2;
            $Cat3 = $line3;
            if ($Cat1 != $Cat2 && $Cat1 != $Cat3 && $Cat2 != $Cat3){
                return compact('Cat1', 'Cat2', 'Cat3');
            }
        }
    }
}
