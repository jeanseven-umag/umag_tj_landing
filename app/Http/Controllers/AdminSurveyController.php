<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\SurveyOption;
use App\SurveyResult;



class AdminSurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::with('options')->get();
        
        return view('pages.admin.survey.index', ['surveys' => $surveys]);
    }

    public function edit($id)
    {
        $survey = Survey::with('options')->findOrFail($id);

        return view('pages.admin.survey.detail', ['survey' => $survey]);
    }

    public function create() {
        
        return view('pages.admin.survey.create');
    }

    // app/Http/Controllers/Admin/SurveyController.php
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'options' => 'required|array',
            'options.*' => 'required|string|max:255',
        ]);

        // Create the survey
        $survey = Survey::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Add survey options
        foreach ($request->options as $option) {
            $survey->options()->create(['option_text' => $option]);
        }

        return redirect()->route('surveys.index')->with('success', 'Survey and options created successfully.');
    }

    // Update the specified survey
    public function update(Request $request, $id)
    {
        $survey = Survey::findOrFail($id);

        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'options' => 'required|array',
            'options.*.id' => 'nullable|integer|exists:survey_options,id',
            'options.*.text' => 'required|string|max:255',
        ]);

        // Update the survey details
        $survey->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Update or add new options
        foreach ($request->options as $optionData) {
            // If the option has an ID, update the existing option
            if (isset($optionData['id'])) {
                $option = SurveyOption::findOrFail($optionData['id']);
                $option->update(['option_text' => $optionData['text']]);
            } else {
                // If no ID is provided, create a new option
                $survey->options()->create(['option_text' => $optionData['text']]);
            }
        }

        // Redirect back with success message
        return redirect()->route('surveys.index')->with('success', 'Survey and options updated successfully.');
    }

     // Delete the specified survey
     public function destroy($id)
     {
         $survey = Survey::findOrFail($id);
         $survey->delete();
 
         return redirect()->route('admin.surveys.index')->with('success', 'Survey deleted successfully.');
     }
 

     //get All survey results
     public function getSurveyResults()
     {
        $results = SurveyResult::with(['survey', 'option'])->get();
        
        return view('pages.admin.survey.results', ['results' => $results]); 
     }

}
