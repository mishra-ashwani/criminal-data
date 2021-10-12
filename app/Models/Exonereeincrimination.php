<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeKey
 * @property boolean $Confession
 * @property string $ConfessionInfo
 * @property string $ConfessionBates
 * @property int $ConfessionNAReasonKey
 * @property boolean $Snitch
 * @property int $SnitchNumTimes
 * @property boolean $SnitchDeal
 * @property string $SnitchInfo
 * @property string $SnitchBates
 * @property string $SnitchNumTimeBates
 * @property string $SnitchDealBates
 * @property int $SnitchNAReasonKey
 * @property int $SelfIncriminatingNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property int $SnitchDealNAReasonKey
 * @property Exoneree $exoneree
 */
class Exonereeincrimination extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereeincrimination';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ExonereeKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Confession', 'ConfessionInfo', 'ConfessionBates', 'ConfessionNAReasonKey', 'Snitch', 'SnitchNumTimes', 'SnitchDeal', 'SnitchInfo', 'SnitchBates', 'SnitchNumTimeBates', 'SnitchDealBates', 'SnitchNAReasonKey', 'SelfIncriminatingNAReasonKey', 'DtChanged', 'Active', 'SnitchDealNAReasonKey'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exoneree()
    {
        return $this->belongsTo('App\Exoneree', 'ExonereeKey', 'ExonereeKey');
    }
}
