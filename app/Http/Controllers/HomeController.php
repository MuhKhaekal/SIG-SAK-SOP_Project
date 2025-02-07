<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;

class HomeController extends Controller
{
    public function index(Request $request){
        $search = $request->get('search');

        // Menggunakan paginate pada query untuk mendapatkan pengguna dengan role 'user' dan filter berdasarkan pencarian
        $schoolssearchs = School::query()
                    ->when($search, function ($query) use ($search) {
                        return $query->where('nama_sekolah', 'like', "%{$search}%")
                                     ->orWhere('npsn', 'like', "%{$search}%");
                    })
                    ->paginate(5);

        $schools = School::orderBy('nama_sekolah', 'asc')->get();
        if (Auth::check()){
            if(Auth::user()->role == 'admin'){
                return view('dashboard.admin.home-admin', compact('schools', 'schoolssearchs'));
            }
            return view('dashboard.user.home-user', compact('schools', 'schoolssearchs'));
        } else{
            return redirect ('login');
        }
    }
}
