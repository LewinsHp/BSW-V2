<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permohonan;

use App\Flow;

use App\Wilayah;

use App\Http\Requests\PermohonanRequest;

use Illuminate\Support\Facades\DB;


class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wlyh = Wilayah::all();
        return view('Pages.BuatPermohonan.index', compact('wlyh'));
    }

    public function index_staf()
    {
        $dtPermohonan = Permohonan::with('flow','flow_kasubbid','flow_kabid','flow_direktur','wilayah')->latest()->paginate(10);
        return view('DashboardStaf.data-permohonan',compact('dtPermohonan'));
    }

    public function create()
    {
        $dtPermohonan = Permohonan::paginate(2);
        return view('Pages.BuatPermohonan.list', compact('dtPermohonan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'NPWP'                  => 'required',
            'NAMA_BADAN_HUKUM'      => 'required',
            'ALAMAT_BADAN_HUKUM'    => 'required',
            'NO_TELP_BADAN_HUKUM'   => 'required',
            'NO_KTP_BADAN_HUKUM'    => 'required',
            'NAMA_PENYERAH'         => 'required',
            'NO_TELP_PENYERAH'      => 'required',
            'NO_PL'                 => 'required',
            'TANGGAL_PL'            => 'required',
            'SUBWILAYAH'            => 'required',
            'ALAMAT'                => 'required',
            'LUAS_LOKASI'           => 'required',
            'PERUNTUKAN'            => 'required',
            'KONDISI_LOKASI'        => 'required',
            'BERKAS_SPP'            => 'required',
            'BERKAS_FSU'            => 'required',
            'BERKAS_FEP'            => 'required',
        ]);

        $spp = $request->BERKAS_SPP;
        $fsu = $request->BERKAS_FSU;
        $fep = $request->BERKAS_FEP;
        $fileSPP = time().rand(100,999).".".$spp->getClientOriginalExtension();
        $fileFSU = time().rand(100,999).".".$fsu->getClientOriginalExtension();
        $fileFEP = time().rand(100,999).".".$fep->getClientOriginalExtension();

        Permohonan::create([
            'NPWP'                  => $request->NPWP,
            'NAMA_BADAN_HUKUM'      => $request->NAMA_BADAN_HUKUM,
            'ALAMAT_BADAN_HUKUM'    => $request->ALAMAT_BADAN_HUKUM,
            'NO_TELP_BADAN_HUKUM'   => $request->NO_TELP_BADAN_HUKUM,
            'NO_KTP_BADAN_HUKUM'    => $request->NO_KTP_BADAN_HUKUM,
            'NAMA_PENYERAH'         => $request->NAMA_PENYERAH,
            'NO_TELP_PENYERAH'      => $request->NO_TELP_PENYERAH,
            'NO_PL'                 => $request->NO_PL,
            'TANGGAL_PL'            => $request->TANGGAL_PL,
            'SUBWILAYAH'            => $request->SUBWILAYAH,
            'ALAMAT'                => $request->ALAMAT,
            'LUAS_LOKASI'           => $request->LUAS_LOKASI,
            'PERUNTUKAN'            => $request->PERUNTUKAN,
            'KONDISI_LOKASI'        => $request->KONDISI_LOKASI,
            'BERKAS_SPP'            => $request->BERKAS_SPP,
            'BERKAS_FSU'            => $request->BERKAS_FSU,
            'BERKAS_FEP'            => $request->BERKAS_FEP,
            'flow_id'               => 1,
            'flow_kasubbid_id'      => 1,
            'flow_kabid_id'         => 1,
            'flow_direktur_id'      => 1
        ]);

        $spp->move(public_path().'/img', $fileSPP);
        $fsu->move(public_path().'/img', $fileFSU);
        $fep->move(public_path().'/img', $fileFEP);


        return redirect('listpermohonan')->with('toast_success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prmohonan = Permohonan::findorfail($id);
        $flw = Flow::all();
        $wlyh = Wilayah::all();
        return view('DashboardStaf.edit-permohonan',compact('prmohonan','flw','wlyh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        $search_text = $_GET['query'];
        $dtPermohonan = Permohonan::where('PERUNTUKAN','LIKE','%'.$search_text.'%')->get();

        return view('Pages.BuatPermohonan.list',compact('dtPermohonan'));
    }

    public function update(Request $request, $id)
    {
        $prmohonan = Permohonan::findorfail($id);
        $prmohonan->update($request->all());
        return redirect('data-permohonan')->with('toast_success', 'Data berhasil diupdate.');

    }

    public function download($id)
    {
        $dtPermohonan = DB::table('permohonan')->where('id',$id)->first();
        $filepath = storage_path("/img/{$dtPermohonan->gambar}");
        return \Response::download($filepath);
    }

    public function pagination()
    {
        $dtpermohonan = Permohonan::paginate(10);
        return view('Pages.Buat Permohonan.list', compact('dtpermohonan'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPermohonan = Permohonan::findorfail($id);
        $dtPermohonan->delete();

        return back()->with('info', 'Data Berhasil didelete');
    }
}
