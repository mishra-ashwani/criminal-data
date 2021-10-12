<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeForensicAreaKey
 * @property int $ExonereeKey
 * @property int $ForensicAreaKey
 * @property string $Bates
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 * @property Forensicarea $forensicarea
 */
class Exonereeforensicarea extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereeforensicarea';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ExonereeForensicAreaKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExonereeKey', 'ForensicAreaKey', 'Bates', 'DtChanged', 'Active'];

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
    public function forensicarea()
    {
        return $this->belongsTo('App\Forensicarea', 'ForensicAreaKey', 'ForensicAreaKey');
    }
}
