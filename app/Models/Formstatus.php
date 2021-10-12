<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FormStatusKey
 * @property string $Name
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree[] $exonerees
 */
class Formstatus extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'formstatus';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FormStatusKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Name', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonerees()
    {
        return $this->hasMany('App\Exoneree', 'FormStatusKey', 'FormStatusKey');
    }
}
