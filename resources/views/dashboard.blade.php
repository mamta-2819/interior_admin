 <x-layout>
    @slot('body')
        <div class="py-4">
            <div class="row justify-content-lg-center">
                <div class="col-12 mb-4">
                    <div class="card border-0 bg-yellow-100 shadow">
                        <div class="card-header d-sm-flex flex-row align-items-center border-yellow-200 flex-0">
                            <div class="d-block mb-3 mb-sm-0">
                                <div class="fs-5 fw-normal mb-2"> <i class="fas fa-comment-alt-exclamation    "></i> Total
                                    Contact</div>
                                <h2 class="fs-3 fw-extrabold">10,567</h2>
                                <div class="small mt-2"><span class="fw-normal me-2">Yesterday</span> <span
                                        class="fas fa-angle-up text-success"></span> <span
                                        class="text-success fw-bold">10.57%</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-xxl-4 mb-4">
                    <div class="card notification-card border-0 shadow">
                        <div class="card-header d-flex align-items-center">
                            <h2 class="fs-5 fw-bold mb-0">Notifications</h2>
                            <div class="ms-auto"><a class="fw-normal d-inline-flex align-items-center" href="#"><svg
                                        class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg> View all</a></div>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush list-group-timeline">
                                <div class="list-group-item border-0">
                                    <div class="row ps-lg-1">
                                        <div class="col-auto">
                                            <div class="icon-shape icon-xs icon-shape-purple rounded"><svg
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                        <div class="col ms-n2 mb-3">
                                            <h3 class="fs-6 fw-bold mb-1">You sold an item</h3>
                                            <p class="mb-1">Bonnie Green just purchased "Volt - Admin Dashboard"!
                                            </p>
                                            <div class="d-flex align-items-center"><svg
                                                    class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg> <span class="small">1 minute ago</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-0">
                                    <div class="row ps-lg-1">
                                        <div class="col-auto">
                                            <div class="icon-shape icon-xs icon-shape-primary rounded"><svg
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                                        clip-rule="evenodd"></path>
                                                </svg></div>
                                        </div>
                                        <div class="col ms-n2 mb-3">
                                            <h3 class="fs-6 fw-bold mb-1">New message</h3>
                                            <p class="mb-1">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            <div class="d-flex align-items-center"><svg
                                                    class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg> <span class="small">8 minutes ago</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-0">
                                    <div class="row ps-lg-1">
                                        <div class="col-auto">
                                            <div class="icon-shape icon-xs icon-shape-warning rounded"><svg
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg></div>
                                        </div>
                                        <div class="col ms-n2 mb-3">
                                            <h3 class="fs-6 fw-bold mb-1">Product issue</h3>
                                            <p class="mb-0">A new issue has been reported for Pixel Pro.</p>
                                            <div class="d-flex align-items-center"><svg
                                                    class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg> <span class="small">10 minutes ago</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-0">
                                    <div class="row ps-lg-1">
                                        <div class="col-auto">
                                            <div class="icon-shape icon-xs icon-shape-success rounded"><svg
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                                        clip-rule="evenodd"></path>
                                                </svg></div>
                                        </div>
                                        <div class="col ms-n2 mb-3">
                                            <h3 class="fs-6 fw-bold mb-1">Product update</h3>
                                            <p class="mb-0">Spaces - Listings Template has been updated</p>
                                            <div class="d-flex align-items-center"><svg
                                                    class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg> <span class="small">4 hours ago</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-0">
                                    <div class="row ps-lg-1">
                                        <div class="col-auto">
                                            <div class="icon-shape icon-xs icon-shape-success rounded"><svg
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                                        clip-rule="evenodd"></path>
                                                </svg></div>
                                        </div>
                                        <div class="col ms-n2">
                                            <h3 class="fs-6 fw-bold mb-1">Product update</h3>
                                            <p class="mb-0">Volt - Admin Dashboard has been updated</p>
                                            <div class="d-flex align-items-center"><svg
                                                    class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg> <span class="small">8 hours ago</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endslot
</x-layout>
