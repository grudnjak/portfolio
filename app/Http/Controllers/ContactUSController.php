<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use App\Mail\mailus;

class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['contactUS','contactUSPost',]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $povprasevanja = ContactUS::orderBy('created_at','desc')->get();
        return view('povprasevanje.index')->with('povprasevanja',$povprasevanja);
    }

   public function contactUS()
   {
       return view('pages.contact');
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUSPost(Request $request)
   {
     
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'body' => 'required'
        ]);
     
     //
      $contactus = new ContactUS;
       $contactus->name = $request->input('name')  ;
       $contactus->email = $request->input('email')  ;
       $contactus->body = $request->input('body')  ;

       $contactus->save();
    
       /*Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('body')
       ), function($message)
   {
       $message->from('info@mas-catering.si');
       $message->to('info@mas-catering.si', 'Admin')->subject('Povpraševanje');
   });*/
   //$mail = new \stdClass();
Mail::to('info@fotografija-grudnik.si')->send(new mailus(array(
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'user_message' => $request->input('body'),
  
    
)));

    return back()->with('success', 'Thanks for contacting us!'); 


      
   }
}