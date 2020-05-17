<?php

namespace App;

use Laravel\Cashier\Order\BaseOrderItemPreprocessor;
use Laravel\Cashier\Order\OrderItem;
use Laravel\Cashier\Order\OrderItemCollection;

class Metered extends BaseOrderItemPreprocessor
{
    const TIER = 1000;
    const FREE_CALLS = 2500;

    public function handle(OrderItemCollection $items)
    {
        $items->each(function (OrderItem $item) {
            $user = $item->owner;

            $nbOfCalls = $user->monthlyRequests();
            if($user->currentTeam) {
                // TODO: merge current team to allow this dev.
                $nbOfCalls = $user->currentTeam->monthlyRequests();
            }

            if($nbOfCalls % self::TIER > 0) {
                $nbOfCalls = ($nbOfCalls - ($nbOfCalls % 1000)) + self::TIER;
            }

            if($nbOfCalls <= 0) {
                $item->update(['unit_price' => 0]); // Do not invoice mollie
                OrderItem::destroy($item->id); // Then delete from database
                return;
            }

            $moneyOwed = $nbOfCalls / 1000;
            $item->quantity = (string) $moneyOwed;
            $item->save();
        });

        return $items;
    }
}
