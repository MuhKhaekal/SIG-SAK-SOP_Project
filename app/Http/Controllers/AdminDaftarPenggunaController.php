<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminDaftarPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        // Menggunakan paginate pada query untuk mendapatkan pengguna dengan role 'user' dan filter berdasarkan pencarian
        $users = User::query()
                    ->when($search, function ($query) use ($search) {
                        return $query->where('name', 'like', "%{$search}%")
                                     ->orWhere('role', 'like', "%{$search}%")
                                     ->orWhere('email', 'like', "%{$search}%");
                    })
                    ->paginate(5);
    
        // Menggunakan paginate pa

        return view('dashboard.admin.daftarpengguna-admin', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.buat-daftarpengguna');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required',
            'password' => 'required|min:8'
        ], [
            'password' => 'Jumlah Passsword minimal 8'
        ]);

        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // dd($request->all());
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'nim' => $request->input('nim'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')) ,
        ]);

        return redirect()->route('daftarpengguna.index')->with('success', 'Akun telah berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findorfail($id);
        return view('dashboard.admin.edit-daftarpengguna', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required',
            'password' => 'required'
        ]);
    
        $user = User::findOrFail($id);
        $user->update($request->only('name', 'email', 'role', bcrypt('password')));

        return redirect()->route('daftarpengguna.index')->with('success', 'Akun telah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();    
        return redirect()->route('daftarpengguna.index')->with('success', 'Akun telah berhasil dihapus');
    }
}
