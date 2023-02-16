<?php

namespace App\Http\Controllers;

use App\Http\Requests\DailyRequest;
use App\Models\Daily;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailyController extends Controller
{
    public static function store(DailyRequest $request)
    {
        $daily = new Daily();
        $daily->title = $request->input("title");
        $daily->daily = $request->input("daily");
        return $daily->save();
    }

    public function show(Daily $daily)
    {
        $dateStart = Carbon::now()->subMonth();
        $dateEnd = Carbon::now();
        $dailys = DB::select("SELECT * FROM daily WHERE created_at >= ? AND created_at <= ?", [$dateStart,$dateEnd]);
        return $dailys;
    }

    public function destroy($id)
    {
        return Daily::destroy($id);
    }
}
