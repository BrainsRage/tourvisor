<?php

namespace Tourvisor\Models;


/**
 * @property string $state
 * @property int $progress
 * @property int $requestid
 * @property int $hotelsfound
 * @property int $toursfound
 * @property int $minprice
 * @property int $maxprice
 * @property int $timepassed
 */
class SearchStatus extends AbstractModel
{
    public function isSearching(): bool
    {
        return $this->state === 'searching';
    }
}