<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('backend.team.index')->with([
            'teams' => $teams,
        ]);
    }

    public function create()
    {
        return view('backend.team.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->getStoreValidationRules());
        $this->saveTeam(new Team(), $request);
        return redirect()->route('backend.teams.index')->with([
            'message' => config('constants.message.save'),
        ]);
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.team.show')->with([
            'team' => $team,
        ]);
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.team.edit')->with([
            'team' => $team,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->getUpdateValidationRules());
        $team = Team::findOrFail($id);
        $this->saveTeam($team, $request);
        return redirect()->route('backend.teams.index')->with([
            'message' => config('constants.message.update'),
        ]);
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('backend.teams.index')->with([
            'message' => config('constants.message.delete'),
        ]);
    }

    private function getStoreValidationRules()
    {
        return [];
        //{{ storeValidationRule }}
        /*
    'desktop_banner' => 'nullable|image|mimes:jpeg,jpg,png',
    'mobile_banner' => 'nullable|image|mimes:jpeg,jpg,png',
     */
    }

    private function getUpdateValidationRules()
    {
        return [];
        //{{ updateValidationRule }}
    }

    private function saveTeam($team, $data)
    {
        $team->name = $data->name;
        if ($data->hasFile('image')) {
            $team->image = Storage::putFile(config('constants.uploads.image'), $data->image);
        }
        $team->designation = $data->designation;
        $team->description = $data->description;
        $team->link = $data->link;
        $team->order_column = $data->order_column;
        if ($data->has('published_at')) {
            $team->published_at = Carbon::now();
        } else {
            $team->published_at = null;
        }
        $team->save();
    }
}
