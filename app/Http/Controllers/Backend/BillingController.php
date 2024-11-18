<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $customers = Customer::where('meter_id', 'LIKE', "%{$query}%")
            ->orWhere('phone_number', 'LIKE', "%{$query}%")
            ->get();
    
        if ($request->ajax()) {
            // Render only the search results section
            return response()->json([
                'html' => view('billing.partials.search-results', compact('customers'))->render()
            ]);
        }
    
        // Return the full view for non-AJAX requests
        return view('billing.index', compact('customers'));
    }
    

    protected function extractSearchResultsHtml($html)
    {
        // Extract only the search results section from the HTML
        $start = strpos($html, '<!-- START SEARCH RESULTS -->');
        $end = strpos($html, '<!-- END SEARCH RESULTS -->');

        if ($start !== false && $end !== false) {
            $start += strlen('<!-- START SEARCH RESULTS -->');
            return substr($html, $start, $end - $start);
        }

        return '';
    }
}
