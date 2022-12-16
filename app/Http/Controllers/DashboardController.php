<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Login user
    public function redirect()
    {
        return view('Redirect.redirect');
    }

    public function beranda()
    {
        return view('DashboardUser.beranda');
    }

    public function dashboard_index()
    {
        return view('Dashboard.dashboard');
    }

    public function buat_permohonan()
    {
        return view('DashboardUser.buatpermohonan');
    }

    public function list_permohonan()
    {
        return view('DashboardUser.listpermohonan');
    }

    public function tracking_permohonan()
    {
        return view('DashboardUser.tracking');
    }

    public function usulan()
    {
        return view('DashboardUser.usulan');
    }

    public function datadev()
    {
        return view('DashboardAdmin.datadev');
    }

    public function monitoring()
    {
        return view('DashboardAdmin.monitoring');
    }
    public function layanan()
    {
        return view('DashboardAdmin.layanan');
    }
    public function liburnasional()
    {
        return view('DashboardAdmin.liburnasional');
    }
    public function masterplane()
    {
        return view('DashboardAdmin.masterplane');
    }
    public function prosesizin()
    {
        return view('DashboardAdmin.prosesizin');
    }
    public function role()
    {
        return view('DashboardAdmin.role');
    }
    public function posisi()
    {
        return view('DashboardAdmin.posisi');
    }
    public function datapemohon()
    {
        return view('DashboardAdmin.datapemohon');
    }
    public function statistik()
    {
        return view('DashboardAdmin.statistik');
    }
    public function helpdesk()
    {
        return view('DashboardAdmin.helpdesk');
    }
    public function caridata()
    {
        return view('DashboardAdmin.caridata');
    }

    public function detail()
    {
        return view('Pages.BuatPermohonan.detail');
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
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
