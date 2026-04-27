<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Services\CMS\ProjectService;

class ProjectController extends Controller
{
    public function __construct(protected ProjectService $service) {}

    public function index()
    {
        return $this->service->all(auth()->id());
    }

    public function store(Request $request)
    {

        return $this->service->saveAll(auth()->id(), $request->all());
    }

    public function update(Request $request)
    {
        return $this->service->saveAll(auth()->id(),  $request->all());
    }
}
