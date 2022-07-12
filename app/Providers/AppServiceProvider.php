<?php

namespace App\Providers;


use App\GoogleAdsApi\GoogleAdsAdGroupPerformanceReport;
use App\GoogleAdsApi\GoogleAdsApiPerformanceReportInterface;
use App\GoogleAdsApi\GoogleAdsCampaignPerformanceReport;
use App\GoogleAdsApi\GoogleAdsClickViewPerformanceReport;
use App\GoogleAdsApi\GoogleAdsKeywordPerformanceReport;
use App\GoogleAdsApi\GoogleAdsLandingPageViewPerformanceReport;
use App\GoogleAdsApi\GoogleAdsPlacementViewPerformanceReport;

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
              case 'keyword_view': return new GoogleAdsKeywordPerformanceReport(request()->account); break;
              case 'landing-page-view': return new GoogleAdsLandingPageViewPerfaormanceReport(request()->account); break;
              case 'click-view': return new GoogleAdsClickViewPerformanceReport(request()->account); break;
          }
       });
    }
}
