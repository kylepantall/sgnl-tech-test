<?php

namespace App\Http\Controllers;

use App\Http\Requests\RfidRequest;
use App\Models\CardNumber;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;

class EndpointController extends Controller
{
    public function show(RfidRequest $request): JsonResponse
    {
        $cardNumber = CardNumber::where('rfid', $request->cn)->first();

        if (!$cardNumber || !$cardNumber->employee) {
            return response()->json([
                'full_name' => null,
                'departments' => [],
            ]);
        }

        return response()->json([
            'full_name' => $cardNumber->employee->full_name,
            'departments' => $cardNumber->employee->departments->pluck('name'),
        ]);
    }
}
