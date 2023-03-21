<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KmeansController extends Controller
{
    public function kmeans()
    {
        $maxIterasi = 10;
        $iterasi = 0;
        // Melakukan pengulangan untuk setiap iterasi
        while ($iterasi < $maxIterasi) {
            // Membandingkan jumlah anggota pada setiap cluster sebelumnya
            $temp1 = DB::table('cluster')->where('id', 1)->value('jumlahAnggota');
            $temp2 = DB::table('cluster')->where('id', 2)->value('jumlahAnggota');

<<<<<<< HEAD
            // if ($iterasi != 1) {
            //     // Menghitung rata-rata untuk setiap kolom pada setiap cluster
            //     $mean1 = DB::table('data')->avg('kolom1');
            //     $mean2 = DB::table('data')->avg('kolom2');
            //     $mean3 = DB::table('data')->avg('kolom3');

            // Mengupdate nilai tengah pada setiap cluster dengan rata-rata terbaru
            // DB::table('cluster')->where('id', 1)->update(['center1' => $mean1, 'center2' => $mean2, 'center3' => $mean3]);
            // DB::table('cluster')->where('id', 2)->update(['center1' => $mean1, 'center2' => $mean2, 'center3' => $mean3]);
            // DB::table('cluster')->where('id', 3)->update(['center1' => $mean1, 'center2' => $mean2, 'center3' => $mean3]);

=======
>>>>>>> 61c8858a283f6b4a31d751e611f297cd742bd16e
            // Mengambil data pada tabel data
            $data = DB::table('data')->get();

            // Melakukan perulangan untuk setiap data
            foreach ($data as $d) {
                $kolom1 = $d->kolom1;
                $kolom2 = $d->kolom2;
                $kolom3 = $d->kolom3;

                // Menghitung jarak antara data dengan setiap cluster
                $center1id1 = DB::table('cluster')->where('id', 1)->value('center1');
                $center2id1 = DB::table('cluster')->where('id', 1)->value('center2');
                $center3id1 = DB::table('cluster')->where('id', 1)->value('center3');

                $jarak1 = sqrt(pow(($kolom1 - $center1id1), 2) + pow(($kolom2 - $center2id1), 2) + pow(($kolom3 - $center3id1), 2));

                $center1id2 = DB::table('cluster')->where('id', 2)->value('center1');
                $center2id2 = DB::table('cluster')->where('id', 2)->value('center2');
                $center3id2 = DB::table('cluster')->where('id', 2)->value('center3');

                $jarak2 = sqrt(pow(($kolom1 - $center1id2), 2) + pow(($kolom2 - $center2id2), 2) + pow(($kolom3 - $center3id2), 2));

                // Menentukan cluster yang terdekat dengan data
                if ($jarak1 <= $jarak2) {
                    $out = 1;
                } else {
                    $out = 2;
                }

                // Menyimpan hasil clustering pada tabel data
                DB::table('data')->where('id', $d->id)->update(['C1' => $jarak1, 'C2' => $jarak2, 'Class' => $out]);

                // Menambah jumlah anggota pada cluster yang terpilih
<<<<<<< HEAD
                // DB::table('cluster')->where('id', $out)->increment('jumlahAnggota');

            }

            // Memeriksa apakah jumlah anggota pada setiap cluster telah stabil

              // Update jumlahAnggota
                $data1 = DB::table('data')->where('Class', 1)->get();
                $m1 = 0;
                $m2 = 0;
                $center11 = 0;
                $center21 = 0;
                $center31 = 0;
                $center12 = 0;
                $center22 = 0;
                $center32 = 0;

                foreach($data1 as $d){
                    $m1++;
                    $kolom1 = $d->kolom1;
                    $kolom2 = $d->kolom2;
                    $kolom3 = $d->kolom3;
                    $center11 = $center11 + $kolom1;
                    $center21 = $center21 + $kolom2;
                    $center31 = $center31 + $kolom3;

                }

            DB::table('cluster')->where('id', 1)->update(['jumlahAnggota' => $m1]);
                $c11 = DB::table('cluster')->where('id', 1)->value('center1');
                $c21 = DB::table('cluster')->where('id', 1)->value('center2');
                $c31 = DB::table('cluster')->where('id', 1)->value('center3');
                $c1baru1 = 0.5*$center11/$m1;
                $c2baru1 = 0.5*$center21/$m1;
                $c3baru1 = 0.5*$center31/$m1;
            // if($c11 != $c1baru1 || $c21 != $c2baru1 || $c31 != $c3baru1 ){
            //     DB::table('cluster')->where('id', 1)->update(['center1' => $c1baru1]);
            //     DB::table('cluster')->where('id', 1)->update(['center2' => $c2baru1]);
            //     DB::table('cluster')->where('id', 1)->update(['center3' => $c3baru1]);
            // } else {
            //     continue;
            // }

            $data2 = DB::table('data')->where('Class', 2)->get();
            foreach($data2 as $d){
                $m2++;
                $kolom1 = $d->kolom1;
                $kolom2 = $d->kolom2;
                $kolom3 = $d->kolom3;
                $center12 = $center12 + $kolom1;
                $center22 = $center22 + $kolom2;
                $center32 = $center32 + $kolom3;
            }
            DB::table('cluster')->where('id', 2)->update(['jumlahAnggota' => $m2]);



            $c12 = DB::table('cluster')->where('id', 2)->value('center1');
            $c22 = DB::table('cluster')->where('id', 2)->value('center2');
            $c32 = DB::table('cluster')->where('id', 2)->value('center3');
                $c1baru2 = 0.5*$center12/$m2;
                $c2baru2 = 0.5*$center22/$m2;
                $c3baru2 = 0.5*$center32/$m2;
            // if($c12 != $c1baru2 || $c22 != $c2baru2 || $c32 != $c3baru2 ){
            //         DB::table('cluster')->where('id', 2)->update(['center1' => $c1baru2]);
            //         DB::table('cluster')->where('id', 2)->update(['center2' => $c2baru2]);
            //         DB::table('cluster')->where('id', 2)->update(['center3' => $c3baru2]);
            //     } else {
            //         continue;
            // }
=======
                DB::table('cluster')->where('id', $out)->increment('jumlahAnggota');
            }
            // Menghitung rata-rata untuk setiap kolom pada setiap cluster
            $mean1 = DB::table('data')->where('Class', 1)->avg('kolom1');
            $mean2 = DB::table('data')->where('Class', 1)->avg('kolom2');
            $mean3 = DB::table('data')->where('Class', 1)->avg('kolom3');
            DB::table('cluster')->where('id', 1)->update(['center1' => $mean1, 'center2' => $mean2, 'center3' => $mean3]);
            // Menghitung rata-rata untuk setiap kolom pada setiap cluster
            $mean4 = DB::table('data')->where('Class', 2)->avg('kolom1');
            $mean5 = DB::table('data')->where('Class', 2)->avg('kolom2');
            $mean6 = DB::table('data')->where('Class', 2)->avg('kolom3');
            // Mengupdate nilai tengah pada setiap cluster dengan rata-rata terbaru
            DB::table('cluster')->where('id', 2)->update(['center1' => $mean4, 'center2' => $mean5, 'center3' => $mean6]);

            // Memeriksa apakah jumlah anggota pada setiap cluster telah stabil
            if ($temp1 == DB::table('cluster')->where('id', 1)->value('jumlahAnggota') && $temp2 == DB::table('cluster')->where('id', 2)->value('jumlahAnggota')) {
                break;
            }
>>>>>>> 61c8858a283f6b4a31d751e611f297cd742bd16e

            // Menaikkan jumlah iterasi
            $iterasi++;
        }

<<<<<<< HEAD
        //Buat centroid baru
        $data = DB::table('data')->get();

        return view('user.kmeans')->with('data', $data);
        // $c = collect([$c11,$c21,$c31,$c12,$c22,$c32,$c1baru1,$c2baru1,$c3baru1, $c1baru2,$c2baru2, $c3baru2]);

    }
    public function cn(){
        $data = DB::table('data')->get();
        foreach($data as $d){
            DB::table('data')->where('id', $d->id)->update(['Class' => NULL]);
        }
    }

    public function km(){

        $i = 1;
        while ($i <= 1) {

            //Menyimpan jumlahAnggota Cluster 1,2 di $temp1,2
            $temp1 = DB::table('cluster')->where('id', 1)->value('jumlahAnggota');
            $temp2 = DB::table('cluster')->where('id', 2)->value('jumlahAnggota');

            //Mengubah jumlah baris tabel data
            $jdl = DB::table('data')->count();

            //Menyimpan nilai center1,2,3
            $c11 = DB::table('cluster')->where('id',1)->value('center1');
            $c12 = DB::table('cluster')->where('id',1)->value('center2');
            $c13 = DB::table('cluster')->where('id',1)->value('center3');
            $c21 = DB::table('cluster')->where('id',2)->value('center1');
            $c22 = DB::table('cluster')->where('id',2)->value('center2');
            $c23 = DB::table('cluster')->where('id',2)->value('center3');
            for ($j=0; $j < $jdl ; $j++) {
                $kolom1 = DB::table('data')->where('id', $j)->value('kolom1');
                $kolom2 = DB::table('data')->where('id', $j)->value('kolom2');
                $kolom3 = DB::table('data')->where('id', $j)->value('kolom3');
                $jarak1 = sqrt(pow(($kolom1 - $c11), 2) + pow(($kolom2 - $c12), 2) + pow(($kolom3 - $c13), 2));
                $jarak2 = sqrt(pow(($kolom1 - $c21), 2) + pow(($kolom2 - $c22), 2) + pow(($kolom3 - $c23), 2));

                // Menentukan cluster yang terdekat dengan data
                if ($jarak1 <= $jarak2) {
                    $out = 1;
                } else {
                    $out = 2;
                }

                DB::table('data')->where('id', $j)->update(['C1' => $jarak1, 'C2' => $jarak2, 'Class' => $out]);

            }
            $jc1 = DB::table('data')->where('Class', 1)->count();
            $jc2 = DB::table('data')->where('Class', 2)->count();

            //Membandingkan jumlahAnggota lama dan baru masing-masing cluster
            if($jc1 == $temp1 && $jc2 == $temp2){
                break;
            }
            DB::table('cluster')->where('id', 1)->update(['jumlahAnggota' => $jc1]);
            DB::table('cluster')->where('id', 2)->update(['jumlahAnggota' => $jc2]);

            $i++;
        }

=======
>>>>>>> 61c8858a283f6b4a31d751e611f297cd742bd16e
        $data = DB::table('data')->get();
        return view('user.kmeans')->with('data', $data);
    }
}
