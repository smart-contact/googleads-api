<?php

namespace App\Http\Controllers;

use App\GoogleAdsApi\GoogleAdsApiPerformanceReportInterface;
use Illuminate\Http\Request;

class GoogleAdsApiController extends Controller
{
    public function __invoke(GoogleAdsApiPerformanceReportInterface $googleAdsApi)
    {
        $during = [now()->toDateString(), now()->toDateString()];
        if(request()->route('date')) {
            $during = [request()->route('date'), request()->route('date')];
        }

        return ($googleAdsApi)
            ->setDuring($during)
            ->where('metrics.impressions', '>', 0)
            ->searchStream();
    }
}
