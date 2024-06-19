<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for restricting list of available resources in Workload environment.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.RestrictAllowedResourcesRequest</code>
 */
class RestrictAllowedResourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Workload. This is the workloads's
     * relative path in the API, formatted as
     * "organizations/{organization_id}/locations/{location_id}/workloads/{workload_id}".
     * For example,
     * "organizations/123/locations/us-east1/workloads/assured-workload-1".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The type of restriction for using gcp products in the Workload environment.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.RestrictAllowedResourcesRequest.RestrictionType restriction_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $restriction_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Workload. This is the workloads's
     *           relative path in the API, formatted as
     *           "organizations/{organization_id}/locations/{location_id}/workloads/{workload_id}".
     *           For example,
     *           "organizations/123/locations/us-east1/workloads/assured-workload-1".
     *     @type int $restriction_type
     *           Required. The type of restriction for using gcp products in the Workload environment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Workload. This is the workloads's
     * relative path in the API, formatted as
     * "organizations/{organization_id}/locations/{location_id}/workloads/{workload_id}".
     * For example,
     * "organizations/123/locations/us-east1/workloads/assured-workload-1".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Workload. This is the workloads's
     * relative path in the API, formatted as
     * "organizations/{organization_id}/locations/{location_id}/workloads/{workload_id}".
     * For example,
     * "organizations/123/locations/us-east1/workloads/assured-workload-1".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The type of restriction for using gcp products in the Workload environment.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.RestrictAllowedResourcesRequest.RestrictionType restriction_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getRestrictionType()
    {
        return $this->restriction_type;
    }

    /**
     * Required. The type of restriction for using gcp products in the Workload environment.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.RestrictAllowedResourcesRequest.RestrictionType restriction_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setRestrictionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AssuredWorkloads\V1beta1\RestrictAllowedResourcesRequest\RestrictionType::class);
        $this->restriction_type = $var;

        return $this;
    }

}

