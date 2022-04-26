<?php

namespace App\GoogleAdsApi;

use App\GoogleAdsApi\GoogleAdsApiPerformanceReportInterface;

class GoogleAdsLandingPageViewPerformanceReport extends \SmartContact\LaravelGoogleAds\GoogleAdsReport implements GoogleAdsApiPerformanceReportInterface
{
    protected $columns = [
        'campaign.name',
        'ad_group.name',
        'expanded_landing_page_view.expanded_final_url'
    ];

    protected $report_name = "landing_page_view";
}
