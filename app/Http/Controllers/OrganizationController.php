<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrganizatinRequest;
use App\Models\Document;
use App\Models\Image;
use App\Models\Organization;
use App\Models\UserOrganizationMembership;
use App\Models\UserOrganizationMembershipRole;
use Illuminate\Cache\RedisStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{

    public function __construct()
    {
        $this->middleware('organization.role:admin', ['except' => ['create', 'store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrganizatinRequest $request)
    {


        $validated = $request->validated();
        $organization = Organization::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'organization_state_id' => 1
        ]);

        $organization->save();

        $user_membership = new UserOrganizationMembership();
        $user_membership->user_id = Auth::id();
        $user_membership->organization_id = $organization->id;
        $user_membership->save();

        $user_membership_role = new UserOrganizationMembershipRole();
        $user_membership_role->organization_role_id = 1;
        $user_membership_role->user_organization_membership_id = $user_membership->id;
        $user_membership_role->save();





        $fileName = time() . '.' . $request->identification->extension();
        $path = public_path('uploads') . "/" . $fileName;
        $request->identification->move(public_path('uploads'), $fileName);

        $document = new Document();
        $document->document_path = $path;

        $organization->documents()->save($document);
        return redirect()->home()->with('message', "Organization Created Successfully! Now you will only have to wait for it to get verified.. ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        if (organization_id() != $organization->id) {
            return redirect()->route('home')->with('message', 'Unauthorized Action');
        }
        return view('organizations.show', compact(
            'organization'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        
    }


    public function updateName(Request $request, Organization $organization)
    {
        if (organization_id() != $organization->id) {
            return redirect()->route('home')->with('message', 'Unauthorized Action');
        }

        $request->validate([
            'name' => ['required', 'max:255', 'min:3'],
        ]);

        $organization->name = $request->name;
        $organization->save();

        return redirect()->route('organizations.show', ['organization' => $organization->id])->with('message', 'Organization Name Updated Successfully!');
    }

    public function updateDescription(Request $request, Organization $organization)
    {
        if (organization_id() != $organization->id) {
            return redirect()->route('home')->with('message', 'Unauthorized Action');
        }

        $request->validate([
            'description' => ['required', 'max:1020', 'min:2'],
        ]);

        $organization->description = $request->description;
        $organization->save();


        return redirect()->route('organizations.show', ['organization' => $organization->id])->with('message', 'Organization Description Update Successfully');
    }
}
