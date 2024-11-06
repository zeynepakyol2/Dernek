<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    public function index()
    {
        $donations = Campaign::where('status', 1)->orderBy('created_at', 'desc')->get();

//        return $donations->first()->donations;

        $colors = [
            '#ffa415', '#ff5528', '#8742e8', '#44c895', '#399be7', '#d340c3', '#44c895', '#399be7',
        ];
          // Rastgele anahtara karşılık gelen değeri alır

        return view('frontend.page.donations', compact('donations', 'colors'));
    }


    public function donation($id)
    {

    }
}
