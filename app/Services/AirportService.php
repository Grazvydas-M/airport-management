<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Airport;
use Illuminate\Support\Collection;

class AirportService
{
    public function getAll(): Collection
    {
        return Airport::all();
    }

    public function update(Airport $airport, array $data): void
    {
        $airport->update($data);
    }

    public function delete(Airport $airport): void
    {
        $airport->delete();
    }

    public function create(array $attributes): Airport
    {

        $airport = new Airport($attributes);

        $airport->save();

        return $airport;
    }
}
