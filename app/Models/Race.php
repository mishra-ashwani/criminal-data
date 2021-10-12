<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $RaceKey
 * @property string $Name
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree[] $exonerees
 * @property Eyewitness[] $eyewitnesses
 * @property Victim[] $victims
 */
class Race extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'race';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'RaceKey';

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
        return $this->hasMany('App\Exoneree', 'RaceKey', 'RaceKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eyewitnesses()
    {
        return $this->hasMany('App\Eyewitness', 'RaceKey', 'RaceKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function victims()
    {
        return $this->hasMany('App\Victim', 'RaceKey', 'RaceKey');
    }
}
