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

        $columns = request()->has('columns') ? request()->columns : [];
        return ($googleAdsApi)
            ->select($columns)
            ->setDuring($during)
//            ->where(request()->column, request()->operator, request()->value)
            ->searchStream();
    }
}
