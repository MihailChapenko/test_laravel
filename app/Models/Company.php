<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'country_id'
    ];

    /**
     * Get the country that owns the company.
     */
    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * The users that belong to the company.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_company')->withPivot([
            'start_work',
            'end_work',
        ]);
    }

    public function getInfo(string $country): Collection
    {
        return Company::select('id', 'name')->with(
            ['users' => function ($query) {
                $query->select(['users.id','users.name','users.email']);
            }])
            ->whereHas('countries', function ($query) use ($country) {
                $query->where('name', '=', $country);
            })->get();
    }
}
