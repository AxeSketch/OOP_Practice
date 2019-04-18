<?php

namespace Bookstore\Domain\Customer;

use BookStore\Domain\Customer;

class Premium extends Customer
{
    public function getMonthlyFee()
    {
        return 10.0;
    }

    public function getAmountToBorrow()
    {
        return 10;
    }

    public function getType()
    {
        return 'Premium';
     }
}
