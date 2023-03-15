<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KmeanskeduaController extends Controller
{
    public function kmeans2()
    {
        // Ambil data dari database
        $data = DB::table('data')->select('kolom1', 'kolom2', 'kolom3')->get()->toArray();

        // Konversi data ke dalam bentuk array numerik
        $data = array_map(function ($item) {
            return [(float) $item->kolom1, (float) $item->kolom2, (float) $item->kolom3];
        }, $data);

        // Tentukan jumlah cluster
        $k = 2;

        // Inisialisasi centroid secara acak
        $centroids = array_slice($data, 0, $k);

        while (true) {
            $clusters = [];
            
            // Hitung jarak
            foreach ($data as $point) {
                $distances = [];
                foreach ($centroids as $centroid) {
                    $distances[] = sqrt(pow($point[0] - $centroid[0], 2) + pow($point[1] - $centroid[1], 2) + pow($point[2] - $centroid[2], 2));
                }
                $clusters[array_search(min($distances), $distances)][] = $point;
            }
            
            // Hitung ulang centroid
            $old_centroids = $centroids;
            foreach ($clusters as $key => $cluster) {
                $centroids[$key] = [
                    array_sum(array_column($cluster, 0)) / count($cluster),
                    array_sum(array_column($cluster, 1)) / count($cluster),
                    array_sum(array_column($cluster, 2)) / count($cluster),
                ];
            }
            
            // Cek apakah centroid berubah
            if ($centroids == $old_centroids) {
                break;
            }
            
        }

        // Hasilkan output
        print_r($clusters);
        // $data = DB::table('data')->get();
        // return view('user.kmeans')->with('data', $clusters);
    }
}
