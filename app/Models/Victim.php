<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $VictimKey
 * @property int $ExonereeKey
 * @property int $SortOrder
 * @property int $DateOfBirthDay
 * @property int $DateOfBirthMonth
 * @property int $DateOfBirthYear
 * @property string $DateOfBirthBates
 * @property int $DateOfBirthNAReasonKey
 * @property int $RaceKey
 * @property string $RaceBates
 * @property int $RaceNAReasonKey
 * @property string $Gender
 * @property string $GenderBates
 * @property int $GenderNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 * @property Race $race
 */
class Victim extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'victim';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'VictimKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExonereeKey', 'SortOrder', 'DateOfBirthDay', 'DateOfBirthMonth', 'DateOfBirthYear', 'DateOfBirthBates', 'DateOfBirthNAReasonKey', 'RaceKey', 'RaceBates', 'RaceNAReasonKey', 'Gender', 'GenderBates', 'GenderNAReasonKey', 'DtChanged', 'Active'];

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
}
