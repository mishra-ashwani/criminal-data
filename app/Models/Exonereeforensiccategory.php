<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ExonereeForensicCategoryKey
 * @property int $ExonereeKey
 * @property int $ForensicCategoryKey
 * @property int $NAReasonKey
 * @property string $DtChanged
 * @property boolean $Active
 * @property Exoneree $exoneree
 * @property Forensiccategory $forensiccategory
 */
class Exonereeforensiccategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'exonereeforensiccategory';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ExonereeForensicCategoryKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ExonereeKey', 'ForensicCategoryKey', 'NAReasonKey', 'DtChanged', 'Active'];

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
    public function forensiccategory()
    {
        return $this->belongsTo('App\Forensiccategory', 'ForensicCategoryKey', 'ForensicCategoryKey');
    }
}
