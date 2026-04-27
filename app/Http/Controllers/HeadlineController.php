<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use Illuminate\Http\Request;
use App\Services\CMS\HeadlineService;

class HeadlineController extends Controller
{

    protected $service;

    public function __construct(HeadlineService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->service->get(auth()->id());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return $this->service->save(auth()->id(), $request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Headline $headline)
    {
        //
        return $this->service->save(auth()->id(), $request->all());
    }
}
