<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutomaticGateOpener extends Model
{

    protected $fillable = ['weight','dimensions','casing','maximumLeafLength','maximumLeafWeight','powerSupply','maximumPower','openingTime','maximumTravel','operatingSpeed','maximumThrust','protectionDegree','dutyCycle'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

}
