<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema/v1/schema.proto

namespace GPBMetadata\Schema\V1;

class Schema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
schema/v1/schema.proto	schema.v1google/protobuf/empty.proto"e
ResolveBooleanRequest
flag_key (	RflagKey1
context (2.google.protobuf.StructRcontext"`
ResolveBooleanResponse
value (Rvalue
reason (	Rreason
variant (	Rvariant"d
ResolveStringRequest
flag_key (	RflagKey1
context (2.google.protobuf.StructRcontext"_
ResolveStringResponse
value (	Rvalue
reason (	Rreason
variant (	Rvariant"c
ResolveFloatRequest
flag_key (	RflagKey1
context (2.google.protobuf.StructRcontext"^
ResolveFloatResponse
value (Rvalue
reason (	Rreason
variant (	Rvariant"a
ResolveIntRequest
flag_key (	RflagKey1
context (2.google.protobuf.StructRcontext"\\
ResolveIntResponse
value (Rvalue
reason (	Rreason
variant (	Rvariant"d
ResolveObjectRequest
flag_key (	RflagKey1
context (2.google.protobuf.StructRcontext"x
ResolveObjectResponse-
value (2.google.protobuf.StructRvalue
reason (	Rreason
variant (	Rvariant"V
EventStreamResponse
type (	Rtype+
data (2.google.protobuf.StructRdata2�
ServiceW
ResolveBoolean .schema.v1.ResolveBooleanRequest!.schema.v1.ResolveBooleanResponse" T
ResolveString.schema.v1.ResolveStringRequest .schema.v1.ResolveStringResponse" Q
ResolveFloat.schema.v1.ResolveFloatRequest.schema.v1.ResolveFloatResponse" K

ResolveInt.schema.v1.ResolveIntRequest.schema.v1.ResolveIntResponse" T
ResolveObject.schema.v1.ResolveObjectRequest .schema.v1.ResolveObjectResponse" I
EventStream.google.protobuf.Empty.schema.v1.EventStreamResponse" 0BH
dev.openfeature.flagd.grpcZschema/service/v1�OpenFeature.Flagd.Grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

