<?php

namespace Tourvisor\Models;

/**
 * @property int $price
 * @property int $nights
 * @property int $operatorcode
 * @property string $operatorname
 * @property string $flydate
 * @property string $placement
 * @property int $adults
 * @property int $child
 * @property string $room
 * @property string $tourname
 * @property int $hotelstatus
 * @property int $mealcode
 * @property string $mealrussian
 * @property string $meal
 * @property int $tourid
 * @property int $currency
 * @property int $priceue
 * @property int $visa
 * @property int $fuelcharge
 */
class Tour extends AbstractModel
{
    protected $casts = [
        'tourid'          => 'integer',
        'hotelcode'       => 'integer',
        'hotelregioncode' => 'integer',
        'countrycode'     => 'integer',
        'departurecode'   => 'integer',
        'operatorcode'    => 'integer',
        'nights'          => 'integer',
        'adults'          => 'integer',
        'child'           => 'integer',
        'detailavailable' => 'boolean',
        'price'           => 'float',
        'priceue'         => 'float',
        'priceold'        => 'float',
        'fuelcharge'      => 'float',
        'visacharge'      => 'float',
        'hotelrating'     => 'float',
    ];
}