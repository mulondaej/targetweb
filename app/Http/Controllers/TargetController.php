<?php

namespace App\Http\Controllers;

use App\Models\Target;
use App\Models\Branch;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    //
    public function index()
    {
        $targets = Target::with('branch')->orderBy('created_at', 'desc')->paginate(13);
        return view('targets.index', ["targets" => $targets]);
    }

    public function show(Target $target)
    {
        $target->load('branch');
        return view('targets.show', ["target" => $target]);
    }

    public function create()
    {
        $branches = Branch::all();
        return view('targets.create', ["branches" => $branches]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:10|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'branch_id' => 'required|exists:branches,id',
        ]);

        Target::create($validated);

        return redirect()->route('targets.index')->with('success', 'Target is created');
    }

    public function destroy(Target $target)
    {
        $target->delete();

        return redirect()->route('targets.index')->with('success', 'Target is deleted');
    }
}

