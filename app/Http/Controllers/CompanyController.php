<?php

namespace App\Http\Controllers;

use App\Http\Services\CompanyService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $companyService;

    /**
     * UserController constructor.
     *
     * @param CompanyService $companyService
     */
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index(Request $request) : Collection
    {
        $country = $request->country ?? '';

        return $this->companyService->getCompaniesInfo($country);
    }
}
