@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">IDonation</h1>
            <p class="lead">Platform donasi untuk saudara kita yang membutuhkan.</p>
        </div>
    </div>

    <div class="container">
        <table class="table table-striped" id="list">
            <tr>
                <th>ID</th>
                <th>Donor Name</th>
                <th>Amount</th>
                <th>Donation Type</th>
                <th>Status</th>
                <th style="text-align: center;"></th>
            </tr>
            @foreach ($donations as $donation)
            <tr>
                <td><code>{{ $donation->id }}</code></td>
                <td>{{ $donation->donor_name }}</td>
                <td>Rp. {{ number_format($donation->amount) }},-</td>
                <td>{{ ucwords(str_replace('_', ' ', $donation->donation_type)) }}</td>
                <td>{{ ucfirst($donation->status) }}</td>
                <td style="text-align: center;">
                    @if ($donation->status == 'pending')
                    <button class="btn btn-success btn-sm" onclick="snap.pay('{{ $donation->snap_token }}')">Complete Payment</button>
                    @endif
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="6">{{ $donations->links() }}</td>
            </tr>
        </table>
    </div>

</div>
@endsection
