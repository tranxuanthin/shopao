<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/campaign_simulation.proto

namespace Google\Ads\GoogleAds\V8\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign simulation. Supported combinations of advertising
 * channel type, simulation type and simulation modification
 * method is detailed below respectively.
 * SEARCH - CPC_BID - UNIFORM
 * SEARCH - CPC_BID - SCALING
 * SEARCH - TARGET_CPA - UNIFORM
 * SEARCH - TARGET_CPA - SCALING
 * SEARCH - TARGET_ROAS - UNIFORM
 * SEARCH - TARGET_IMPRESSION_SHARE - UNIFORM
 * SEARCH - BUDGET - UNIFORM
 * SHOPPING - BUDGET - UNIFORM
 * SHOPPING - TARGET_ROAS - UNIFORM
 * MULTIPLE - TARGET_CPA - UNIFORM
 * OWNED_AND_OPERATED - TARGET_CPA - DEFAULT
 * DISPLAY - TARGET_CPA - UNIFORM
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.resources.CampaignSimulation</code>
 */
class CampaignSimulation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the campaign simulation.
     * Campaign simulation resource names have the form:
     * `customers/{customer_id}/campaignSimulations/{campaign_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Campaign id of the simulation.
     *
     * Generated from protobuf field <code>int64 campaign_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_id = 0;
    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.SimulationTypeEnum.SimulationType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $modification_method = 0;
    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>string start_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_date = '';
    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *
     * Generated from protobuf field <code>string end_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_date = '';
    protected $point_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the campaign simulation.
     *           Campaign simulation resource names have the form:
     *           `customers/{customer_id}/campaignSimulations/{campaign_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *     @type int|string $campaign_id
     *           Output only. Campaign id of the simulation.
     *     @type int $type
     *           Output only. The field that the simulation modifies.
     *     @type int $modification_method
     *           Output only. How the simulation modifies the field.
     *     @type string $start_date
     *           Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *     @type string $end_date
     *           Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *     @type \Google\Ads\GoogleAds\V8\Common\CpcBidSimulationPointList $cpc_bid_point_list
     *           Output only. Simulation points if the simulation type is CPC_BID.
     *     @type \Google\Ads\GoogleAds\V8\Common\TargetCpaSimulationPointList $target_cpa_point_list
     *           Output only. Simulation points if the simulation type is TARGET_CPA.
     *     @type \Google\Ads\GoogleAds\V8\Common\TargetRoasSimulationPointList $target_roas_point_list
     *           Output only. Simulation points if the simulation type is TARGET_ROAS.
     *     @type \Google\Ads\GoogleAds\V8\Common\TargetImpressionShareSimulationPointList $target_impression_share_point_list
     *           Output only. Simulation points if the simulation type is TARGET_IMPRESSION_SHARE.
     *     @type \Google\Ads\GoogleAds\V8\Common\BudgetSimulationPointList $budget_point_list
     *           Output only. Simulation points if the simulation type is BUDGET.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Resources\CampaignSimulation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the campaign simulation.
     * Campaign simulation resource names have the form:
     * `customers/{customer_id}/campaignSimulations/{campaign_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the campaign simulation.
     * Campaign simulation resource names have the form:
     * `customers/{customer_id}/campaignSimulations/{campaign_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. Campaign id of the simulation.
     *
     * Generated from protobuf field <code>int64 campaign_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * Output only. Campaign id of the simulation.
     *
     * Generated from protobuf field <code>int64 campaign_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCampaignId($var)
    {
        GPBUtil::checkInt64($var);
        $this->campaign_id = $var;

        return $this;
    }

    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.SimulationTypeEnum.SimulationType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.SimulationTypeEnum.SimulationType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\SimulationTypeEnum\SimulationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getModificationMethod()
    {
        return $this->modification_method;
    }

    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setModificationMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\SimulationModificationMethodEnum\SimulationModificationMethod::class);
        $this->modification_method = $var;

        return $this;
    }

    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>string start_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>string start_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *
     * Generated from protobuf field <code>string end_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *
     * Generated from protobuf field <code>string end_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is CPC_BID.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.CpcBidSimulationPointList cpc_bid_point_list = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\CpcBidSimulationPointList|null
     */
    public function getCpcBidPointList()
    {
        return $this->readOneof(7);
    }

    public function hasCpcBidPointList()
    {
        return $this->hasOneof(7);
    }

    /**
     * Output only. Simulation points if the simulation type is CPC_BID.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.CpcBidSimulationPointList cpc_bid_point_list = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\CpcBidSimulationPointList $var
     * @return $this
     */
    public function setCpcBidPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\CpcBidSimulationPointList::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_CPA.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TargetCpaSimulationPointList target_cpa_point_list = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\TargetCpaSimulationPointList|null
     */
    public function getTargetCpaPointList()
    {
        return $this->readOneof(8);
    }

    public function hasTargetCpaPointList()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_CPA.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TargetCpaSimulationPointList target_cpa_point_list = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\TargetCpaSimulationPointList $var
     * @return $this
     */
    public function setTargetCpaPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\TargetCpaSimulationPointList::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_ROAS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TargetRoasSimulationPointList target_roas_point_list = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\TargetRoasSimulationPointList|null
     */
    public function getTargetRoasPointList()
    {
        return $this->readOneof(9);
    }

    public function hasTargetRoasPointList()
    {
        return $this->hasOneof(9);
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_ROAS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TargetRoasSimulationPointList target_roas_point_list = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\TargetRoasSimulationPointList $var
     * @return $this
     */
    public function setTargetRoasPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\TargetRoasSimulationPointList::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_IMPRESSION_SHARE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TargetImpressionShareSimulationPointList target_impression_share_point_list = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\TargetImpressionShareSimulationPointList|null
     */
    public function getTargetImpressionSharePointList()
    {
        return $this->readOneof(10);
    }

    public function hasTargetImpressionSharePointList()
    {
        return $this->hasOneof(10);
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_IMPRESSION_SHARE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TargetImpressionShareSimulationPointList target_impression_share_point_list = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\TargetImpressionShareSimulationPointList $var
     * @return $this
     */
    public function setTargetImpressionSharePointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\TargetImpressionShareSimulationPointList::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is BUDGET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.BudgetSimulationPointList budget_point_list = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\BudgetSimulationPointList|null
     */
    public function getBudgetPointList()
    {
        return $this->readOneof(11);
    }

    public function hasBudgetPointList()
    {
        return $this->hasOneof(11);
    }

    /**
     * Output only. Simulation points if the simulation type is BUDGET.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.BudgetSimulationPointList budget_point_list = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\BudgetSimulationPointList $var
     * @return $this
     */
    public function setBudgetPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\BudgetSimulationPointList::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPointList()
    {
        return $this->whichOneof("point_list");
    }

}

