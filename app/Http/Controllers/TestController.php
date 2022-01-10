<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetTransactionRequest;
use App\Services\CSVTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TestController extends Controller
{
    public function getTransactions(Request $request)
    {
        if($this->validateTransactionRequest($request))
            return view('error');

        if($request->source == 'db') 
            $data = Transaction::paginate();
        else {
            $csvService = new CSVTransaction();
            $data = Collection::paginate($csvService->get());    
        }

        return view('home', compact('data'));  
    }

    protected function validateTransactionRequest($request)
    {
        return Validator::make($request->all(), [
            'source' => [
                Rule::in(['db', 'csv']),
            ],
        ])->fails();
    }

}
