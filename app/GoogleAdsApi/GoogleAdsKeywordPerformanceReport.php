<?php

namespace App\GoogleAdsApi;

use App\GoogleAdsApi\GoogleAdsApiPerformanceReportInterface;

class GoogleAdsKeywordPerformanceReport extends \SmartContact\LaravelGoogleAds\GoogleAdsReport implements GoogleAdsApiPerformanceReportInterface
{
    protected $columns = [
        'campaign.name',
        'ad_group.name',
        'ad_group_criterion.keyword.text',
        'ad_group_criterion.keyword.match_type',
        'metrics.cost_micros',
        'metrics.clicks',
        'metrics.impressions',
        'metrics.search_impression_share',
        'metrics.search_top_impression_share',
        'metrics.search_absolute_top_impression_share',
        'metrics.absolute_top_impression_percentage',
        'metrics.top_impression_percentage',
    ];

    protected $report_name = "keyword_view";
}
