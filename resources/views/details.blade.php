<x-guest-layout>
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                Transaction Details
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
                <div class="card-header">Message Type</div>
                <div class="card-body mx-auto">
                    @if($messages->count() > 0)
                    <div class="border p-2 my-2">
                        <pre id="text">
                            {{ str_replace('?', '-', $messages->messages) }}
                        </pre>
                    </div>
                    @endif

                    <button class="btn btn-info" id="download"><i class="fa fa-download mr-1"></i> Download as PDF</button>
    </main>
    </x-guest-layout>
    