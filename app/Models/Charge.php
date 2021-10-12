<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ChargeKey
 * @property int $ExonereeKey
 * @property string $Charge
 * @property string $CodeCites
 * @property string $ChargeBates
 * @property boolean $Convicted
 * @property string $SentenceLength
 * @property string $SentenceLengthBates
 * @property string $Time
 * @property string $TimeBates
 * @property int $SortOrder
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 */
class Charge extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'charge';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ChargeKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExonereeKey', 'Charge', 'CodeCites', 'ChargeBates', 'Convicted', 'SentenceLength', 'SentenceLengthBates', 'Time', 'TimeBates', 'SortOrder', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exoneree()
    {
        return $this->belongsTo('App\Exoneree', 'ExonereeKey', 'ExonereeKey');
    }
}
