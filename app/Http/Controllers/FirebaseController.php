<?php

namespace App\Http\Controllers;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Firestore;
class FirebaseController extends Controller
{
    public function insert(Request $req)
    {
        $firstname = $req->firstname;
        $lastname = $req->lastname;

        $sturef = app('firebase.firestore')
            ->database()
            ->collection('Student')
            ->newDocument();

        $sturef->set([
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);
        return redirect('/glist');
    }

    // public function getList()
    // {
    //     $serviceAccount = ServiceAccount::fromJsonFile(
    //         __DIR__ . '/firebase_credentials.json'
    //     );
    //     $firebase = (new Factory())
    //         ->withServiceAccount($serviceAccount)
    //         ->withDatabaseUri('https://laravel6firebase.firebaseio.com/')
    //         ->create();

    //     $database = $firebase->getDatabase();
    //     $createPost = $database->getReference('blog/posts')->getvalue();
    //     return response()->json($createPost);
    //     $database = $factory->createDatabase();

    //     $students = app('firebase.firestore')
    //         ->database()
    //         ->collection('Student')
    //         ->documents();
    //     return view('/list', ['data' => $students]);
    // }

    function delete(Request $req, $id)
    {
        app('firebase.firestore')
            ->database()
            ->collection('Student')
            ->document($id)
            ->delete();
        return redirect('/glist');
    }
    function edit(Request $req, $id)
    {
        $upd_id = $id;
        $student = app('firebase.firestore')
            ->database()
            ->collection('Student')
            ->document($id);
        $data = $student->snapshot()->data();
        return view('/edit', ['data' => $data, 'upd_id' => $upd_id]);
    }
    function update(Request $req)
    {
        $id = $req->upd_id;
        $firstname = $req->firstname;
        $lastname = $req->lastname;
        app('firebase.firestore')
            ->database()
            ->collection('Student')
            ->document($id)
            ->update([
                ['path' => 'firstname', 'value' => $firstname],
                ['path' => 'lastname', 'value' => $lastname],
            ]);
        // ['firstname' => $firstname, 'lastname' => $lastname]]);
        return redirect('glist');
    }
}
