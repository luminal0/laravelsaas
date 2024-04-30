<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Feature1Controller extends Controller
{
    public ?Feature $feature = null;

    public function __construct()
    {
        $this->feature = Feature::where('route_name', 'feature1.index')
            ->where('active', true)
            ->firstOrFail();
    }

    public function index()
    {
        return inertia('Feature1/Index', [
            'feature' => new FeatureResource(this->feature),
            'answer' => session('answer')
        ]);
    }

    public function calculate(Requst $request)
    {

    }
    
}
