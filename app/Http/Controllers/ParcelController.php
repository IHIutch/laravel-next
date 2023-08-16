<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use App\Spiders\LaravelDocsSpider;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RoachPHP\Roach;
use RoachPHP\Spider\Configuration\Overrides;

class ParcelController extends Controller
{
    /**
     * Display the parcel information.
     */
    public function viewAll()
    {
        $parcels = Parcel::select('sbl', 'swis', 'address')->limit(10)->get();

        return Inertia::render('dashboard', [
            'parcels' => $parcels,
        ]);
    }

    /**
     * Update the parcel information.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        Roach::startSpider(
            LaravelDocsSpider::class,
            new Overrides(
                startUrls: ['https://roach-php.dev/docs/spiders']
            )
        );
        // $payload = $request->input();
        // print_r($items);
        exit;
        return Redirect::back();
    }
}
