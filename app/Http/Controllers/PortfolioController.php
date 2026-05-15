<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headline;
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Tool;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $id = auth()->id();
        return $this->getinfo($id);
    }
    public function getinfo($id)
    {
        //get data first
        $headline = Headline::where('user_id', $id)->get();
        $Contact = Contact::where('user_id', $id)->get();
        $Skills = Skill::where('user_id', $id)->get();
        $Tools = Tool::where('user_id', $id)->get();
        $Projects = Project::where('user_id', $id)->get();
        $portfolioData = [
            'user_info' => [
                'Headline' => $headline,
                'Contacts' => $Contact,
            ],
            'Skills' => $Skills,
            'Tools' => $Tools,
            'Projects' => $Projects,

        ];
        return $portfolioData;
    }
    public function shared($uuid)
    {
        if (!$uuid) return;
        //get userinfo of uuid
        $user =  User::where('uuid', $uuid)->firstOrFail();
        $portfolioData = $this->getinfo($user->id);
        return $portfolioData;
    }
}
