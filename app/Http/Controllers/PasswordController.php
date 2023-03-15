<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Password;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('password.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('password.create');
    }

    public function entry(Request $request)
    {
        return view('password.entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $password = new Password();
        $password->title = $request->input('title');
        $password->account = $request->input('account');
        $password->password = $request->input('password');
        $password->email = $request->input('email');
        $password->memo = $request->input('memo');
        $password->save();

        return to_route('password.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('password.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('password.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
    }
}
