<?php

namespace Herpaderpaldent\Seat\SeatGroups\Actions\Ships;

use Herpaderpaldent\Seat\SeatGroups\Models\ShipsSeatgroups;

class AddShipAffiliationAction
{
    public function execute(array $data)
    {
        $seatgroup_id = $data['seatgroup_id'];

        foreach($data['ship_ids'] as $ship_id) {
            ShipsSeatgroups::updateOrCreate([
                'seatgroup_id' => $seatgroup_id,
                'ship_id' => $ship_id
            ]);
        }

        return true;

    }
}
