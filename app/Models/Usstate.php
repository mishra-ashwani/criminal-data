<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $USStateKey
 * @property string $Name
 * @property string $Abbreviation
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exonereecase[] $exonereecases
 */
class Usstate extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usstate';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'USStateKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Name', 'Abbreviation', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonereecases()
    {
        return $this->hasMany('App\Exonereecase', 'CaseStateKey', 'USStateKey');
    }
}
