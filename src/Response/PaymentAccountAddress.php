<?php

namespace Consilience\Starling\Payments\Response;

/**
 * Unique address of a payment account, this is UK account number
 * and sort code from which payments can be sent and received.
 */

use Consilience\Starling\Payments\HydratableTrait;
use Carbon\Carbon;

class PaymentAccountAddress implements \JsonSerializable
{
    use HydratableTrait;

    /**
     * @var string
     */
    const STATUS_ACTIVE         = 'ACTIVE';
    const STATUS_INSTRUCT_ONLY  = 'INSTRUCT_ONLY';
    const STATUS_CLOSED         = 'CLOSED';
    const STATUS_DECEASED       = 'DECEASED';

    /**
     * @var string UUID
     * Unique identifier of the company requesting or receiving the payment.
     */
    protected $paymentBusinessUid;

    /**
     * @var string UUID
     * Unique identifier of the account containing the funds sent or received.
     */
    protected $accountUid;

    /**
     * @var string UUID
     * Unique identifier of the payment account address.
     */
    protected $addressUid;

    /**
     * @var string e.g. 040030
     * Sort code for the account, used to receive payments into the account.
     */
    protected $sortCode;

    /**
     * @var string e.g. 11223344
     * Account number, used to receive payments into the account.
     */
    protected $accountNumber;

    /**
     * @var string date-time e.g. 2017-06-05T11:47:58.801Z
     * Date and time the account was first created.
     */
    protected $createdAt;

    /**
     * @var string
     * Name for the account, this will be included in outbound faster
     * payment messages to other recipients.
     */
    protected $accountName;

    /**
     * @var string one of static::STATUS_*
     * Status of the payment request.
     */
    protected $status;

    /**
     * @return Carbon the createdAt as a Carbon object, with timezone preserved.
     */
    public function getCreatedAtCarbon()
    {
        return Carbon::parse($this->createdAt);
    }
}