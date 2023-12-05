<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommunityStoreRequest;
use App\Models\Community;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$community = Community::all() ;
return Inertia::render('Communities/Index' , compact('community') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {

       return Inertia::render('Communities/Create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommunityStoreRequest $request)
    {
//        $request->id =    auth()->id()  ;
// return $request  ;
//Community::create($request   );
//
//return to_route('communities.index');


        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->id();

        $community = Community::create($validatedData);

        return to_route('communities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
