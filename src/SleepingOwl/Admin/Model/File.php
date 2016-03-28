<?php
namespace SleepingOwl\Admin\Model;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Role
 *
 * @property integer        $id
 * @property string         $slug
 * @property string         $name
 * @property string         $permissions
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @mixin \Eloquent
 */
class File extends Model
{
    protected $table = 'files';

    protected $fillable = [
        'name',
        'sort',
        'value',
    ];

    public function __toString()
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }
}