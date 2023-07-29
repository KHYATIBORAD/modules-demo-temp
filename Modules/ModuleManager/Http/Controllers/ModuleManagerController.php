<?php

namespace Modules\ModuleManager\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ModuleManager\Entities\Modulemanagermodel;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\File;

class ModuleManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //D:\htdocs\lv.local\modules-demo-temp\Modules\ModuleManager\laravel-modules
        // D:\htdocs\lv.local\modules-demo-temp\vendor\nwidart\laravel-modules
        $from = Module::getPath().'\ModuleManager\laravel-modules';
        $to = base_path('\vendor\nwidart\laravel-modules');
        File::copyDirectory($from, $to);
        return view('modulemanager::index');
    }

    public function all_modules()
    {
        $allModules = Modulemanagermodel::get();
        return view('modulemanager::modulemanager.all_modules', compact('allModules'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('modulemanager::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('modulemanager::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('modulemanager::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function moduleUpdateStatus($id)
    {
        if (!empty($id)) {
            $module = Modulemanagermodel::find($id);
            $status = ($module['is_active'] == '1' ? '0' : '1');
            Modulemanagermodel::where('id', $id)->update(['is_active' => $status]);
            return redirect()->route('all_modules');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function moduleDelete($id, $moduleName)
    {
        if (!empty($id) && !empty($moduleName)) {
            if (Module::delete($moduleName) && Modulemanagermodel::where('id', $id)->delete()) {
                return redirect()->route('all_modules');
            }
            return redirect()->route('all_modules');
        }
    }
}
