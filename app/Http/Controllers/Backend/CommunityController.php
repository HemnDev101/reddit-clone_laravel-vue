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
$community = Community::paginate(5)->through(fn($community) => [
    'id' => $community->id,'name' => $community->id, 'slug' => $community->slug,  ]) ;

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

        return to_route('communities.index')->with('message' , 'Community Created Successfully.');
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
    public function edit(Community $community  )
    {
        return Inertia::render('Communities/Edit' , compact( 'community')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommunityStoreRequest $request, Community $community)
    {




        $community->update($request->validated());

        return to_route('communities.index')->with('message' , 'Community Update Successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Community $community)
    {
        $community->delete();
        return back()->with('message' , 'Community Deleted Successfully.') ;
    }

}
