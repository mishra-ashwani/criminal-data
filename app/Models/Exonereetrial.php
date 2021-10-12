<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeKey
 * @property int $TrialStartDateDay
 * @property int $TrialStartDateMonth
 * @property int $TrialStartDateYear
 * @property string $TrialStartDateBates
 * @property int $TrialStartDatesNAReasonKey
 * @property int $TrialEndDateDay
 * @property int $TrialEndDateMonth
 * @property int $TrialEndDateYear
 * @property string $TrialEndDateBates
 * @property int $TrialEndDateNAReaonKey
 * @property int $TrialVerdictDateDay
 * @property int $TrialVerdictDateMonth
 * @property int $TrialVerdictDateYear
 * @property string $TrialVerdictDateBates
 * @property int $TrialVerdictDateNAReasonKey
 * @property int $TrialSentenceDateDay
 * @property int $TrialSentenceDateMonth
 * @property int $TrialSentenceDateYear
 * @property string $TrialSentenceDateBates
 * @property int $TrialSentenceDateNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 */
class Exonereetrial extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereetrial';

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
    protected $fillable = ['TrialStartDateDay', 'TrialStartDateMonth', 'TrialStartDateYear', 'TrialStartDateBates', 'TrialStartDatesNAReasonKey', 'TrialEndDateDay', 'TrialEndDateMonth', 'TrialEndDateYear', 'TrialEndDateBates', 'TrialEndDateNAReaonKey', 'TrialVerdictDateDay', 'TrialVerdictDateMonth', 'TrialVerdictDateYear', 'TrialVerdictDateBates', 'TrialVerdictDateNAReasonKey', 'TrialSentenceDateDay', 'TrialSentenceDateMonth', 'TrialSentenceDateYear', 'TrialSentenceDateBates', 'TrialSentenceDateNAReasonKey', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exoneree()
    {
        return $this->belongsTo('App\Exoneree', 'ExonereeKey', 'ExonereeKey');
    }
}
