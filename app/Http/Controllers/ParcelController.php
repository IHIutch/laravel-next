<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDeleteRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Spiders\LaravelDocsSpider;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RoachPHP\Roach;
use RoachPHP\Spider\Configuration\Overrides;

class ParcelController extends Controller
{
    /**
     * Display the parcel information.
     */
    public function index()
    {
        return Inertia::render('test', [
            'test' => ['search', 'role', 'trashed'],
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
