<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeKey
 * @property string $BatesPrefix
 * @property string $LastName
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $BatesName
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
 * @property boolean $MentalHealth
 * @property string $MentalHealthDesc
 * @property string $MentalHealthBates
 * @property int $MentalHealthNAReasonKey
 * @property int $NumberOfVictims
 * @property string $NumberOfVictimsBates
 * @property int $NumberOfVictimsNAReasonKey
 * @property int $TotalEyewitnesses
 * @property string $TotalEyewitnessesBates
 * @property int $TotalEyewitnessesNAReasonKey
 * @property string $ConflictingInformation
 * @property int $FormStatusKey
 * @property int $CreatedByKey
 * @property int $LastModifiedByKey
 * @property string $DtCreated
 * @property string $DtPublished
 * @property string $DtChanged
 * @property boolean $Active
 * @property int $InnocenceProjectId
 * @property boolean $HasDocuments
 * @property string $MultipleTrialsInformation
 * @property string $DominoId
 * @property Formstatus $formstatus
 * @property Race $race
 * @property Charge[] $charges
 * @property Exonereecase $exonereecase
 * @property Exonereeforensicarea[] $exonereeforensicareas
 * @property Exonereeforensiccategory[] $exonereeforensiccategories
 * @property Exonereeforensicdatum $exonereeforensicdatum
 * @property Exonereeincrimination $exonereeincrimination
 * @property Exonereepretrial $exonereepretrial
 * @property Exonereesentence $exonereesentence
 * @property Exonereestatement[] $exonereestatements
 * @property Exonereetrial $exonereetrial
 * @property Eyewitness[] $eyewitnesses
 * @property Judicialinfo[] $judicialinfos
 * @property Victim[] $victims
 */
class Exoneree extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exoneree';

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
    protected $fillable = ['BatesPrefix', 'LastName', 'FirstName', 'MiddleName', 'BatesName', 'DateOfBirthDay', 'DateOfBirthMonth', 'DateOfBirthYear', 'DateOfBirthBates', 'DateOfBirthNAReasonKey', 'RaceKey', 'RaceBates', 'RaceNAReasonKey', 'Gender', 'GenderBates', 'GenderNAReasonKey', 'MentalHealth', 'MentalHealthDesc', 'MentalHealthBates', 'MentalHealthNAReasonKey', 'NumberOfVictims', 'NumberOfVictimsBates', 'NumberOfVictimsNAReasonKey', 'TotalEyewitnesses', 'TotalEyewitnessesBates', 'TotalEyewitnessesNAReasonKey', 'ConflictingInformation', 'FormStatusKey', 'CreatedByKey', 'LastModifiedByKey', 'DtCreated', 'DtPublished', 'DtChanged', 'Active', 'InnocenceProjectId', 'HasDocuments', 'MultipleTrialsInformation', 'DominoId'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formstatus()
    {
        return $this->belongsTo('App\Formstatus', 'FormStatusKey', 'FormStatusKey');
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
    public function charges()
    {
        return $this->hasMany('App\Charge', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exonereecase()
    {
        return $this->hasOne('App\Exonereecase', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonereeforensicareas()
    {
        return $this->hasMany('App\Exonereeforensicarea', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonereeforensiccategories()
    {
        return $this->hasMany('App\Exonereeforensiccategory', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exonereeforensicdatum()
    {
        return $this->hasOne('App\Exonereeforensicdatum', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exonereeincrimination()
    {
        return $this->hasOne('App\Exonereeincrimination', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exonereepretrial()
    {
        return $this->hasOne('App\Exonereepretrial', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exonereesentence()
    {
        return $this->hasOne('App\Exonereesentence', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonereestatements()
    {
        return $this->hasMany('App\Exonereestatement', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exonereetrial()
    {
        return $this->hasOne('App\Exonereetrial', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eyewitnesses()
    {
        return $this->hasMany('App\Eyewitness', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function judicialinfos()
    {
        return $this->hasMany('App\Judicialinfo', 'ExonereeKey', 'ExonereeKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function victims()
    {
        return $this->hasMany('App\Victim', 'ExonereeKey', 'ExonereeKey');
    }
}
