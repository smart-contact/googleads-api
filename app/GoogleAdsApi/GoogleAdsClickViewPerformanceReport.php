<?php

namespace App\GoogleAdsApi;

use App\GoogleAdsApi\GoogleAdsApiPerformanceReportInterface;

class GoogleAdsClickViewPerformanceReport extends \SmartContact\LaravelGoogleAds\GoogleAdsReport implements GoogleAdsApiPerformanceReportInterface
{
    protected $columns = [
        'campaign.resource_name',
        'campaign.id',
        'campaign.name',
        'ad_group.name',
        'ad_group.resource_name',
        'ad_group.base_ad_group',
        'ad_group.id',
        'ad_group.labels',
        'ad_group.status',
        'click_view.ad_group_ad',
        'click_view.gclid',
        'click_view.keyword',
        'click_view.resource_name',
        'click_view.keyword_info.match_type',
        'click_view.keyword_info.text',
        'click_view.ad_group_ad'
    ];

    protected $report_name = "click_view";
}
