<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $EyewitnessKey
 * @property int $ExonereeKey
 * @property int $RaceKey
 * @property string $RaceBates
 * @property int $RaceNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property int $PreTrialIdTypeNAReasonKey
 * @property int $SortOrder
 * @property Exoneree $exoneree
 * @property Race $race
 * @property Eyewitnesspretrialidtype[] $eyewitnesspretrialidtypes
 */
class Eyewitness extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'eyewitness';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'EyewitnessKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExonereeKey', 'RaceKey', 'RaceBates', 'RaceNAReasonKey', 'DtChanged', 'Active', 'PreTrialIdTypeNAReasonKey', 'SortOrder'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exoneree()
    {
        return $this->belongsTo('App\Exoneree', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function race()
    {
        return $this->belongsTo('App\Race', 'RaceKey', 'RaceKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eyewitnesspretrialidtypes()
    {
        return $this->hasMany('App\Eyewitnesspretrialidtype', 'EyewitnessKey', 'EyewitnessKey');
    }
}
