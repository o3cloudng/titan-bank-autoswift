<x-guest-layout>
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            AutoSwift Dashboard
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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/content/cover_image_file/cover_image/686749/regular_800x320_cover-0823-DashboardDesign-Dan-Newsletter-4b673291c44139549875f88c8c1c9a60.png" alt="card image"></p>
                                    <h4 class="card-title">No. of Transactions</h4>
                                    <h2 class="card-text">{{ $messages->count() }}</h2>
                                    {{-- <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/content/cover_image_file/cover_image/686749/regular_800x320_cover-0823-DashboardDesign-Dan-Newsletter-4b673291c44139549875f88c8c1c9a60.png" alt="card image"></p>
                                    <h4 class="card-title">No. of Transactions</h4>
                                    <h2 class="card-text">{{ $messages->count() }}</h2>
                                    {{-- <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/content/cover_image_file/cover_image/686749/regular_800x320_cover-0823-DashboardDesign-Dan-Newsletter-4b673291c44139549875f88c8c1c9a60.png" alt="card image"></p>
                                    <h4 class="card-title">No. of Transactions</h4>
                                    <h2 class="card-text">{{ $messages->count() }}</h2>
                                    {{-- <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                    </div>
        </div>
    </div>
</main>
</x-guest-layout>