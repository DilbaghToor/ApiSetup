<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Paginated;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('catview', ['data' => $data]);
    }

    public function catget()
    {
        $subdata = SubCategory::all();
        return response()->json(['subdata' => $subdata]);
    }

    public function pagent()
    {
        $page = request()->input('page') ?? '1';
        $response = Http::get('http://127.0.0.1:8000/api/getdata?page=' . $page);

        if ($response->successful()) {
            $data = $response->json();
            return view('pagination', ['data' => $data['data'], 'links' => $data['links']]);
        }
    }
}
