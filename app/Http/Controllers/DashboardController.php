<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Carbon\Carbon;
use App\Http\Resources\DashboardResource;
use App\Models\Visit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getStatistics(Request $request)
    {

        $currentMonth = Carbon::now()->startOfMonth();
        $endOfMonth = $currentMonth->copy()->endOfMonth();

        $totalArticles = Article::whereMonth('created_at', $currentMonth->month)
            ->whereYear('created_at', $currentMonth->year)
            ->count();

        $totalVisits = Visit::whereBetween('created_at', [$currentMonth, $endOfMonth])->count();



        return response()->json([
            'message' => 'Dashboard statistics retrieved successfully',
            'data' => new DashboardResource($dashboardData),
        ]);
    }
}
