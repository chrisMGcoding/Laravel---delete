<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AllMemberController extends Controller
{
    public function index() {
        $data = Member::all();
        return view('pages.allMembers', compact('data'));
    }

    public function create() {
        return view('pages.createMembers');
    }

    public function store (Request $request) {
        $newEntry = new Member;

        $newEntry->name = $request->Name;
        $newEntry->age = $request->Age;
        $newEntry->gender = $request->Gender;

        $newEntry->save();
        return redirect()->back();
    }

    public function destroy (Member $id) {
        $id->delete();
        return redirect()->back();
    }
}
