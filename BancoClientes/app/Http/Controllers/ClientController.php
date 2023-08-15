<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\Seller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
    
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $sellers = Seller::all();
        return view('clients.create', compact('sellers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'mail' => 'required|email',
            'person_type_id' => 'required|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sellers' => 'array', 
            'sellers.*' => 'integer', 
            'phones' => 'array', 
            'phones.*' => 'string', 
        ]);
        
        

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/images'); // Salva a imagem em storage/app/public/images
            $data['image_path'] = $photoPath;
        }
    
        $client = Client::create($data);

        if (!empty($data['phones'])) {
            foreach ($data['phones'] as $phoneNumber) {
                Phone::create([
                    'number' => $phoneNumber,
                    'client_id' => $client->id,
                ]);
            }
        }

        if (!empty($data['sellers'])) {
            $client->sellers()->attach($data['sellers']);
        }

        
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $sellers = Seller::all();
        return view('clients.show',compact('client', 'sellers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $sellers = Seller::all();
        return view('clients.edit',compact('client', 'sellers'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, Client $client)
        {
            $data = $request->validate([
                'name' => 'required|string',
                'mail' => 'required|email',
                'person_type_id' => 'required|integer',
                'sellers' => 'array', 
                'sellers.*' => 'integer', 
                'phones' => 'array', 
                'phones.*' => 'string', 
            ]);
        
            $client->update($data);
        
            $client->phones()->delete(); // Deleta os telefones existentes
            if (!empty($data['phones'])) {
                foreach ($data['phones'] as $phoneNumber) {
                    Phone::create([
                        'number' => $phoneNumber,
                        'client_id' => $client->id,
                    ]);
                }
            }
        
            if (!empty($data['sellers'])) {
                $client->sellers()->sync($data['sellers']); // Usar sync para sincronizar os vendedores existentes
            }
        
            return redirect()->route('clients.index');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
    
        return redirect()->route('clients.index');
    }
}
