<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/common/policy.proto

namespace Google\Ads\GoogleAds\V9\Common\PolicyTopicConstraint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates that a resource's ability to serve in a particular country is
 * constrained.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.common.PolicyTopicConstraint.CountryConstraint</code>
 */
class CountryConstraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>optional string country_criterion = 2;</code>
     */
    protected $country_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country_criterion
     *           Geo target constant resource name of the country in which serving is
     *           constrained.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>optional string country_criterion = 2;</code>
     * @return string
     */
    public function getCountryCriterion()
    {
        return isset($this->country_criterion) ? $this->country_criterion : '';
    }

    public function hasCountryCriterion()
    {
        return isset($this->country_criterion);
    }

    public function clearCountryCriterion()
    {
        unset($this->country_criterion);
    }

    /**
     * Geo target constant resource name of the country in which serving is
     * constrained.
     *
     * Generated from protobuf field <code>optional string country_criterion = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCriterion($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_criterion = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CountryConstraint::class, \Google\Ads\GoogleAds\V9\Common\PolicyTopicConstraint_CountryConstraint::class);

