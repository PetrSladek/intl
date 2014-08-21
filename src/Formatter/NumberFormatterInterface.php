<?php

namespace CommerceGuys\Intl\Formatter;

use CommerceGuys\Intl\Currency\CurrencyInterface;

interface NumberFormatterInterface
{
    /* Format style constants */
    const DECIMAL = 1;
    const PERCENT = 2;
    const CURRENCY = 3;
    const CURRENCY_ACCOUNTING = 4;

    /* Currency display style constants */
    const CURRENCY_DISPLAY_SYMBOL = 1;
    const CURRENCY_DISPLAY_CODE = 2;

    /**
     * Formats a number.
     *
     * Please note that the provided value should already be rounded.
     * This formatter doesn't do any rounding of its own, and will simply
     * truncate extra digits.
     *
     * @param string $value The value to format.
     *
     * @return string
     */
    public function format($value);

    /**
     * Formats a currency value.
     *
     * Please note that the provided value should already be rounded.
     * This formatter doesn't do any rounding of its own, and will simply
     * truncate extra digits.
     *
     * @param string $value The value to format.
     * @param CommerceGuys\Intl\Currency\CurrencyInterface $currency The currency.
     *
     * @return string
     */
    public function formatCurrency($value, CurrencyInterface $currency);

    /**
     * Gets the number format.
     *
     * @return CommerceGuys\Intl\NumberFormat\NumberFormatInterface
     */
    public function getNumberFormat();

    /**
     * Gets the minimum number of fraction digits.
     *
     * Defaults to 0 for decimal and percentage styles.
     * Defaults to null for currency styles, since the currency number of
     * fraction digits is used as the default in that case.
     *
     * @return integer
     */
    public function getMinimumFractionDigits();

    /**
     * Sets the minimum number of fraction digits.
     *
     * @param integer $minimumFractionDigits
     */
    public function setMinimumFractionDigits($minimumFractionDigits);

    /**
     * Gets the maximum number of fraction digits.
     *
     * Defaults to 3 for decimal and percentage styles.
     * Defaults to null for currency styles, since the currency number of
     * fraction digits is used as the default in that case.
     *
     * @return integer
     */
    public function getMaximumFractionDigits();

    /**
     * Sets the maximum number of fraction digits.
     *
     * @param integer $maximumFractionDigits
     */
    public function setMaximumFractionDigits($maximumFractionDigits);

    /**
     * Returns whether the major digits will be grouped.
     *
     * @return bool
     */
    public function isGroupingUsed();

    /**
     * Sets whether or not major digits should be grouped
     *
     * @param bool $groupingUsed
     */
    public function setGroupingUsed($groupingUsed);

    /**
     * Gets the currency display style.
     *
     * Controls whether a currency amount will be shown with the
     * currency symbol (CURRENCY_DISPLAY_SYMBOL) or the
     * currency code (CURRENCY_DISPLAY_CODE).
     *
     * @return integer
     */
    public function getCurrencyDisplay();

    /**
     * Sets the currency display style.
     *
     * @param integer $currencyDisplay One of the CURRENCY_DISPLAY_ constants.
     */
    public function setCurrencyDisplay($currencyDisplay);
}
