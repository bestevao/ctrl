<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use App\Client;
use App\Backup;
use Response;


class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::latest()->paginate(20);
 
        return view('devices.index',compact('devices'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('devices.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Device::create($request->all());

        return redirect()->route('devices.index')
                        ->with('success','Device created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        $backups = $device->backups;

        return view('devices.show',compact('device', 'backups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $clients = Client::all();
        $client = Client::find($device->client_id);
        return view('devices.edit',compact('device', 'clients', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        $device->update($request->all());
  
        return redirect()->route('devices.index')
                        ->with('success','Device updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
  
        return redirect()->route('devices.index')
                        ->with('success','Device deleted successfully');
    }


    public function upload(Request $request, Device $device, Backup $backup)
    {
        //dd($device->id);
        $fileName = request()->fileToUpload->getClientOriginalName();
        $request->fileToUpload->storeAs('public/backups',$fileName);
        $filepath = "storage/backups/$device->id/";

        $Backups = new Backup();
        $Backups->device_id = $device->id;
        $Backups->file = $fileName;
        $Backups->path = $filepath;
        $Backups->save();

        return redirect()->back()->with('message', 'Successfully Save Your backup file.');
        
    }
    public function download(Request $request, Backup $backup)
    {

        
    $file = 'key.txt';
    $path = 'storage/backups/';
    
    return response()->download($path, $file);
    }

}
