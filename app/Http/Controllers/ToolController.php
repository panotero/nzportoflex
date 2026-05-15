<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use App\Services\CMS\ToolService;

class ToolController extends Controller
{
    public function __construct(protected ToolService $service) {}

    public function index()
    {
        return $this->service->all(auth()->id());
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $userId = auth()->id();

        $tools = $request->input('tools', []);
        $files = $request->file('tools', []);
        // dd($files);
        return $this->service->saveAll($userId, $tools, $files);
    }

    public function update(Request $request)
    {
        $userId = auth()->id();

        $tools = $request->input('tools', []);
        $files = $request->file('tools', []);
        return $this->service->saveAll($userId, $tools, $files);
    }
}
