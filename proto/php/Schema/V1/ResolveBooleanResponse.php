<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema/v1/schema.proto

namespace Schema\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response body for boolean flag evaluation. used by the ResolveBoolean rpc.
 *
 * Generated from protobuf message <code>schema.v1.ResolveBooleanResponse</code>
 */
class ResolveBooleanResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The response value of the boolean flag evaluation, will be unset in the case of error.
     *
     * Generated from protobuf field <code>bool value = 1 [json_name = "value"];</code>
     */
    protected $value = false;
    /**
     * The reason for the given return value, see https://docs.openfeature.dev/docs/specification/types#resolution-details
     *
     * Generated from protobuf field <code>string reason = 2 [json_name = "reason"];</code>
     */
    protected $reason = '';
    /**
     * The variant name of the returned flag value.
     *
     * Generated from protobuf field <code>string variant = 3 [json_name = "variant"];</code>
     */
    protected $variant = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $value
     *           The response value of the boolean flag evaluation, will be unset in the case of error.
     *     @type string $reason
     *           The reason for the given return value, see https://docs.openfeature.dev/docs/specification/types#resolution-details
     *     @type string $variant
     *           The variant name of the returned flag value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * The response value of the boolean flag evaluation, will be unset in the case of error.
     *
     * Generated from protobuf field <code>bool value = 1 [json_name = "value"];</code>
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The response value of the boolean flag evaluation, will be unset in the case of error.
     *
     * Generated from protobuf field <code>bool value = 1 [json_name = "value"];</code>
     * @param bool $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkBool($var);
        $this->value = $var;

        return $this;
    }

    /**
     * The reason for the given return value, see https://docs.openfeature.dev/docs/specification/types#resolution-details
     *
     * Generated from protobuf field <code>string reason = 2 [json_name = "reason"];</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * The reason for the given return value, see https://docs.openfeature.dev/docs/specification/types#resolution-details
     *
     * Generated from protobuf field <code>string reason = 2 [json_name = "reason"];</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * The variant name of the returned flag value.
     *
     * Generated from protobuf field <code>string variant = 3 [json_name = "variant"];</code>
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * The variant name of the returned flag value.
     *
     * Generated from protobuf field <code>string variant = 3 [json_name = "variant"];</code>
     * @param string $var
     * @return $this
     */
    public function setVariant($var)
    {
        GPBUtil::checkString($var, True);
        $this->variant = $var;

        return $this;
    }

}

