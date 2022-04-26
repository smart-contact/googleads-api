<?php

namespace App\GoogleAdsApi;

use App\GoogleAdsApi\GoogleAdsApiPerformanceReportInterface;

class GoogleAdsCampaignPerformanceReport extends \SmartContact\LaravelGoogleAds\GoogleAdsReport implements GoogleAdsApiPerformanceReportInterface
{
    protected $columns = [
        'campaign.name',
        'campaign.status',
        'metrics.cost_micros',
        'metrics.clicks',
        'metrics.impressions',
        'metrics.search_impression_share',
        'metrics.absolute_top_impression_percentage',
        'metrics.top_impression_percentage',
        'metrics.clicks',
        'metrics.all_conversions',
        'metrics.conversions',
        'segments.device',
        'segments.ad_network_type'
    ];

    protected $report_name = "campaign";
}
