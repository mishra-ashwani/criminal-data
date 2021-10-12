<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $JudicialInfoKey
 * @property int $ExonereeKey
 * @property int $JudicialPhaseKey
 * @property string $Defense
 * @property string $DefenseInfo
 * @property string $DefenseBates
 * @property int $DefenseNAReasonKey
 * @property string $Prosecution
 * @property string $ProsecutionInfo
 * @property string $ProsecutionBates
 * @property int $ProscecutionNAReasonKey
 * @property string $TrialJudge
 * @property string $TrialJudgeInfo
 * @property string $TrialJudgeBates
 * @property int $TrialJudgeNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 * @property Judicialphase $judicialphase
 */
class Judicialinfo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'judicialinfo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'JudicialInfoKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExonereeKey', 'JudicialPhaseKey', 'Defense', 'DefenseInfo', 'DefenseBates', 'DefenseNAReasonKey', 'Prosecution', 'ProsecutionInfo', 'ProsecutionBates', 'ProscecutionNAReasonKey', 'TrialJudge', 'TrialJudgeInfo', 'TrialJudgeBates', 'TrialJudgeNAReasonKey', 'DtChanged', 'Active'];

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
    public function judicialphase()
    {
        return $this->belongsTo('App\Judicialphase', 'JudicialPhaseKey', 'JudicialPhaseKey');
    }
}
