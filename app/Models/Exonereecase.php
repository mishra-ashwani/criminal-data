<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeKey
 * @property int $CaseStateKey
 * @property string $CaseStateBates
 * @property int $CaseStateNAReasonKey
 * @property string $CaseNumber
 * @property string $CaseNumberBates
 * @property int $CaseNumberNAReasonKey
 * @property string $CaseCourt
 * @property string $CaseCourtBates
 * @property int $CaseCourtNAReasonKey
 * @property string $CaseCitation
 * @property string $CaseCitationBates
 * @property int $CaseCitationNAReasonKey
 * @property string $CaseSummary
 * @property string $CaseSummaryBates
 * @property int $CaseSummaryNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 * @property Usstate $usstate
 */
class Exonereecase extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereecase';

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
    protected $fillable = ['CaseStateKey', 'CaseStateBates', 'CaseStateNAReasonKey', 'CaseNumber', 'CaseNumberBates', 'CaseNumberNAReasonKey', 'CaseCourt', 'CaseCourtBates', 'CaseCourtNAReasonKey', 'CaseCitation', 'CaseCitationBates', 'CaseCitationNAReasonKey', 'CaseSummary', 'CaseSummaryBates', 'CaseSummaryNAReasonKey', 'DtChanged', 'Active'];

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
    public function usstate()
    {
        return $this->belongsTo('App\Usstate', 'CaseStateKey', 'USStateKey');
    }
}
