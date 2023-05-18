<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentEmployee
 *
 * @method static \Database\Factories\DepartmentEmployeeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentEmployee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentEmployee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentEmployee query()
 * @mixin \Eloquent
 */
class DepartmentEmployee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'department_id',
    ];
}
