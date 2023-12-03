<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\District;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function add(User $user)
    {

        return view('profile.profile', [
            'users' => $user,
            'districts' => District::all(),
        ]);
    }

    public function index()
    {
        /*show only those users in profile whose profile data is already added*/
        $users = User::has('profile')->get();

        return view('profile.index', [
            'users' => $users,
        ]);

    }

    public function store($id, ProfileRequest $request)
    {

        try {
            DB::beginTransaction();
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

            DB::commit();
            return redirect('/users');

        } catch (QueryException $e) {
            // Check if the exception is due to a duplicate key violation
            if ($e->getCode() == '23000') {
                // Assuming the duplicate key violation is related to the unique constraint on user_id
                throw ValidationException::withMessages(['user_id' => 'A profile for this user already exists.']); // Provide a user-friendly error message
            }
            // If it's not a duplicate key violation, rethrow the exception
            throw $e;
        } catch (\Exception $exception) {
            DB::rollBack();
        }


    }

    public function edit(User $user)
    {
        /*incase no data found */
        $profile = $user->profile;
        if (!$profile) {
            return redirect()->back()->with('error', 'User data not found for editing.');
        }

        $users = User::with('profile', 'address', 'bank', 'contact')->find($user->id);
        $profile = $users->profile ?? null;
        $address = $users->address ?? null;
        $bank = $users->bank ?? null;
        $emergencyContact = $users->contact ?? null;
        $districtName = $address && $address->district ? $address->district->name : null;

        return view('profile.editprofile', [
            'user' => $user,
            'profile' => $profile,
            'address' => $address,
            'bank' => $bank,
            'contact' => $emergencyContact,
            'district_name' => $districtName,
            'districts' => District::all(),
        ]);


    }

    public function update(User $user, ProfileRequest $request)
    {

        try {
            DB::beginTransaction();
            //$user->update($validatedData);
            $user->profile()->update([
                'mobile_no' => $request->mobile_no,
                'alternate_mobile_no' => $request->alternate_mobile_no,
                'cnic' => $request->cnic,
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'marital_status' => $request->marital_status,
                'father_name' => $request->father_name,
                'spouse_name' => $request->spouse_name,
                'spouse_cnic' => $request->spouse_cnic,
            ]);

            // Update user's address
            $user->address()->update([
                'district_id' => $request->district_id,
                'current_address' => $request->current_address,
                'permanent_address' => $request->permanent_address,
                'postal_code' => $request->postal_code,
            ]);

            // Update user's bank information
            $user->bank()->update([
                'bank_name' => $request->bank_name,
                'branch_code' => $request->branch_code,
                'branch_address' => $request->branch_address,
                'account_title' => $request->account_title,
                'account_number' => $request->account_number,
                'iban' => $request->iban,
            ]);

            // Update user's emergency contact information
            $user->contact()->update([
                'primary_contact' => $request->primary_contact,
                'alternate_contact' => $request->alternate_contact,
                'relationship' => $request->relationship,
            ]);


            DB::commit();
            return redirect()->route('profile');
        } catch (\Exception $exception) {
            DB::rollBack();
        }

    }

    public function delete(User $user)
    {
        $profile = $user->profile;
        if (!$profile) {
            return redirect()->back()->with('error', 'User data not found for deleting.');
        }
        $users = User::with('profile', 'address', 'bank', 'contact')->find($user->id);
        $profile = $users->profile ?? null;
        $address = $users->address ?? null;
        $bank = $users->bank ?? null;
        $emergencyContact = $users->contact ?? null;
        $districtName = $address && $address->district ? $address->district->name : null;

        return view('profile.deleteprofile', [
            'user' => $user,
            'profile' => $profile,
            'address' => $address,
            'bank' => $bank,
            'contact' => $emergencyContact,
            'district_name' => $districtName,
            'districts' => District::all(),
        ]);

    }

    public function destroy(User $user)
    {
        try {
            DB::beginTransaction();

            $user->profile()->delete();

            $user->address()->delete();

            $user->bank()->delete();

            $user->contact()->delete();

            //$user->delete();

            DB::commit();
            return redirect()->route('profile');

        } catch (\Exception $exception) {
            DB::rollBack();

            // Handle the exception (e.g., log it or show an error message)
            return back()->withError('Failed to delete user. Please try again.');
        }

    }
}
