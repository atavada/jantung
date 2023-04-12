<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfusionController extends Controller
{
    public function confusionBayes()
    {
        $data1 = DB::table('bayes_output')->get();
        $data_pilihan = DB::table('data_pilihan_bayes')->get();
        foreach ($data1 as $d) {
            $id = $d->id;
            $trestbps = $d->trestbps;
            $chol = $d->chol;
            $thalch = $d->thalch;
            $prediction = $d->prediction;

            DB::table('data_pilihan_bayes')->where('trestbps', $trestbps)->where('chol', $chol)->where('thalch', $thalch)->update(['output_prediction' => $prediction]);
        }

        foreach ($data_pilihan as $dp) {
            $id = $dp->id;
            $trestbps = $dp->trestbps;
            $chol = $dp->chol;
            $thalch = $dp->thalch;
            $aktual = $dp->output_asli;
            $prediksi = $dp->output_prediction;

            if ($aktual == $prediksi) {
                if ($aktual == 1) {
                    $hasil = "TP";
                } else {
                    $hasil = "TN";
                }
            } else {
                if ($aktual == 1) {
                    $hasil = "FN";
                } else {
                    $hasil = "FP";
                }
            }

            DB::table('data_pilihan_bayes')->where('id', $id)->update(['hasil' => $hasil]);
        }

        $TP = DB::table('data_pilihan_bayes')->where('output_asli', 1)->where('output_prediction', 1)->count();
        $FN = DB::table('data_pilihan_bayes')->where('output_asli', 1)->where('output_prediction', 0)->count();
        $FP = DB::table('data_pilihan_bayes')->where('output_asli', 0)->where('output_prediction', 1)->count();
        $TN = DB::table('data_pilihan_bayes')->where('output_asli', 0)->where('output_prediction', 0)->count();
        $PA = DB::table('data_pilihan_bayes')->where('output_asli', 1)->count();
        $NA = DB::table('data_pilihan_bayes')->where('output_asli', 0)->count();
        $PP = DB::table('data_pilihan_bayes')->where('output_prediction', 1)->count();
        $NP = DB::table('data_pilihan_bayes')->where('output_prediction', 0)->count();

        DB::table('confusion_bayes')->where('id', 1)->update(['p_terkena' => $TP]);
        DB::table('confusion_bayes')->where('id', 1)->update(['p_tidak_terkena' => $FN]);
        DB::table('confusion_bayes')->where('id', 2)->update(['p_terkena' => $FP]);
        DB::table('confusion_bayes')->where('id', 2)->update(['p_tidak_terkena' => $TN]);

        DB::table('confusion_bayes')->where('id', 1)->update(['asli' => $PA]);
        DB::table('confusion_bayes')->where('id', 1)->update(['prediksi' => $PP]);
        DB::table('confusion_bayes')->where('id', 2)->update(['asli' => $NA]);
        DB::table('confusion_bayes')->where('id', 2)->update(['prediksi' => $NP]);

        $recall = $TP / ($TN + $FP);
        $akurasi = ($TP + $TN) / ($TP + $TN + $FP + $FN);
        $presisi = $TP / ($TP + $FP);

        DB::table('hasil_confusion_bayes')->where('id', 1)->update(['Recall' => $recall]);
        DB::table('hasil_confusion_bayes')->where('id', 1)->update(['Akurasi' => $akurasi]);
        DB::table('hasil_confusion_bayes')->where('id', 1)->update(['Presisi' => $presisi]);

        $Recall = DB::table('hasil_confusion_bayes')->where('id', 1)->value('Recall') * 100 . "%";
        $Akurasi = DB::table('hasil_confusion_bayes')->where('id', 1)->value('Akurasi') * 100 . "%";
        $Presisi = DB::table('hasil_confusion_bayes')->where('id', 1)->value('Presisi') * 100 . "%";
        return view('user.confusionBayes', compact('TP', 'FN', 'FP', 'TN', 'Recall', 'Akurasi', 'Presisi'));
    }
}
