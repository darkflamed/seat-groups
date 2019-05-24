<?php

namespace Herpaderpaldent\Seat\SeatGroups\Actions\Ships;

use Herpaderpaldent\Seat\SeatGroups\Models\ShipsSeatgroups;

class RemoveShipAffiliationAction
{
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function execute(array $data)
    {
        try{
            $group_id = $data['seatgroup_id'];
            $ship_id = $data['ship_id'];

            ShipsSeatgroups::where('seatgroup_id', $group_id)->where('ship_id', $ship_id)->delete();

            return true;

        } catch (\Exception $e) {
            return false;
        }

    }
}
