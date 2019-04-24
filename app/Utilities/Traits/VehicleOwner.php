<?php
/**
 * Created by PhpStorm.
 * User: afghany
 * Date: 3/28/2019
 * Time: 2:11 PM
 */

namespace App\Utilities\Traits;

use App\Vehicle;

trait VehicleOwner
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    /**
     * @param array $data
     * @return Vehicle
     */

    public function addVehicle(array $data)
    {
        return $this->vehicles()->create($data);
    }

    /**
     * @param array $data
     * @return Vehicle
     */

    public function car(array $data)
    {
        $car = $this->addVehicle(array_merge($data,['type' => 'car']));

        $car->update(['licences' => request()->file('car_licences')->store("vehicles/cars/{$car->id}",'public')]);

        return $car;
    }

    /**
     * @param array $data
     * @return Vehicle
     */

    public function motorcycle(array $data)
    {
        $motorcycle = $this->addVehicle(array_merge($data,['type' => 'motorcycle']));

        $motorcycle->update(['licences' => request()->file('motorcycle_licences')->store("vehicles/motorcycles/{$motorcycle->id}",'public')]);

        return $motorcycle;
    }

    /**
     * @return \Illuminate\Database\Query\Builder
     */

    public function scopeCars()
    {
        return $this->vehicles()->whereType('car');
    }

    /**
     * @return \Illuminate\Database\Query\Builder
     */

    public function scopeMotorcycles()
    {
        return $this->vehicles()->whereType('motorcycle');
    }
}