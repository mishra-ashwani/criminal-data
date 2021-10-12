<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ForensicCategoryKey
 * @property int $ForensicCategoryTabKey
 * @property string $Name
 * @property int $SortOrder
 * @property string $DtChanged
 * @property boolean $Active
 * @property Forensiccategorytab $forensiccategorytab
 * @property Exonereeforensiccategory[] $exonereeforensiccategories
 * @property Forensicarea[] $forensicareas
 */
class Forensiccategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'forensiccategory';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ForensicCategoryKey';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ForensicCategoryTabKey', 'Name', 'SortOrder', 'DtChanged', 'Active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function forensiccategorytab()
    {
        return $this->belongsTo('App\Forensiccategorytab', 'ForensicCategoryTabKey', 'ForensicCategoryTabKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exonereeforensiccategories()
    {
        return $this->hasMany('App\Exonereeforensiccategory', 'ForensicCategoryKey', 'ForensicCategoryKey');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function forensicareas()
    {
        return $this->hasMany('App\Forensicarea', 'ForensicCategoryKey', 'ForensicCategoryKey');
    }
}
