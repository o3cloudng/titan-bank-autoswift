<x-guest-layout>
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                AutoSwift Search
                            </h1>
                            <div class="page-header-subtitle ml-5">Live Report for AutoSwift Processes</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <!-- Example DataTable for Dashboard Demo-->
            <div class="card mb-4">
                <div class="card-header">Swift Messages <small>(<strong>{{ $count->count() }}</strong> Record counts )</small></div>
                <div class="card-body">
                  
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="report" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Reference</th>
                                    <th>Related Ref</th>
                                    <th>Message Type</th>
                                    <th>Amount</th>
                                    <th>I/O</th>
                                    <th>Institution</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Reference</th>
                                    <th>Related Ref</th>
                                    <th>Message Type</th>
                                    <th>Amount</th>
                                    <th>I/O</th>
                                    <th>Institution</th>
                                    <th>Date</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @if($messages->count() > 0)
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ route('history') }}/{{ rawurlencode($message->id) }}">{{ $message->reference }}</a></td>
                                        <td>{{ $message->relatedref }}</td>
                                        <td>{{ $message->msgtype }}</td>
                                        <td>{{ $message->currency }} {{ $message->amount }}</td>
                                        <td>{{ $message->inputoutput }}</td>
                                        <td>{{ $message->institution }}</td>
                                        {{-- <td>{{ \Carbon\Carbon::parse($message->createddate)->diffForHumans() }}</td> --}}
                                        <td>{{ $message->createddate }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr><td colspan="5">No records found.</td></tr>
                            @endif
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {!! $messages->links() !!}
                        </div>
                    </div>
                                        </div>
            </div>
        </div>
    </main>
    </x-guest-layout>