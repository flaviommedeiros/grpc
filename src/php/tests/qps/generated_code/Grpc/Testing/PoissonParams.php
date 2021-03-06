<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/control.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Parameters of poisson process distribution, which is a good representation
 * of activity coming in from independent identical stationary sources.
 * </pre>
 *
 * Protobuf type <code>grpc.testing.PoissonParams</code>
 */
class PoissonParams extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The rate of arrivals (a.k.a. lambda parameter of the exp distribution).
     * </pre>
     *
     * <code>double offered_load = 1;</code>
     */
    private $offered_load = 0.0;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Control::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The rate of arrivals (a.k.a. lambda parameter of the exp distribution).
     * </pre>
     *
     * <code>double offered_load = 1;</code>
     */
    public function getOfferedLoad()
    {
        return $this->offered_load;
    }

    /**
     * <pre>
     * The rate of arrivals (a.k.a. lambda parameter of the exp distribution).
     * </pre>
     *
     * <code>double offered_load = 1;</code>
     */
    public function setOfferedLoad($var)
    {
        GPBUtil::checkDouble($var);
        $this->offered_load = $var;
    }

}

