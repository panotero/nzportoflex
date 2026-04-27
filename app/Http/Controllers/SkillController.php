<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Services\CMS\SkillService;

class SkillController extends Controller
{
    protected $service;

    public function __construct(SkillService $service)
    {
        $this->service = $service;
    }

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
        return $this->service->saveAll(auth()->id(), $request->all());
    }
}
