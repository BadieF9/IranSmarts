<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $fillable= [ 'imageSensor','effectivePixels','scanningSystem','electronicShutterSpeed','minimumIllumination','s/nRatio','irDistance','irOn/OffControl','irLEDs','audioIn','lensType','mountType','focalLength','maxAperture','angleOfView','focusControl','closeFocusDistance','rotation','pan','tilt','resolution','frameRate','videoOutput','day/night','osd','backlightCompensation','wdr','gainControl','noiseReduction','whiteBalance','smartIR','certifications','audioInterface','alarmI/O','powerSupply','powerConsumption','operatingConditions','storageConditions','vandalResistance','casing','dimensions','netWeight','grossWeight',
    ];
    public function product(){
     return $this->belongsTo(Product::class, 'products_id');
    }
}
