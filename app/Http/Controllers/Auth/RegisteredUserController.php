<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:20'],
            'birth_place' => ['required', 'string', 'max:100'],
            'birth_date' => ['required', 'date'],
            'gender' => ['required', 'string', 'in:Laki-Laki,Perempuan'],
            'address' => ['required', 'string'],
            'religion' => ['required', 'string', 'in:Islam,Kristen Protestan,Katolik,Hindu,Buddha,Konghucu'],
            'hobbies' => ['nullable', 'string'],
            'emergency_contact' => ['required', 'string', 'max:20'],
            'current_activity' => ['required', 'string', 'max:255'],
            'last_education' => ['required', 'string', 'max:100'],
            'major' => ['required', 'string', 'max:100'],
            'social_media' => ['nullable', 'string', 'max:255'],
            'organization_experience_1' => ['required', 'string'],
            'organization_experience_2' => ['nullable', 'string'],
            'achievement_experience' => ['required', 'string'],
            'about_generasi_cakrawala' => ['required', 'string'],
            'motivation' => ['required', 'string'],
            'contribution_plan' => ['required', 'string'],
            'skill' => ['required', 'string'],
            'contribution_location' => ['nullable', 'string', 'max:100'],
            'contribution_field' => ['nullable', 'string', 'max:100'],
            'medical_history' => ['nullable', 'string'],
            'food_allergy' => ['nullable', 'string'],
            'source' => ['required', 'string', 'in:Teman,Instagram,Website,WA'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'commitment_letter' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
            'terms' => ['required', 'accepted'],
        ]);

        // Proses upload foto
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '-' . uniqid() . '.' . $photo->getClientOriginalExtension();
            $photoFolder = public_path('photos');

            if (!is_dir($photoFolder)) {
                mkdir($photoFolder, 0755, true);
            }

            $photo->move($photoFolder, $photoName);
            $photoPath = 'photos/' . $photoName;
        }

        // Proses upload surat komitmen
        $commitmentLetterPath = null;
        if ($request->hasFile('commitment_letter')) {
            $letter = $request->file('commitment_letter');
            $letterName = time() . '-' . uniqid() . '.' . $letter->getClientOriginalExtension();
            $letterFolder = public_path('documents');

            if (!is_dir($letterFolder)) {
                mkdir($letterFolder, 0755, true);
            }

            $letter->move($letterFolder, $letterName);
            $commitmentLetterPath = 'documents/' . $letterName;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'address' => $request->address,
            'religion' => $request->religion,
            'hobbies' => $request->hobbies,
            'emergency_contact' => $request->emergency_contact,
            'current_activity' => $request->current_activity,
            'last_education' => $request->last_education,
            'major' => $request->major,
            'social_media' => $request->social_media,
            'photo' => $photoPath,
            'organization_experience_1' => $request->organization_experience_1,
            'organization_experience_2' => $request->organization_experience_2,
            'achievement_experience' => $request->achievement_experience,
            'about_generasi_cakrawala' => $request->about_generasi_cakrawala,
            'motivation' => $request->motivation,
            'contribution_plan' => $request->contribution_plan,
            'skill' => $request->skill,
            'contribution_location' => $request->contribution_location,
            'contribution_field' => $request->contribution_field,
            'medical_history' => $request->medical_history,
            'food_allergy' => $request->food_allergy,
            'source' => $request->source,
            'commitment_letter' => $commitmentLetterPath,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false))->with('success', 'Pendaftaran berhasil! Selamat datang di Generasi Cakrawala 8.');
    }
}
