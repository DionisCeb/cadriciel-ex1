@extends('master')
@section('title', 'CV')
@section('content')
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">CV</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Telecharge le CV
                                </a>
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2024 - Present</div>
                                                <div class="small fw-bolder">Web Developpeur</div>
                                                <div class="small text-muted">Ryan Web Technology</div>
                                                <div class="small text-muted">Toronto, ON</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2020 - 2022</div>
                                                <div class="small fw-bolder">UX/UI Designer</div>
                                                <div class="small text-muted">Car Invest</div>
                                                <div class="small text-muted">Vancouver, BC</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2023 - Present</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Collège de Maisonneuve </div>
                                                    <div class="small text-muted">Montréal, QC</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted"></div>
                                                    <div class="small text-muted">Conception et programmation de sites Web</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Education Card 2-->
                            
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Compétences</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">UX/UI</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">WordPress</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Figma</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PhotoShop</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">REACT</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        @endsection
        <!-- Footer-->
        
