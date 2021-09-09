<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use Database\Seeders\pemasukan as SeedersPemasukan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukan = pemasukan::paginate(25);
        return view('pages/tbl_pemasukan', compact('pemasukan'));
    }
    public function pemasukanApi()
    {
        $pemasukan = pemasukan::paginate(25);
        return response()->json($pemasukan, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
       

        if ($request->input('start_date') && $request->input('end_date')) {

            $start_date = Carbon::parse($request->input('start_date'));
            $end_date = Carbon::parse($request->input('end_date'));

            if ($end_date->greaterThan($start_date)) {
                $pemasukan = Pemasukan::whereBetween('created_at', [$start_date, $end_date])->get();

                return view('pages/search', compact('pemasukan'));
            } else {
                $pemasukan = Pemasukan::latest()->get();
            }
        } else {
            $pemasukan = Pemasukan::latest()->get();
        }

        return response()->json([
            'pemasukan' => $pemasukan
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function chart()
    {
        // $data =  pemasukan::select('created_at')
        //     ->whereMonth('created_at', '=', date('month'))
        //     ->orderBy('created_at')
        //     ->get()->groupBy(function ($data) {
        //         return Carbon::parse($data->created_at)->format('month');
        //         $output = [];
        //         foreach($data as $entry) {
        //             $output[$entry->day] = $entry->count;
        //         }
                
        //         dd($output);
        //     });
       
           
            $chartpemasukan = pemasukan::select(
                    DB::raw('sum(pemasukan) as sums'), 
                    DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"),
                    DB::raw("DATE_FORMAT(created_at,'%m') as monthKey")
          )
          ->groupBy('months', 'monthKey')
          ->orderBy('created_at', 'ASC')
          ->get();
    
      $data =[];

     foreach ($chartpemasukan as $chart){
     $data[] = (int)$chart->sums;
   
    }
   
        return view('pages/chart',['chartpemasukan' => $chartpemasukan,'data'=>$data ]);
    
      
    }
}
