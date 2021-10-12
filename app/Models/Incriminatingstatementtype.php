<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $IncriminatingStatementTypeKey
 * @property string $Name
 * @property int $SortOrder
 * @property string $DtChanged
 * @property boolean $Active
 * @property boolean $HasOtherText
 * @property Exonereestatement[] $exonereestatements
 */
class Incriminatingstatementtype extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'incriminatingstatementtype';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IncriminatingStatementTypeKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Name', 'SortOrder', 'DtChanged', 'Active', 'HasOtherText'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonereestatements()
    {
        return $this->hasMany('App\Exonereestatement', 'IncriminatingStatementTypeKey', 'IncriminatingStatementTypeKey');
    }
}
