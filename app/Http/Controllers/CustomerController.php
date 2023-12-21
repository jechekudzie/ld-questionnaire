<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Questionnaire;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function submit(Customer $request, Customer $customer)
    {
        // Validate and retrieve the form data
        $validatedData = $request->validate([
            'mission' => 'required|max:255',
            'vision' => 'required|max:255',
            'products_services' => 'required',
            'goals_objectives' => 'required',
            'audience_profile' => 'required',
            'design_inspirations' => 'nullable',
            'branding_preferences' => 'nullable',
            'custom_features' => 'nullable',
            'third_party_integrations' => 'nullable',
            'content_management_needs' => 'nullable',
            'traffic_strategies' => 'nullable',
            'budget_timeline' => 'nullable',
            'maintenance_needs' => 'nullable',
            'seo_requirements' => 'nullable',
            'digital_marketing_services' => 'nullable',
            'compliance_security' => 'nullable',
            'additional_requirements' => 'nullable',
        ]);


        // Create a new questionnaire entry
        $customer->addQuestionnaire($validatedData);

        // Redirect with success message
        return redirect()->back()->with('success', 'Your questionnaire has been submitted successfully!');
    }
}
