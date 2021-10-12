<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeKey
 * @property int $PreTrialDateOfCrimeDay
 * @property int $PreTrialDateOfCrimeMonth
 * @property int $PreTrialDateOfCrimeYear
 * @property string $PreTrialDateOfCrimeBates
 * @property int $PreTrialDateOfCrimeNAReasonKey
 * @property int $PreTrialDateOfArrestDay
 * @property int $PreTrialDateOfArrestMonth
 * @property int $PreTrialDateOfArrestYear
 * @property string $PreTrialDateOfArrestBates
 * @property int $PreTrialDateOfArrestNAReasonKey
 * @property int $PreTrialDateOfIndictDay
 * @property int $PreTrialDateOfIndictMonth
 * @property int $PreTrialDateOfIndictYear
 * @property string $PreTrialDateOfIndictBates
 * @property int $PreTrialDateOfIndictNAReasonKey
 * @property int $PreTrialDateOfArraignDay
 * @property int $PreTrialDateOfArraignMonth
 * @property int $PreTrialDateOfArraignYear
 * @property string $PreTrialDateOfArraignBates
 * @property int $PreTrialDateOfArraignNAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 */
class Exonereepretrial extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereepretrial';

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
    protected $fillable = ['PreTrialDateOfCrimeDay', 'PreTrialDateOfCrimeMonth', 'PreTrialDateOfCrimeYear', 'PreTrialDateOfCrimeBates', 'PreTrialDateOfCrimeNAReasonKey', 'PreTrialDateOfArrestDay', 'PreTrialDateOfArrestMonth', 'PreTrialDateOfArrestYear', 'PreTrialDateOfArrestBates', 'PreTrialDateOfArrestNAReasonKey', 'PreTrialDateOfIndictDay', 'PreTrialDateOfIndictMonth', 'PreTrialDateOfIndictYear', 'PreTrialDateOfIndictBates', 'PreTrialDateOfIndictNAReasonKey', 'PreTrialDateOfArraignDay', 'PreTrialDateOfArraignMonth', 'PreTrialDateOfArraignYear', 'PreTrialDateOfArraignBates', 'PreTrialDateOfArraignNAReasonKey', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exoneree()
    {
        return $this->belongsTo('App\Exoneree', 'ExonereeKey', 'ExonereeKey');
    }
}
