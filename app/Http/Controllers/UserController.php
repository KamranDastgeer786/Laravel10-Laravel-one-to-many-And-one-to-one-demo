<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Validation\Rules\Exists;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $users = User::with('products')->get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phoneNumber' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postalCode' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'user data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) : View
    {
        $users = User ::find($user);
        return view('user.show', compact('users'));

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user) : View
    {
        return view('user.updateUser', compact('user')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user) : RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phoneNumber' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postalCode' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('user.index')
        ->with('success', 'user data update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) : RedirectResponse
    {
        $user->delete();

        return redirect()->route('user.index')
        ->with('success', 'user data deleted successfully');
    }
}
