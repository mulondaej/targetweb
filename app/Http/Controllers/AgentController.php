<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Branch;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function index()
    {
        $agents = Agent::with('branch')->orderBy('created_at', 'desc')->paginate(13);
        return view('agents.index', ["agents" => $agents]);
    }

    public function show(Agent $agent)
    {
        $agent->load('branch');
        return view('agents.show', ["Agent" => $agent]);
    }

    public function create()
    {
        $branches = Branch::all();
        return view('agents.create', ["branches" => $branches]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:10|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'branch_name' => 'required|string|max:255',
        ]);

        $branch = Branch::firstOrCreate(
            ['name' => trim($validated['branch_name'])],
            [
                'description' => 'Created from Agent form',
                'location' => 'Not specified',
            ]
        );

        Agent::create([
            'name' => $validated['name'],
            'skill' => $validated['skill'],
            'bio' => $validated['bio'],
            'branch_id' => $branch->id,
        ]);

        return redirect()->route('agents.index')->with('success', 'Agent is created');
    }

    public function destroy(Agent $agent)
    {
        $agent->delete();

        return redirect()->route('agents.index')->with('success', 'Agent is deleted');
    }
}

