<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeKey
 * @property boolean $Forensic
 * @property string $ForensicBates
 * @property string $ForensicInfo
 * @property int $ForensicNAReasonKey
 * @property boolean $ForensicExpert
 * @property string $ForensicExpertBates
 * @property int $ForensicExpertNAReasonKey
 * @property boolean $ForensicExpertProsecution
 * @property string $ForensicExpertProsecutionBates
 * @property string $ForensicWitnessName
 * @property string $ForensicWitnessNameBates
 * @property string $DtChanged
 * @property boolean $Active
 * @property string $ForensicExpertFor
 * @property Exoneree $exoneree
 */
class Exonereeforensicdatum extends Model
{
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
    protected $fillable = ['Forensic', 'ForensicBates', 'ForensicInfo', 'ForensicNAReasonKey', 'ForensicExpert', 'ForensicExpertBates', 'ForensicExpertNAReasonKey', 'ForensicExpertProsecution', 'ForensicExpertProsecutionBates', 'ForensicWitnessName', 'ForensicWitnessNameBates', 'DtChanged', 'Active', 'ForensicExpertFor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exoneree()
    {
        return $this->belongsTo('App\Exoneree', 'ExonereeKey', 'ExonereeKey');
    }
}
