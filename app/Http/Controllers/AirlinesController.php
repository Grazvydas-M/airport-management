<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AirlineUpdateRequest;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Country;
use App\Services\AirlineService;
use App\Services\AirportService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AirlinesController
{
    private AirlineService $airlineService;
    private AirportService $airportService;

    public function __construct(AirlineService $airlineService, AirportService $airportService)
    {
        $this->airlineService = $airlineService;
        $this->airportService = $airportService;

    }

    public function index(): View
    {
        $airlines = $this->airlineService->getAllAirlines();

        return view('airlines.index', ['airlines' => $airlines]);
    }

    public function edit(Airline $airline): View
    {
        $countries = Country::orderBy('name')->get();
        $airports = $this->airportService->getAll();

        return view('airlines.edit', ['airline' => $airline, 'airports' => $airports, 'countries' => $countries]);
    }

    public function update(AirlineUpdateRequest $request, Airline $airline): RedirectResponse
    {
        $this->airlineService->update($airline, $request->validated());

        return redirect()->route('airlines.index', ['airline' => $airline]);
    }

    public function create()
    {
        $countries = Country::orderBy('name')->get();
        $airports = $this->airportService->getAll();

        return view('airlines.create', ['countries' => $countries, 'airports' => $airports]);
    }

    public function store(AirlineUpdateRequest $request)
    {
        $this->airlineService->create($request->validated());

        return redirect()->route('airlines.index');
    }

    public function destroy(Airline $airline): RedirectResponse
    {
        $this->airlineService->delete($airline);

        return redirect()->route('airlines.index');
    }

}
