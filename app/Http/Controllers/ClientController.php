<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Account;
use App\License;
use App\Device;
use Mail;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(20);
 
        return view('clients.index',compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * 20);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');

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

        Client::create($request->all());
        
           /*Send mail
           $data = array("body" =>"Foi adicionado o cliente $request->name");
                    Mail::send('emails.clients', $data, function($message){
                    $message->to('brunoestevao@onsystem.pt', 'sysdmin')->subject('Cliente adicionado');
                    $message->from('no_reply@onsystem.pt', 'Onsystem Control');
                });
            end send mail*/

        return redirect()->route('clients.index')
                        ->with('success','Client created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $accounts = Account::all()->where('client_id', $client->id);
        $licenses = License::all()->where('client_id', $client->id);
        $devices = Device::all()->where('client_id', $client->id);
        return view('clients.show',compact('client', 'accounts', 'licenses', 'devices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
         $request->validate([
            'name' => 'required',
        ]);
  
        $client->update($request->all());
  
        return redirect()->route('clients.index')
                        ->with('success','Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
  
        return redirect()->route('clients.index')
                        ->with('success','Client deleted successfully');
    }
}
