<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeKey
 * @property string $SentenceTotal
 * @property string $SentenceTotalBates
 * @property int $SentenceTotalNAReasonKey
 * @property int $SentenceTypeKey
 * @property string $SentenceTypeBates
 * @property int $SentenceTypeNAReasonKey
 * @property string $SentenceDetail
 * @property string $SentenceDetailBates
 * @property int $SentenceDetailNAReasonKey
 * @property int $ExonerationDateDay
 * @property int $ExonerationDateMonth
 * @property int $ExonerationDateYear
 * @property string $ExonerationDateBates
 * @property int $ExonerationDateNAReasonKey
 * @property boolean $DNAExoneration
 * @property string $DNAExonerationInfo
 * @property string $DNAExonerationBates
 * @property int $DNAExonerationNAReasonKey
 * @property string $TotalTimeServed
 * @property string $TotalTimeServedBates
 * @property int $TotalTimeServedNAReasonKey
 * @property int $TimePerConvictionNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 * @property Sentencetype $sentencetype
 */
class Exonereesentence extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereesentence';

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
    protected $fillable = ['SentenceTotal', 'SentenceTotalBates', 'SentenceTotalNAReasonKey', 'SentenceTypeKey', 'SentenceTypeBates', 'SentenceTypeNAReasonKey', 'SentenceDetail', 'SentenceDetailBates', 'SentenceDetailNAReasonKey', 'ExonerationDateDay', 'ExonerationDateMonth', 'ExonerationDateYear', 'ExonerationDateBates', 'ExonerationDateNAReasonKey', 'DNAExoneration', 'DNAExonerationInfo', 'DNAExonerationBates', 'DNAExonerationNAReasonKey', 'TotalTimeServed', 'TotalTimeServedBates', 'TotalTimeServedNAReasonKey', 'TimePerConvictionNAReasonKey', 'DtChanged', 'Active'];

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
    public function sentencetype()
    {
        return $this->belongsTo('App\Sentencetype', 'SentenceTypeKey', 'SentenceTypeKey');
    }
}
