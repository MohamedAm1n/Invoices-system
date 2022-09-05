<?php
namespace App\Http\Controllers;
use App\Models\Status;
use App\Models\Invoice;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.invoices',['invoices'=>$invoices]);
    }
    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        $sections = Section::all();
        return view('invoices.add_invoices',['sections'=>$sections,'statuses'=>$statuses]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $val = $request->validate([
            'section_id'=>'required',
            'product_id'=>'required',
            'status_id'=>'required',
            'invoice_number'=>'required',
            'invoice_date'=>'required|date',
            'due_date'=>'required|date',
            'amount_collection'=>'required',
            'amount_commission'=>'required',
            'discount'=>'required',
            'value_vat'=>'required',
            'rate_vat'=>'required',
            'total'=>'required',
            'notes'=>'string'
        ]);
        // $val = $request->all();
        $val['created_by'] = auth()->user()->name;
        if (!$val)
            return redirect(route('invoices.create'))->with('message');
        else
            Invoice::create($val);
            return redirect(route('invoices'))->with('message','تم إضافة الفاتورة بنجاح');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
    public function getProducts($id)
    {
        $products = DB::table('products')->where('section_id',$id)->pluck('product_name','id');
        return json_encode($products);
    }
}
