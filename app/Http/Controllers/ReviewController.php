<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\review;

class ReviewController extends Controller
{


    public function index()
    {
        //
    }

    public function create()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $review = review::create([
                'id_review' => $user->id_user,
                'rating' => 1,
                'review_date' => 0,
                'id_product' => 452332,
                'id_user' => date('Y-m-d H:i:s'),
            ]);
        }
        return redirect()->back();
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}