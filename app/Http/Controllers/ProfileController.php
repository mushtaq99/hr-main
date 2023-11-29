<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function add(User $user, Request $request)
    {
        return view('profile.profile', [
            'users' => $user,
        ]);
    }

    public function index()
    {
        //get user data such as name and role
        $users = User::all();
       /* $result = [];
        foreach ($users as $user){
            $userData = [
                'username' => $user->name,
                'email' => $user->email,
                'roles' => $user->roles->pluck('name')->toArray()
            ];
            $result[] = $userData;
        }*/


        return view('profile.index',[
            'users'=>$users,
        ]);

    }

    public function store($id, ProfileRequest $request)
    {

        $user = User::find($id);
        \auth()->user()
            ->profiles()
            ->create([
                'user_id' => $user->id,
                'cnic' => $request->cnic,
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'marital_status' => $request->marital_status,
                'father_name' => $request->father_name,
                'spouse_name' => $request->spouse_name,
                'mobile_no' => $request->mobile_no,
                'alternate_mobile_no' => $request->alternate_mobile_no,
                'spouse_cnic' => $request->spouse_cnic,
            ]);

        \auth()->user()
            ->addresses()
            ->create([
                'user_id' => $user->id,
                'district_id' => $request->district_id,
                'current_address' => $request->current_address,
                'permanent_address' => $request->permanent_address,
                'postal_code' => $request->postal_code,
            ]);

        \auth()->user()
            ->banks()
            ->create([
                'user_id' => $user->id,
                'bank_name' => $request->bank_name,
                'branch_code' => $request->branch_code,
                'branch_address' => $request->branch_address,
                'account_title' => $request->account_title,
                'account_number' => $request->account_number,
                'iban' => $request->iban,
            ]);

        \auth()->user()
            ->contacts()
            ->create([
                'user_id' => $user->id,
                'primary_contact' => $request->primary_contact,
                'alternate_contact' => $request->alternate_contact,
                'relationship' => $request->relationship,
            ]);

        return redirect('/users');

    }

    /*public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }*/
}
