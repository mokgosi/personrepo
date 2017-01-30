<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Language;
use Session;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::all();
        return view('persons.index')->withPersons($persons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Language::all(['name','id'])->pluck('name', 'id');
        return view('persons.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'email',
            'date_of_birth' =>'date',
            'language_id' =>'required',
        ]);

        $person = new Person;
        $person->first_name = $request->first_name;
        $person->surname = $request->surname;
        $person->date_of_birth = $request->date_of_birth;
        $person->email = $request->email;
        $person->mobile = $request->mobile;
        $person->language_id = $request->language_id;

        $person->save();

        Session::flash('success', 'Person added successfully.');

        return redirect()->route('person.show', $person->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('persons.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $items = Language::all(['name','id'])->pluck('name', 'id');
        return view('persons.edit', compact('person','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
         $this->validate($request, [
            'first_name' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'email' => 'email',
            'date_of_birth' =>'date',
            'language_id' =>'required',
        ]);

        $person->first_name = $request->input('first_name');
        $person->surname = $request->input('surname');
        $person->date_of_birth = $request->input('date_of_birth');
        $person->email = $request->input('email');
        $person->mobile = $request->input('mobile');
        $person->language_id = $request->input('language_id');

        $person->save();

        Session::flash('success', 'Person updated successfully.');

        return redirect()->route('person.show', $person->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
