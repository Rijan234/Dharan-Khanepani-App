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

    // In BillingController.php
    public function getCustomerData(Request $request)
    {
        // return "iam here";
        // Fetch customer counts based on ward and tole
        $ward7 = Customer::where('ward_no', 'Ward-7')->count();
        $ward8 = Customer::where('ward_no', 'Ward-8')->count();
        $ward15 = Customer::where('ward_no', 'Ward-15')->count();

        $tole7A = Customer::where('tole', 'Tole 7A')->count();
        $tole7B = Customer::where('tole', 'Tole 7B')->count();
        $tole7C = Customer::where('tole', 'Tole 7C')->count();

        $tole8A = Customer::where('tole', 'Tole 8A')->count();
        $tole8B = Customer::where('tole', 'Tole 8B')->count();

        $tole15A = Customer::where('tole', 'Tole 15A')->count();
        $tole15B = Customer::where('tole', 'Tole 15B')->count();
        $tole15C = Customer::where('tole', 'Tole 15C')->count();

        // Return the data as JSON
        return response()->json([
            'ward7' => $ward7,
            'ward8' => $ward8,
            'ward15' => $ward15,
            'tole7A' => $tole7A,
            'tole7B' => $tole7B,
            'tole7C' => $tole7C,
            'tole8A' => $tole8A,
            'tole8B' => $tole8B,
            'tole15A' => $tole15A,
            'tole15B' => $tole15B,
            'tole15C' => $tole15C,
        ]);
    }
}
