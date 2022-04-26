<?php

namespace App\Providers;


use App\GoogleAdsApi\GoogleAdsAdGroupPerformanceReport;
use App\GoogleAdsApi\GoogleAdsApiPerformanceReportInterface;
use App\GoogleAdsApi\GoogleAdsCampaignPerformanceReport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       $this->app->bind(GoogleAdsApiPerformanceReportInterface::class, function() {

          switch(request()->route('report')) {
              case 'campaign': return new GoogleAdsCampaignPerformanceReport(request()->account); break;
              case 'adgroup': return new GoogleAdsAdGroupPerformanceReport(request()->account); break;
          }
       });
    }
}
