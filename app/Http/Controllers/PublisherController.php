<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index(){
       $publishers = Publisher::all();
       return view('library.index', ['publishers' => $publishers]);

    }

    public function create() {
        return view('library.create');
    }

    public function publish(Request $request) {
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $newPublisher = Publisher::create([
            'publisher_name' => $data['name'],
            'publisher_address' => $data['address'],
            'publisher_phone' => $data['phone']
        ]);

        return redirect(route('library.index'));
    }


    public function edit(Publisher $publisher){
        return view('library.edit', ['publisher' => $publisher]);
    }


    public function update(Publisher $publisher, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $publisher->update([
            'publisher_name' => $data['name'],
            'publisher_address' => $data['address'],
            'publisher_phone' => $data['phone']
        ]);

        return redirect(route('library.index'))->with('success', 'Publisher Updated Succesffully');
    }

    public function destroy(Publisher $publisher){
        $publisher->delete();
        return redirect(route('library.index'))->with('success', 'Publisher Deleted Succesffully');
    }
}
