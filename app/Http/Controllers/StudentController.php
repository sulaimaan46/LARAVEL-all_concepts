<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\book;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{

    /**
     * StudentController constructor.
     * @param Author $author
     */
    public function __construct(Author $author,User $user)
    {
            $this->author = $author;
        $this->user = $user;


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
//        INSERT INTO `authors` (`id`, `name`, `email`, `address`, `created_at`, `updated_at`) VALUES (NULL, in_name , in_email, 'sfdsd', NULL, NULL);
//        $email = md5(uniqid(rand(), true));
        $email = "jasin@gmail.com";
        $name = 'jaison2';

        //Store Procedure Concepts

//            $sp = DB::select('call GetCustomerLevel(?)',array($email));
//            $sp = DB::select('call getemail(?)',array($email));
//            $sp = DB::select('call sp_postauthor(?,?,@out_maxid)',array($email,$name ));
//            $sp = DB::select('call sp_postauthor(?,?)',array($email,$name ));
//            $var = DB::select('call getname()');
            $sp = DB::select('call insertauthor(?,?)',array($name,$email));
//            $sps = DB::select('SELECT @out_maxid' );
//echo $sp;
//exit;
//exit;
//exit;
//            dd($ins);
//            if($sp['id'] == true){
//                echo "Success";
//            }else{
//                echo "Fsiled";
//            }

//        $sp = DB::select('call getemail("$email")');
//        $spro = DB::select('CALL GetCustomerLevel(name)' , array($d));

//        dd($sp);

        $students=$this->author->where('name', 'George Kuphal')->with('getprofile')->first();

//       dd($students);



        return view('student' ,compact('students'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author=$this->author->where('name', 'George Kuphal')->first();
        $book=Book::first();

//        App\Models\author_book::find(1)(['description' => 'something'])->save();

        $author_book = $author->book()->attach($book);
        dd($author_book);

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
    public function show()
    {

        $student = "";
//        dd($students);

        return view('student_add');
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
