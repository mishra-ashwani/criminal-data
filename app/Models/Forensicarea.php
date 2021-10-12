<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ForensicAreaKey
 * @property int $ForensicCategoryKey
 * @property string $Name
 * @property int $SortOrder
 * @property string $DtChanged
 * @property boolean $Active
 * @property Forensiccategory $forensiccategory
 * @property Exonereeforensicarea[] $exonereeforensicareas
 */
class Forensicarea extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'forensicarea';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ForensicAreaKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ForensicCategoryKey', 'Name', 'SortOrder', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function forensiccategory()
    {
        return $this->belongsTo('App\Forensiccategory', 'ForensicCategoryKey', 'ForensicCategoryKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonereeforensicareas()
    {
        return $this->hasMany('App\Exonereeforensicarea', 'ForensicAreaKey', 'ForensicAreaKey');
    }
}
