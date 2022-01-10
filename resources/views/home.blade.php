@extends('layouts.default')

@section('title', 'Bitpanda - Test2')
    
@section('content')

<div class="card mt-5">
  
    <div class="card-body">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Code</th>
                    <th>Amount</th>
                    <th>User Id</th>
                    <th>Created At</th>
                    <th>Source</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $transaction)
                    <tr>
                        <td scope="row">{{ $transaction->id }}</td>
                        <td scope="row">{{ $transaction->code }}</td>
                        <td scope="row">{{ $transaction->amount }}</td>
                        <td scope="row">{{ $transaction->user_id }}</td>
                        <td scope="row">{{ $transaction->created_at }}</td>
                        <td scope="row">{{ $transaction->source }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {!! $data->appends(request()->input())->links(); !!}
        
    </div>
</div>

@endsection