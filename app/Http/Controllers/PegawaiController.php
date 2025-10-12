<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PegawaiController extends Controller
{
    public function index()
    {
        // Data tanggal lahir untuk menghitung umur
        $tanggalLahir = Carbon::create(2005, 10, 6); 
        
        // Data tanggal harus wisuda
        $tglHarusWisuda = Carbon::create(2027, 9, 30); 
        
        // Data semester saat ini
        $currentSemester = 3; 
        
        // Informasi berdasarkan semester
        $semesterInfo = $currentSemester < 3 
            ? "Masih Awal, Kejar TAK" 
            : "Jangan main-main, kurang-kurangi main game!";
        
        $data = [
            'name' => 'Steven Junior',
            'my_age' => $tanggalLahir->age, 
            'hobbies' => ['Programming', 'Membaca', 'Olahraga', 'Anime', 'Gaming'],
            'tgl_harus_wisuda' => $tglHarusWisuda->format('d F Y'),
            'time_to_study_left' => now()->diffInDays($tglHarusWisuda, false), 
            'current_semester' => $currentSemester,
            'semester_info' => $semesterInfo,
            'future_goal' => 'Menjadi CEO Perusahaan IT Internasional'
        ];
        
        return view('pegawai.index', $data);
    }
}
