<?php

namespace App\Services;

use App\Models\Airline;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class AirlineService
{
    public function getAllAirlines(): Collection
    {
        return Airline::all();
    }

    public function update(Airline $airline, array $data): void
    {
        $airportsIds = Arr::pull($data, 'airport_ids');
        $airline->airports()->sync($airportsIds);
        $airline->update($data);
    }

    public function delete(Airline $airline): void
    {
        $airline->delete();
    }

    public function create(array $attributes): Airline
    {
        $airportsIds = Arr::pull($attributes, 'airport_ids');

        $airline = new Airline($attributes);


        $airline->airports()->attach($airportsIds);
        $airline->save();

        return $airline;
    }
}
