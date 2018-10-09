<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This filter defines the allowed dates or date ranges for the media returned.
 * It's possible to pick a set of specific dates and a set of date ranges.
 *
 * Generated from protobuf message <code>google.photos.library.v1.DateFilter</code>
 */
class DateFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * List of dates that match the media items' creation date. A maximum of
     * 5 dates can be included per request.
     *
     * Generated from protobuf field <code>repeated .google.type.Date dates = 1;</code>
     */
    private $dates;
    /**
     * List of dates ranges that match the media items' creation date. A
     * maximum of 5 dates ranges can be included per request.
     *
     * Generated from protobuf field <code>repeated .google.photos.library.v1.DateRange ranges = 2;</code>
     */
    private $ranges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Date[]|\Google\Protobuf\Internal\RepeatedField $dates
     *           List of dates that match the media items' creation date. A maximum of
     *           5 dates can be included per request.
     *     @type \Google\Photos\Library\V1\DateRange[]|\Google\Protobuf\Internal\RepeatedField $ranges
     *           List of dates ranges that match the media items' creation date. A
     *           maximum of 5 dates ranges can be included per request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * List of dates that match the media items' creation date. A maximum of
     * 5 dates can be included per request.
     *
     * Generated from protobuf field <code>repeated .google.type.Date dates = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * List of dates that match the media items' creation date. A maximum of
     * 5 dates can be included per request.
     *
     * Generated from protobuf field <code>repeated .google.type.Date dates = 1;</code>
     * @param \Google\Type\Date[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Type\Date::class);
        $this->dates = $arr;

        return $this;
    }

    /**
     * List of dates ranges that match the media items' creation date. A
     * maximum of 5 dates ranges can be included per request.
     *
     * Generated from protobuf field <code>repeated .google.photos.library.v1.DateRange ranges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * List of dates ranges that match the media items' creation date. A
     * maximum of 5 dates ranges can be included per request.
     *
     * Generated from protobuf field <code>repeated .google.photos.library.v1.DateRange ranges = 2;</code>
     * @param \Google\Photos\Library\V1\DateRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Photos\Library\V1\DateRange::class);
        $this->ranges = $arr;

        return $this;
    }

}

