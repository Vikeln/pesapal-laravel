@extends('frontend.layouts.app')

@section('title', __('Pesapal Registered IPNs'))

@section('content')
    <div id="app" class="col-12">
        <main>
            <div id="ipn-urls" class="container pesapal ipn-urls">
                <table class="table table-striped">
                    <caption>Registered IPNs</caption>
                    <tr>
                        <th>URL</th>
                        <th>Created At</th>
                        <th>IPN ID</th>
                        <th>Error</th>
                        <th>Status</th>
                    </tr>
                    @forelse ($ipns as $ipn)
                        <tr>
                            <td>{{ $ipn->url }}</td>
                            <td>{{ $ipn->created_date }}</td>
                            <td>{{ $ipn->ipn_id }}</td>
                            <td>{{ $ipn->error }}</td>
                            <td>{{ $ipn->status }}</td>
                        </tr>
                    @empty
                        <p>No URLs found!</p>
                    @endforelse
                    <p><a href="{{ config('app.url', '/') }}">Home</a></p>
                </table>
            </div>
        </main>
    </div><!--app-->
@endsection