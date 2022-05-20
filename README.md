# Criteo API SDK for PHP

## Introduction
API Client Libraries can facilitate your use of the Criteo API allowing you to build unique and customized solutions to serve your businesses and clients.
These libraries can reduce the amount of code you need to write in order to start accessing Criteo programmatically. They also can help expedite troubleshooting, should you encounter any issues.

More information: [https://developers.criteo.com/marketing-solutions/docs/php-api-client-library](https://developers.criteo.com/marketing-solutions/docs/php-api-client-library)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- Package version: 2022.04.0.220520
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.1 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

either run the following command: `composer require criteo/criteo-api-marketingsolutions-sdk:2022.04.0.220520`

or add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/criteo/criteo-api-marketingsolutions-php-sdk.git"
    }
  ],
  "require": {
    "criteo/criteo-api-marketingsolutions-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/criteo-api-marketingsolutions-sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer run-script test
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$clientId = 'YOUR_CLIENT_ID';
$clientSecret = 'YOUR_CLIENT_SECRET';

// Automatic token refresh
$apiInstance = new criteo\api\marketingsolutions\v2022_04\Api\AdvertiserApi(new criteo\api\marketingsolutions\v2022_04\TokenAutoRefreshClient($clientId, $clientSecret));


try {
$result = $apiInstance->apiPortfolioGet();
print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->apiPortfolioGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

You can find the full example [here](examples/).

## Documentation for API Endpoints

All URIs are relative to *https://api.criteo.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertiserApi* | [**apiPortfolioGet**](docs/Api/AdvertiserApi.md#apiportfolioget) | **GET** /2022-04/advertisers/me | 
*AnalyticsApi* | [**getAdsetReport**](docs/Api/AnalyticsApi.md#getadsetreport) | **POST** /2022-04/statistics/report | 
*AnalyticsApi* | [**getPlacementsReport**](docs/Api/AnalyticsApi.md#getplacementsreport) | **POST** /2022-04/placements/report | 
*AnalyticsApi* | [**getTransactionsReport**](docs/Api/AnalyticsApi.md#gettransactionsreport) | **POST** /2022-04/transactions/report | 
*AnalyticsApi* | [**getTransparencyReport**](docs/Api/AnalyticsApi.md#gettransparencyreport) | **POST** /2022-04/log-level/advertisers/{advertiser-id}/report | 
*AudienceApi* | [**createAudience**](docs/Api/AudienceApi.md#createaudience) | **POST** /2022-04/audiences | 
*AudienceApi* | [**deleteIdentifiers**](docs/Api/AudienceApi.md#deleteidentifiers) | **DELETE** /2022-04/audiences/{audience-id}/contactlist | 
*AudienceApi* | [**getAudiences**](docs/Api/AudienceApi.md#getaudiences) | **GET** /2022-04/audiences | 
*AudienceApi* | [**modifyAudience**](docs/Api/AudienceApi.md#modifyaudience) | **PATCH** /2022-04/audiences/{audience-id} | 
*AudienceApi* | [**modifyAudienceUsers**](docs/Api/AudienceApi.md#modifyaudienceusers) | **PATCH** /2022-04/audiences/{audience-id}/contactlist | 
*AudienceApi* | [**removeAudience**](docs/Api/AudienceApi.md#removeaudience) | **DELETE** /2022-04/audiences/{audience-id} | 
*CampaignApi* | [**getAdSet**](docs/Api/CampaignApi.md#getadset) | **GET** /2022-04/marketing-solutions/ad-sets/{adSetId} | 
*CampaignApi* | [**getCampaign**](docs/Api/CampaignApi.md#getcampaign) | **GET** /2022-04/marketing-solutions/campaigns/{campaign-id} | 
*CampaignApi* | [**getCategoryBidList**](docs/Api/CampaignApi.md#getcategorybidlist) | **GET** /2022-04/marketing-solutions/ad-sets/{ad-set-id}/category-bids | 
*CampaignApi* | [**getDisplayMultipliers**](docs/Api/CampaignApi.md#getdisplaymultipliers) | **GET** /2022-04/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers | 
*CampaignApi* | [**patchAdSets**](docs/Api/CampaignApi.md#patchadsets) | **PATCH** /2022-04/marketing-solutions/ad-sets | 
*CampaignApi* | [**patchCampaigns**](docs/Api/CampaignApi.md#patchcampaigns) | **PATCH** /2022-04/marketing-solutions/campaigns | 
*CampaignApi* | [**patchCategoryBidList**](docs/Api/CampaignApi.md#patchcategorybidlist) | **PATCH** /2022-04/marketing-solutions/ad-sets/{ad-set-id}/category-bids | 
*CampaignApi* | [**patchDisplayMultipliers**](docs/Api/CampaignApi.md#patchdisplaymultipliers) | **PATCH** /2022-04/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers | 
*CampaignApi* | [**searchAdSets**](docs/Api/CampaignApi.md#searchadsets) | **POST** /2022-04/marketing-solutions/ad-sets/search | 
*CampaignApi* | [**searchCampaigns**](docs/Api/CampaignApi.md#searchcampaigns) | **POST** /2022-04/marketing-solutions/campaigns/search | 
*CampaignApi* | [**startAdSets**](docs/Api/CampaignApi.md#startadsets) | **POST** /2022-04/marketing-solutions/ad-sets/start | 
*CampaignApi* | [**stopAdSets**](docs/Api/CampaignApi.md#stopadsets) | **POST** /2022-04/marketing-solutions/ad-sets/stop | 
*GatewayApi* | [**getCurrentApplication**](docs/Api/GatewayApi.md#getcurrentapplication) | **GET** /me | 
*OAuthApi* | [**getToken**](docs/Api/OAuthApi.md#gettoken) | **POST** /oauth2/token | Creates a token based either on supplied client credentials or on single use authorization code


## Documentation For Models

 - [AccessTokenModel](docs/Model/AccessTokenModel.md)
 - [AdSetCategoryBid](docs/Model/AdSetCategoryBid.md)
 - [AdSetCategoryBidListResponse](docs/Model/AdSetCategoryBidListResponse.md)
 - [AdSetCategoryBidResource](docs/Model/AdSetCategoryBidResource.md)
 - [AdSetDeliveryLimitations](docs/Model/AdSetDeliveryLimitations.md)
 - [AdSetDisplayMultiplier](docs/Model/AdSetDisplayMultiplier.md)
 - [AdSetDisplayMultiplierListResponse](docs/Model/AdSetDisplayMultiplierListResponse.md)
 - [AdSetDisplayMultiplierResource](docs/Model/AdSetDisplayMultiplierResource.md)
 - [AdSetFrequencyCapping](docs/Model/AdSetFrequencyCapping.md)
 - [AdSetGeoLocation](docs/Model/AdSetGeoLocation.md)
 - [AdSetSearchFilter](docs/Model/AdSetSearchFilter.md)
 - [AdSetTargeting](docs/Model/AdSetTargeting.md)
 - [AdSetTargetingRule](docs/Model/AdSetTargetingRule.md)
 - [ApplicationSummaryModel](docs/Model/ApplicationSummaryModel.md)
 - [ApplicationSummaryModelResource](docs/Model/ApplicationSummaryModelResource.md)
 - [ApplicationSummaryModelResponse](docs/Model/ApplicationSummaryModelResponse.md)
 - [Audience](docs/Model/Audience.md)
 - [AudienceAttributes](docs/Model/AudienceAttributes.md)
 - [AudienceError](docs/Model/AudienceError.md)
 - [AudienceNameDescription](docs/Model/AudienceNameDescription.md)
 - [AudienceWarning](docs/Model/AudienceWarning.md)
 - [BasicAudienceDefinition](docs/Model/BasicAudienceDefinition.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CampaignListResponse](docs/Model/CampaignListResponse.md)
 - [CampaignReadResource](docs/Model/CampaignReadResource.md)
 - [CampaignResponse](docs/Model/CampaignResponse.md)
 - [CampaignSearchFilters](docs/Model/CampaignSearchFilters.md)
 - [CampaignSearchRequest](docs/Model/CampaignSearchRequest.md)
 - [CampaignSpendLimit](docs/Model/CampaignSpendLimit.md)
 - [CommonProblem](docs/Model/CommonProblem.md)
 - [ContactlistAmendment](docs/Model/ContactlistAmendment.md)
 - [ContactlistAmendmentAttributes](docs/Model/ContactlistAmendmentAttributes.md)
 - [ContactlistAmendmentRequest](docs/Model/ContactlistAmendmentRequest.md)
 - [ContactlistOperation](docs/Model/ContactlistOperation.md)
 - [ContactlistOperationAttributes](docs/Model/ContactlistOperationAttributes.md)
 - [CriteoApiError](docs/Model/CriteoApiError.md)
 - [CriteoApiWarning](docs/Model/CriteoApiWarning.md)
 - [DeleteAudienceContactListResponse](docs/Model/DeleteAudienceContactListResponse.md)
 - [DeleteAudienceResponse](docs/Model/DeleteAudienceResponse.md)
 - [EntityOfPortfolioMessage](docs/Model/EntityOfPortfolioMessage.md)
 - [ErrorCodeResponse](docs/Model/ErrorCodeResponse.md)
 - [ErrorMessage](docs/Model/ErrorMessage.md)
 - [GetAudiencesResponse](docs/Model/GetAudiencesResponse.md)
 - [GetPortfolioResponse](docs/Model/GetPortfolioResponse.md)
 - [ModifyAudienceResponse](docs/Model/ModifyAudienceResponse.md)
 - [NewAudience](docs/Model/NewAudience.md)
 - [NewAudienceAttributes](docs/Model/NewAudienceAttributes.md)
 - [NewAudienceRequest](docs/Model/NewAudienceRequest.md)
 - [NewAudienceResponse](docs/Model/NewAudienceResponse.md)
 - [NillableAdSetTargetingRule](docs/Model/NillableAdSetTargetingRule.md)
 - [NillableDateTime](docs/Model/NillableDateTime.md)
 - [NillableDecimal](docs/Model/NillableDecimal.md)
 - [OAuthErrorModel](docs/Model/OAuthErrorModel.md)
 - [PatchAdSet](docs/Model/PatchAdSet.md)
 - [PatchAdSetBidding](docs/Model/PatchAdSetBidding.md)
 - [PatchAdSetBudget](docs/Model/PatchAdSetBudget.md)
 - [PatchAdSetCategoryBid](docs/Model/PatchAdSetCategoryBid.md)
 - [PatchAdSetCategoryBidListRequest](docs/Model/PatchAdSetCategoryBidListRequest.md)
 - [PatchAdSetCategoryBidResource](docs/Model/PatchAdSetCategoryBidResource.md)
 - [PatchAdSetCategoryBidResultListResponse](docs/Model/PatchAdSetCategoryBidResultListResponse.md)
 - [PatchAdSetCategoryBidResultResource](docs/Model/PatchAdSetCategoryBidResultResource.md)
 - [PatchAdSetDisplayMultiplier](docs/Model/PatchAdSetDisplayMultiplier.md)
 - [PatchAdSetDisplayMultiplierListRequest](docs/Model/PatchAdSetDisplayMultiplierListRequest.md)
 - [PatchAdSetDisplayMultiplierResource](docs/Model/PatchAdSetDisplayMultiplierResource.md)
 - [PatchAdSetDisplayMultiplierResultListResponse](docs/Model/PatchAdSetDisplayMultiplierResultListResponse.md)
 - [PatchAdSetDisplayMultiplierResultResource](docs/Model/PatchAdSetDisplayMultiplierResultResource.md)
 - [PatchAdSetScheduling](docs/Model/PatchAdSetScheduling.md)
 - [PatchCampaign](docs/Model/PatchCampaign.md)
 - [PatchCampaignListRequest](docs/Model/PatchCampaignListRequest.md)
 - [PatchCampaignSpendLimit](docs/Model/PatchCampaignSpendLimit.md)
 - [PatchCampaignWriteResource](docs/Model/PatchCampaignWriteResource.md)
 - [PatchResultCampaignListResponse](docs/Model/PatchResultCampaignListResponse.md)
 - [PatchResultCampaignReadResource](docs/Model/PatchResultCampaignReadResource.md)
 - [PlacementsReportQueryDataMessage](docs/Model/PlacementsReportQueryDataMessage.md)
 - [PlacementsReportQueryEntityMessage](docs/Model/PlacementsReportQueryEntityMessage.md)
 - [PlacementsReportQueryMessage](docs/Model/PlacementsReportQueryMessage.md)
 - [PortfolioMessage](docs/Model/PortfolioMessage.md)
 - [ProblemDetails](docs/Model/ProblemDetails.md)
 - [ReadAdSet](docs/Model/ReadAdSet.md)
 - [ReadAdSetBidding](docs/Model/ReadAdSetBidding.md)
 - [ReadAdSetBudget](docs/Model/ReadAdSetBudget.md)
 - [ReadAdSetSchedule](docs/Model/ReadAdSetSchedule.md)
 - [ReadModelAdSetId](docs/Model/ReadModelAdSetId.md)
 - [ReadModelReadAdSet](docs/Model/ReadModelReadAdSet.md)
 - [ReplaceAudience](docs/Model/ReplaceAudience.md)
 - [ReplaceAudienceRequest](docs/Model/ReplaceAudienceRequest.md)
 - [ReplaceAudienceResponse](docs/Model/ReplaceAudienceResponse.md)
 - [RequestAdSetSearch](docs/Model/RequestAdSetSearch.md)
 - [RequestsAdSetId](docs/Model/RequestsAdSetId.md)
 - [RequestsPatchAdSet](docs/Model/RequestsPatchAdSet.md)
 - [ResponseAdSetId](docs/Model/ResponseAdSetId.md)
 - [ResponseReadAdSet](docs/Model/ResponseReadAdSet.md)
 - [ResponsesAdSetId](docs/Model/ResponsesAdSetId.md)
 - [ResponsesReadAdSet](docs/Model/ResponsesReadAdSet.md)
 - [StatisticsReportQueryMessage](docs/Model/StatisticsReportQueryMessage.md)
 - [TransactionsReportQueryDataMessage](docs/Model/TransactionsReportQueryDataMessage.md)
 - [TransactionsReportQueryEntityMessage](docs/Model/TransactionsReportQueryEntityMessage.md)
 - [TransactionsReportQueryMessage](docs/Model/TransactionsReportQueryMessage.md)
 - [TransparencyQueryMessage](docs/Model/TransparencyQueryMessage.md)
 - [TransparencyReportAttributes](docs/Model/TransparencyReportAttributes.md)
 - [TransparencyReportDataMessage](docs/Model/TransparencyReportDataMessage.md)
 - [TransparencyReportEntityMessage](docs/Model/TransparencyReportEntityMessage.md)
 - [TransparencyReportFile](docs/Model/TransparencyReportFile.md)
 - [WriteModelAdSetId](docs/Model/WriteModelAdSetId.md)
 - [WriteModelPatchAdSet](docs/Model/WriteModelPatchAdSet.md)


## Documentation For Authorization

In order to ease usage of this client library, you might want to use the TokenAutoRefreshClient
as explained in the [example](examples/).




### oauth


- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A


## Author
[Criteo](https://www.criteo.com/)

## Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

