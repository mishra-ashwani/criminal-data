<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $JudicialPhaseKey
 * @property string $Name
 * @property int $SortOrder
 * @property string $DtChanged
 * @property boolean $Active
 * @property Judicialinfo[] $judicialinfos
 */
class Judicialphase extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'judicialphase';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'JudicialPhaseKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Name', 'SortOrder', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function judicialinfos()
    {
        return $this->hasMany('App\Judicialinfo', 'JudicialPhaseKey', 'JudicialPhaseKey');
    }
}
