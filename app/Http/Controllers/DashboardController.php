<?php

namespace App\Http\Controllers;

use App\Services\StatisticsService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(private readonly StatisticsService $statisticsService)
    {
    }

    public function getSales()
    {
        return $this->statisticsService->getSales();
    }

}