<x-guest-layout>
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            List Users
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
            <div class="card-header">All Users</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="report" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Status</th>
                                <th>Date Joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Status</th>
                                <th>Date Joined</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="history.php?reference=016FT2024800001">Olumide Oderinde</a></td>
                            <td>scribespro@gmail.com</td>
                            <td><span class="badge badge-success py-2 px-4">Active</span></td>
                            <td>2020-09-04 10:33:23</td>
                            <td>
                                <a href="#" class="btn btn-info text-white btn-small"><i class="far fa-edit"></i> Edit</a> &nbsp;
                                <a href="#" class="btn btn-danger text-white btn-small"><i class="far fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
</main>
</x-guest-layout>