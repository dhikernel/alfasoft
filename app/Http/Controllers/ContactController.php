<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('contact.index',compact('contacts'));
    }

    public function create()
    {
        return view('contact/create');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('index.form')
            ->with('success', 'Mensagem enviada com sucesso!');
    }

    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contact/details',compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact/edit',compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('index.form')->with('message','Contato atualizado com sucesso!');
    }

    public function destroy(int $id)
    {
        return $this->repository->deleteRecord($id);
    }
}
