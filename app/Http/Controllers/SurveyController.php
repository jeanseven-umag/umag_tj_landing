<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\SurveyOption;
use App\SurveyResult;

class SurveyController extends Controller
{
    // Get all surveys with their options
    public function getSurveys()
    {
        $surveys = Survey::with('options')->get();
        return response()->json([
            'message' => 'Surveys retrieved successfully',
            'data' => $surveys
        ]);
    }

    // Get specific survey by id
    public function getSurveyOptions($id)
    {
        $survey = Survey::with('options')->find($id);

        if (!$survey) {
            return response()->json([
                'message' => 'Survey not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Survey options retrieved successfully',
            'data' => $survey
        ]);
    }

    public function submitSurveyResult(Request $request)
    {
        // Validate the input based on whether 'other_option_text' is provided
        if (!empty($request->other_option_text)) {
            $request->validate([
                'user_name' => 'required|string|max:255',
                'phone' => 'required|string|max:18',
                'other_option_text' => 'nullable|string',
                'link' => 'required|url', // Ensures a valid URL is provided
                'knowledge_base_id' => 'required|exists:knowledge_base,id' // Ensure valid knowledge base ID
            ]);

            $result = SurveyResult::create([
                'survey_id' => null,
                'option_id' => null,
                'user_name' => $request->user_name,
                'phone' => $request->phone,
                'other_option_text' => $request->other_option_text,
                'link' => $request->link,
                'knowledge_base_id' => $request->knowledge_base_id
            ]);
        } else {
            $request->validate([
                'survey_id' => 'required|exists:surveys,id',
                'user_name' => 'required|string|max:255',
                'phone' => 'required|string|max:18',
                'option_id' => 'nullable|exists:survey_options,id',
                'other_option_text' => 'nullable|string',
                'link' => 'required|url',
                'knowledge_base_id' => 'required|exists:knowledge_base,id'
            ]);

            $result = SurveyResult::create([
                'survey_id' => $request->survey_id,
                'option_id' => $request->option_id,
                'user_name' => $request->user_name,
                'phone' => $request->phone,
                'other_option_text' => $request->other_option_text,
                'link' => $request->link,
                'knowledge_base_id' => $request->knowledge_base_id
            ]);
        }

        return response()->json([
            'message' => 'Survey result submitted successfully',
            'data' => $result
        ]);
    }


}
