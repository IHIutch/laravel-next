<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDeleteRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        $payload = $request->input();
        print_r($payload);
        exit;
        return Redirect::back();
    }
}
