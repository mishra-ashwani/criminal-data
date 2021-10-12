<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeStatementKey
 * @property int $ExonereeKey
 * @property int $IncriminatingStatementTypeKey
 * @property string $OtherText
 * @property string $Bates
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 * @property Incriminatingstatementtype $incriminatingstatementtype
 */
class Exonereestatement extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereestatement';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ExonereeStatementKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExonereeKey', 'IncriminatingStatementTypeKey', 'OtherText', 'Bates', 'DtChanged', 'Active'];

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
    public function incriminatingstatementtype()
    {
        return $this->belongsTo('App\Incriminatingstatementtype', 'IncriminatingStatementTypeKey', 'IncriminatingStatementTypeKey');
    }
}
