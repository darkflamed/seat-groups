<?php

namespace Herpaderpaldent\Seat\SeatGroups\Http\Controllers\Affiliation;

use Herpaderpaldent\Seat\SeatGroups\Actions\Ships\AddShipAffiliationAction;
use Herpaderpaldent\Seat\SeatGroups\Actions\Ships\RemoveShipAffiliationAction;
use Herpaderpaldent\Seat\SeatGroups\Http\Validation\Affiliation\AddShipAffiliationRequest;
use Herpaderpaldent\Seat\SeatGroups\Http\Validation\Affiliation\RemoveShipAffiliationRequest;

class SeatGroupShipsController
{
    public function removeShip(RemoveShipAffiliationRequest $request, RemoveShipAffiliationAction $action)
    {
        if($action->execute($request->all()))
            return redirect()->back()->with('success', 'removed');

        return redirect()->back()->with('warning', 'something went wrong');
    }

    public function addShipAffiliation(AddShipAffiliationRequest $request, AddShipAffiliationAction $action)
    {

        if ($action->execute($request->all())) {
            return redirect()->back()->with('success', 'Updated');
        }

        return redirect()->back()->with('warning', 'Ups something went wrong');

    }
}
