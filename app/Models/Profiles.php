<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Name', 'Position', 'Description'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['ID'];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

    //
}
