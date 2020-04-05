<?php

namespace Delegation\Interfaces;

/**
 * Interface MessengerInterface
 * @package Delegation\Interfaces
 */
interface MessengerInterface
{
    /**
     * @param string $value
     *
     * @return mixed
     */
    public function setSender($value): MessengerInterface;

    /**
     * @param string $value
     *
     * @return mixed
     */
    public function setRecipient($value): MessengerInterface;

    /**
     * @param string $value
     *
     * @return mixed
     */
    public function setMessage($value): MessengerInterface;

    /**
     * @return bool
     */
    public function send(): bool;
}
