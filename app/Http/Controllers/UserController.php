<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function index()
    {
        $users = User::where('is_admin', false)->select(['id', 'name', 'phone', 'email', 'status'])->get();
        return view('users.index', compact('users'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'Data-Pendaftar.xlsx');
    }


    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'link_twibbon' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'birth_place' => 'nullable|string|max:100',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'religion' => 'nullable|string|max:50',
            'hobbies' => 'nullable|string',
            'emergency_contact' => 'nullable|string|max:20',
            'current_activity' => 'nullable|string|max:100',
            'last_education' => 'nullable|string|max:100',
            'major' => 'nullable|string|max:100',
            'social_media' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
            'organization_experience_1' => 'nullable|string',
            'organization_experience_2' => 'nullable|string',
            'achievement_experience' => 'nullable|string',
            'about_generasi_cakrawala' => 'nullable|string',
            'motivation' => 'nullable|string',
            'contribution_plan' => 'nullable|string',
            'skill' => 'nullable|string',
            'contribution_location' => 'nullable|string|max:100',
            'contribution_field' => 'nullable|string|max:100',
            'medical_history' => 'nullable|string',
            'food_allergy' => 'nullable|string',
            'source' => 'nullable|string|max:100',
            'commitment_letter' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // ===== Handle Upload Foto =====
        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoFolder = public_path('user-photos');
            $photoName = time() . '-' . uniqid() . '.' . $photoFile->getClientOriginalExtension();

            if (!is_dir($photoFolder)) {
                mkdir($photoFolder, 0755, true);
            }

            if ($photoFile->move($photoFolder, $photoName)) {
                // Delete old photo if exists
                if ($user->photo && file_exists(public_path($user->photo))) {
                    unlink(public_path($user->photo));
                }

                $validated['photo'] = 'user-photos/' . $photoName;
            } else {
                return redirect()->back()->withErrors(['photo' => 'Gagal menyimpan foto.']);
            }
        }

        // ===== Handle Upload Surat Komitmen =====
        if ($request->hasFile('commitment_letter')) {
            $letterFile = $request->file('commitment_letter');
            $letterFolder = public_path('commitment-letters');
            $letterName = time() . '-' . uniqid() . '.' . $letterFile->getClientOriginalExtension();

            if (!is_dir($letterFolder)) {
                mkdir($letterFolder, 0755, true);
            }

            if ($letterFile->move($letterFolder, $letterName)) {
                if ($user->commitment_letter && file_exists(public_path($user->commitment_letter))) {
                    unlink(public_path($user->commitment_letter));
                }

                $validated['commitment_letter'] = 'commitment-letters/' . $letterName;
            } else {
                return redirect()->back()->withErrors(['commitment_letter' => 'Gagal menyimpan file komitmen.']);
            }
        }

        $user->update($validated);

        if (Auth::user()->is_admin) {
            return redirect()->route('users.show', $user)->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui.');
        }
    }

    public function destroy(User $user)
    {
        if ($user->photo && file_exists(public_path($user->photo))) {
            unlink(public_path($user->photo));
        }

        if ($user->commitment_letter && file_exists(public_path($user->commitment_letter))) {
            unlink(public_path($user->commitment_letter));
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }

    public function updateStatus(Request $request, User $user)
    {
        // Validasi input status dengan memastikan nilainya salah satu dari pilihan yang tersedia
        $request->validate([
            'status' => 'required|in:Seleksi Berkas,Seleksi Wawancara,Belum Diterima,Lulus',
        ]);

        // Update status user dan simpan perubahan ke database
        $user->update([
            'status' => $request->status,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }
}
