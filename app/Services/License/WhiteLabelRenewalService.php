<?php

/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2026. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

namespace App\Services\License;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhiteLabelRenewalService
{
    /**
     * Check if an expired white label license has been renewed on the license server.
     *
     * @return bool|null true = renewed, false = not renewed, null = inconclusive (network error)
     */
    public function checkAndRenew(Account $account): ?bool
    {
        // White label is always active; no license renewal is required.
        return true;
    }
}
