<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Subscription as Subscription;

class SubscriptionsController extends Controller
{
    public function getSubscriptions()
    {
        $subscriptions = Subscription::all();
        return $subscriptions;
    }
}
