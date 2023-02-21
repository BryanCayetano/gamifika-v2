<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Ranking;
use App\Models\User;


class RankingController extends Controller
{

    public function getAuthUser(Request $request){
        $user = $request->user();
        return $user;
    }

    public function create(Request $request)
    {
        $user = $request->user();
        return $user;
    }
    public function delete()
    {
    }

    public function insert()
    {
    }
    public function kickoff()
    {
    }
    public function insert_points()
    {
    }
    public function show_students()
    {
    }
}
