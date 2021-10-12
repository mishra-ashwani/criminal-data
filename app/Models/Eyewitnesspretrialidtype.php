<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $EyewitnessPreTrialIdTypeKey
 * @property int $EyewitnessKey
 * @property int $PreTrialIdTypeKey
 * @property string $Bates
 * @property string $DtChanged
 * @property boolean $Active
 * @property Eyewitness $eyewitness
 * @property Pretrialidtype $pretrialidtype
 */
class Eyewitnesspretrialidtype extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'eyewitnesspretrialidtype';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'EyewitnessPreTrialIdTypeKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['EyewitnessKey', 'PreTrialIdTypeKey', 'Bates', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eyewitness()
    {
        return $this->belongsTo('App\Eyewitness', 'EyewitnessKey', 'EyewitnessKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pretrialidtype()
    {
        return $this->belongsTo('App\Pretrialidtype', 'PreTrialIdTypeKey', 'PreTrialIdTypeKey');
    }
}
