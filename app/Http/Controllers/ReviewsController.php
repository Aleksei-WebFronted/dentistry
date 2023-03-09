<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewsRequest;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    
public function submit(ReviewsRequest $req){
    
    $Reviews = new Reviews();
    $Reviews->name = $req->input('name');
    $Reviews->message = $req->input('message');

    $Reviews->save();

    return redirect()->route('home')->with('success','Сообщение было отправлено');
}

public function allData(){
    return view('messages',['data'=>Contact::all()]);
}

public function showOneMessage($id){
    return view('one-message',['data'=>Contact::find($id)]);
}

public function updateMessage($id){
    $contact = new Contact();
    return view('update-message',['data'=>Contact::find($id)]);
}

public function updateMessageSubmit($id, ContactRequest $req){
    $contact = Contact::find($id);
    $contact->name = $req->input('name');
    $contact->email = $req->input('email');
    $contact->subject = $req->input('subject');
    $contact->message = $req->input('message');

    $contact->save();

    return redirect()->route('contact-data-one', $id)->with('success','Сообщение было обновлено');
}

public function deleteMessage($id){
    Contact::find($id)->delete();
    return redirect()->route('contact-data', $id)->with('success','Сообщение было удалено');
}

}
