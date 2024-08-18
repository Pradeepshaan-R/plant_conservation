<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Exception;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = auth()->user()->reports;
        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'plant_name' => 'required|string|max:255',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'description' => 'nullable|string',
                'photo' => 'nullable|image|max:2048',
            ]);

            $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

            $report = new Report();
            $report->user_id = auth()->id();
            $report->plant_name = $request->plant_name;
            $report->latitude = $request->latitude;
            $report->longitude = $request->longitude;
            $report->description = $request->description;
            $report->photo_path = $photoPath;
            $report->save();

            return redirect()->route('dashboard')->with('success', 'Report submitted successfully!');
        } catch (Exception $ex) {
            dd($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
