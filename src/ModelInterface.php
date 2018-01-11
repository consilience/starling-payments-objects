<?php

namespace Consilience\Starling\Payments;

/**
 *
 */

interface ModelInterface extends \JsonSerializable
{
    /**
     * @var string
     */
    const FPS_CYCLE_001     = 'CYCLE_001';
    const FPS_CYCLE_002     = 'CYCLE_002';
    const FPS_CYCLE_003     = 'CYCLE_003';
    const FPS_CYCLE_UNKNOWN = 'CYCLE_UNKNOWN';

    /**
     * @var string
     */
    const PAYMENT_STATE_ACCEPTED = 'ACCEPTED';
    const PAYMENT_STATE_REJECTED = 'REJECTED';

    /**
     * @var string
     */
    const ACCOUNT_HOLDER_PAYMENT_BUSINESS   = 'PAYMENT_BUSINESS';
    const ACCOUNT_HOLDER_AGENCY             = 'AGENCY';

    /**
     * @var string account address status
     */
    const ADDRESS_STATUS_ACTIVE         = 'ACTIVE';
    const ADDRESS_STATUS_INSTRUCT_ONLY  = 'INSTRUCT_ONLY';
    const ADDRESS_STATUS_CLOSED         = 'CLOSED';
    const ADDRESS_STATUS_DECEASED       = 'DECEASED';

    /**
     * @var string
     */
    const DIRECTION_INBOUND     = 'INBOUND';
    const DIRECTION_OUTBOUND    = 'OUTBOUND';

    /**
     * @var string payment status
     */
    const PAYMENT_STATUS_PENDING    = 'PENDING';
    const PAYMENT_STATUS_ACCEPTED   = 'ACCEPTED';
    const PAYMENT_STATUS_REJECTED   = 'REJECTED';
    const PAYMENT_STATUS_REVERSED   = 'REVERSED';

    /**
     * @var string
     */
    const TYPE_SIP = 'SIP';
    const TYPE_SOP = 'SOP';
    const TYPE_FDP = 'FDP';
    const TYPE_SRN = 'SRN';
    const TYPE_RTN = 'RTN';
    const TYPE_DCA = 'DCA';

    /**
     * @var string
     */
    const BALANCE_STATE_IN_CREDIT = 'IN_CREDIT';
    const BALANCE_STATE_OVERDRAWN = 'OVERDRAWN';
}