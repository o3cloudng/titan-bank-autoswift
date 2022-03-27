<x-guest-layout>
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                Reference History
                            </h1>
                            <div class="page-header-subtitle ml-5">Live Report for AutoSwift Processes</div>
                        </div>
                        <!-- <div class="col-12 col-xl-auto mt-4">
                                    <button class="btn btn-white btn-sm line-height-normal p-3" id="reportrange">
                                        <i class="mr-2 text-primary" data-feather="calendar"></i>
                                        <span></span>
                                        <i class="ml-1" data-feather="chevron-down"></i>
                                    </button>
                                </div> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <!-- Example DataTable for Dashboard Demo-->
            <div class="card mb-4">
                <div class="card-header">Swift Messages</div>
                <div class="card-body">
                  
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="report" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Reference</th>
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
                                    <th>Message Type</th>
                                    <th>Amount</th>
                                    <th>I/O</th>
                                    <th>Institution</th>
                                    <th>Date</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @if($history->count() > 0)
                                @foreach($history as $hist)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ route('details') }}/{{ rawurlencode($hist->id) }}">{{ $hist->reference }}</a></td>
                                        <td>{{ $hist->msgtype }}</td>
                                        <td>{{ $hist->amount }}</td>
                                        <td>{{ $hist->inputoutput }}</td>
                                        <td>{{ $hist->institution }}</td>
                                        <td>{{ $hist->createddate }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr><td colspan="5">No records found.</td></tr>
                            @endif
                            </tbody>
                        </table>
                        {{-- {!! $messages->links() !!} --}}
                    </div>
                                        </div>
            </div>
        </div>
    </main>
    </x-guest-layout>