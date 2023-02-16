<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\DailyController;
use App\Models\Daily;
use App\Models\Keyword;
use App\Models\Dailykeyword;
use App\Models\Design;

class StoreDailyMiddleware
{
    private $dailyId;

    public function handle(Request $request, Closure $next)
    {
        $daily = new Daily();
        $daily->title = $request->input("title");
        $daily->daily = $request->input("daily");
        $dailyController = new DailyController();
        $this->dailyId= $dailyController->store($daily);

        $request->whenHas('keywords', function ($keywords) {

            $idKeyWord = array();
            foreach($keywords as $key => $value)
            {
                $keyword = Keyword::create([
                    "word" => $value
                ]);
                array_push($idKeyWord,$keyword->id);
            }
            
            foreach($idKeyWord as $key=> &$value)
            {
                $value = [
                    'daily_id' => $this->dailyId,
                    'keyword_id' => $value,
                ];
            }

            Dailykeyword::insert($idKeyWord);
            

        });

        $request->whenHas('designs', function ($designs) {

            foreach($designs as $key => &$value)
            {
                $value = [
                    "design" => $value,
                    "daily_id" => $this->dailyId,
                    "created_at" => now(),
                    "updated_at" => now()
                ];
            }

            Design::insert($designs);
        });


        return $next($request);
    }
}
