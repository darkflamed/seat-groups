<?php

namespace Herpaderpaldent\Seat\SeatGroups\Http\Validation\Affiliation;

use Illuminate\Foundation\Http\FormRequest;

class RemoveShipAffiliationRequest extends FormRequest
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
            'seatgroup_id' => 'required',
            'ship_id'   => 'required',
        ];
    }
}
