<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\ProductProduct;
use App\Models\TrackingDelivery;
use Illuminate\Support\Facades\DB;
use App\Models\TransactionDetail;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard-view.dashboard');
    }

    public function product()
    {
        return redirect('/product_products');
    }

    public function categoryProduct()
    {
        return redirect('/product_categories');
    }
    public function delivery()
    {
        return redirect('/postages');
    }


    public function blog()
    {
        return redirect('/blogs');
    }

    public function tagBlog()
    {
        return redirect('/tags');
    }
    public function reportTransaksi()
    {


        $reports = DB::table('transactions')
            ->selectRaw('DATE(created_at) as report_date, 
                     COUNT(midtrans_order_id) as total_orders, 
                     SUM(shipping_cost) as total_shipping,
                     SUM(total_amount - shipping_cost) as total_unit,
                     SUM(total_amount) as total_amount')
            ->where('payment_status', 'paid')
            ->groupByRaw('DATE(created_at)')
            ->orderByRaw('DATE(created_at) ASC')
            ->get();

        $totalRevenue = DB::table('transactions')
            ->where('payment_status', 'paid')
            ->sum('total_amount');


        return view('dashboard-view.report-transaki', compact('reports', 'totalRevenue'));
    }
    public function salesItem()
    {
        // Query untuk mendapatkan data penjualan per item
        $salesByItem = DB::table('product_products')
            ->select(
                'id',
                'name',
                'product_stock', // Ganti stock menjadi product_stock
                DB::raw('(SELECT SUM(quantity) FROM transaction_details 
                        WHERE product_products.id = transaction_details.product_product_id 
                        AND EXISTS (SELECT * FROM transactions 
                                    WHERE transaction_details.transaction_id = transactions.id 
                                    AND payment_status = "paid")
                        ) as total_sold')
            )
            ->get();
        $totalItemsSold = DB::table('transaction_details')
            ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
            ->where('transactions.payment_status', 'paid')
            ->sum('transaction_details.quantity'); // Count total items sold (quantity)
        return view('dashboard-view.sales-item', compact('salesByItem', 'totalItemsSold'));
    }
    public function salesCategory()
    {
        return view('dashboard-view.sales-category');
    }
    public function adminInvoicePending()
    {
        $transactions = Transaction::where('payment_status', 'pending')->get();
        $pendingTransactionsCount = Transaction::where('payment_status', 'pending')->count();

        return view('dashboard-view.invoice-pending', compact('transactions', 'pendingTransactionsCount'));
    }
    public function adminInvoicePaid()
    {
        $transactions = Transaction::where('payment_status', 'paid')->get();
        $paidTransactionsCount = Transaction::where('payment_status', 'paid')->count();

        return view('dashboard-view.invoice-paid', compact('transactions', 'paidTransactionsCount'));
    }
    public function detailInvoice($id)
    {
        // Ambil transaksi beserta detailnya
        $transaction = Transaction::with('details.product')->where('midtrans_order_id', $id)->firstOrFail();

        // Tampilkan halaman detail invoice
        return view('dashboard-view.detail-invoice', compact('transaction'));
    }

    public function reportProductReview()
    {
        return view('dashboard-view.report-transaki');
    }
}
