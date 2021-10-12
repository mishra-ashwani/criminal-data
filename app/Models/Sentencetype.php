<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $SentenceTypeKey
 * @property string $Name
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exonereesentence[] $exonereesentences
 */
class Sentencetype extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sentencetype';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'SentenceTypeKey';

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
    public function exonereesentences()
    {
        return $this->hasMany('App\Exonereesentence', 'SentenceTypeKey', 'SentenceTypeKey');
    }
}
