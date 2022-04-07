<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function __construct()
    {   
        $this -> middleware('organization.role:manager', ['except' => ['index']]);
    }
    /**
     * Method to Delete Invoice
     */
    public function delete(Request $request)
    {
        // validate request if it contains invoice id
        $request->validate([
            'invoice_id' => 'required|numeric',
        ]);

        // get invoice id from request
        $invoice_id = $request->input('invoice_id');

        // get invoice by id
        $invoice = Invoice::find($invoice_id);

        // check if invoice state is unpaid 
        if ($invoice -> invoice_state_id != 1){
            return redirect() -> back() -> with('message', 'Invoice is not in unpaid state');
        }

        $current_user_organization_id = organization_id();
        // check if invoice belongs to current user organization
        if ($invoice -> service_order -> service -> organization_id != $current_user_organization_id){
            return redirect() -> back() -> with('message', 'Invoice does not belong to your organization');
        }

        $invoice -> delete();
        return redirect() -> back() -> with('message', 'Invoice deleted successfully', ['except' => ['index']]);
    }

    /**
     * Method to return list of invoices for current user with simplepagination and sortable
     * @return view
     */
    public function index()
    {
        $user = Auth::user();

        // Select Invoice where user_id = current user id
        $invoices = Invoice::where('user_id', $user -> id)
            -> orderBy('due', 'desc')
            -> simplePaginate(10);
        
        return view('invoice.index', compact(
            'invoices'
        ));
    }



    


}
