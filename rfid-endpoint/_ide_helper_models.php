<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\CardNumber
 *
 * @property int $id
 * @property string $rfid
 * @property int $employee_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Employee $employee
 * @method static \Database\Factories\CardNumberFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber query()
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber rfid($rfid)
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber whereRfid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardNumber whereUpdatedAt($value)
 */
	class CardNumber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Employee> $employees
 * @property-read int|null $employees_count
 * @method static \Database\Factories\DepartmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Department id($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Department name($name)
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department withCardNumbers()
 * @method static \Illuminate\Database\Eloquent\Builder|Department withEmployees()
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DepartmentEmployee
 *
 * @method static \Database\Factories\DepartmentEmployeeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentEmployee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentEmployee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentEmployee query()
 */
	class DepartmentEmployee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $full_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CardNumber> $cardNumbers
 * @property-read int|null $card_numbers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Department> $departments
 * @property-read int|null $departments_count
 * @method static \Database\Factories\EmployeeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Employee id($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee name($name)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee withDepartment()
 */
	class Employee extends \Eloquent {}
}

