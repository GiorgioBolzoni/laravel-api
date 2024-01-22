<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;


class TypeController extends Controller
{
    public function index()
    {
        $types = Type::with(['projects'])->get();
        return response()->json([
            'success' => true,
            'results' => $types
        ]);

    }

    public function show($slug)
    {
        $type = type::where('slug', $slug)->with(['projects'])->first();
        return response()->json([
            'success' => true,
            'results' => $type
        ]);
    }
}
