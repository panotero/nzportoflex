<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Services\CMS\ContactService;

class ContactController extends Controller
{
    public function __construct(protected ContactService $service) {}

    public function index()
    {
        return $this->service->get(auth()->id());
    }

    public function store(Request $request)
    {
        return $this->service->save(auth()->id(), $request->all());
    }

    public function update(Request $request)
    {
        return $this->service->save(auth()->id(), $request->all());
    }
}
