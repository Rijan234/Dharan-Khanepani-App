<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function complete($id)
    {
        $inbox = Inbox::find($id);
        if (!$inbox) {
            return redirect()->back()->with('error', 'Inbox item not found');
        }
        $inbox->status = 'completed';
        $inbox->save(); // Use save() instead of update()
        return redirect()->back()->with('success', 'Inbox marked as complete');
    }

    public function destroy($id)
    {
        $inbox = Inbox::find($id);
        if (!$inbox) {
            return redirect()->back()->with('error', 'Inbox item not found');
        }
        $inbox->delete(); // Correct deletion method
        return redirect()->back()->with('success', 'Inbox deleted successfully');
    }
}
