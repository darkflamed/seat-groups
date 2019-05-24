<?php

namespace Herpaderpaldent\Seat\SeatGroups\Http\Validation\Affiliation;

use Illuminate\Foundation\Http\FormRequest;

class AddShipAffiliationRequest extends FormRequest
{
    /**
     * Authorize the request by default.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'ship_ids' => 'required|array',
            'seatgroup_id' => 'required',
        ];
    }
}
