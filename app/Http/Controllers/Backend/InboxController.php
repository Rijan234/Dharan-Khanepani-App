<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalRequests= Inbox::count();
        $pendingRequests = Inbox::where('status', 'pending')->count();
        $followupRequests = Inbox::where('status', 'follow-up')->count();
        $completedRequests = Inbox::where('status', 'completed')->count();
        // return $totalRequests;
        $inboxes = Inbox::with('customer')->orderBy('created_at', 'desc')->get();
    
        return view('inbox.index', compact('inboxes', 'totalRequests', 'pendingRequests', 'followupRequests', 'completedRequests'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $follow_up="Follow-up";
        $inbox= Inbox::find($id);
        $inbox->status=$follow_up;
        $inbox->update();
        return redirect()->back();
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
        $inbox= Inbox::find($id);
        $inbox->delete();
        return redirect()->back();
    }
}
