<?php

namespace App\Enums;

enum LendingStatus: string
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
    case ReturnRequested = 'return_requested';
    case Returned = 'returned';
    case Cancelled = 'cancelled';
}