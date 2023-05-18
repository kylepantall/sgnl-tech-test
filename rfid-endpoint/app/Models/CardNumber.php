<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class CardNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'rfid',
        'employee_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function scopeRfid($query, $rfid)
    {
        return $query->where('rfid', $rfid);
    }
}
