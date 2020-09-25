<?php

namespace App\Http\Services;

use App\Models\Company;
use Illuminate\Database\Eloquent\Collection;

class CompanyService
{
    private $company;

    /**
     * CompanyService constructor.
     *
     * @param Company $company
     */
    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function getCompaniesInfo(string $country) : Collection
    {
        return $this->company->getInfo($country);
    }
}
