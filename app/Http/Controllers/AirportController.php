<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AirportUpdateRequest;
use App\Models\Airport;
use App\Models\Country;
use App\Services\AirportService;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AirportController
{
    private AirportService $airportService;

    public function __construct(AirportService $airportService)
    {
        $this->airportService = $airportService;
    }

    public function index(): View
    {
        $countries = Country::orderBy('name')->get();
        $airports = $this->airportService->getAll();

        return view('airports.index', ['airports' => $airports, 'countries' => $countries]);
    }

    public function edit(Airport $airport): View
    {
//        dd($airport->country->name);
        $countries = Country::orderBy('name')->get();
        return view('airports.edit', ['airport' => $airport, 'countries' => $countries]);
    }

    public function update(AirportUpdateRequest $request, Airport $airport): RedirectResponse
    {
        $this->airportService->update($airport, $request->validated());

        return redirect()->route('airports.index', ['airport' => $airport]);
    }

    public function create()
    {
        $countries = Country::orderBy('name')->get();

        return view('airports.create', ['countries' => $countries]);
    }

    public function store(AirportUpdateRequest $request)
    {
        $this->airportService->create($request->validated());

        return redirect()->route('airports.index');
    }

    public function destroy(Airport $airport): RedirectResponse
    {
        $this->airportService->delete($airport);

        return redirect()->route('airports.index');
    }
}
