<x-app-layout>

    @section('title', 'Dashboard')

    <!-- Chart -->
    <div class="row">

        <div class="col-12 col-lg-12 mb-3 mb-md-3">
            <div class="card p-3">
                <div class="row">
                    <div class="col col-lg-10 col-sm-6">
                        <div>
                            <div class="header fw-bold" style="font-size: 16px;">Total</div>
                            <small class="text-light">An overview of the totals</small>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-sm-6">
                        <div>
                            <form action="" method="get" id="chartForm">
                                <select name="year" id="year" class="form-select">
                                    <option value="">Select</option>
                                    <option value="">2023</option>
                                    <option value="">2024</option>
                                </select>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- End Chart -->

    <!-- Totals -->
    <div class="row">

        <div class="col-12 col-lg-4 mb-3 mb-md-3">
            <div class="card card-shadow p-3 px-3 total-card rounded justify-content-center overflow-hidden">
                <div>
                    <div class="fs-5">One</div>
                </div>
                <div class="fw-bold fs-4" style="">7,555</div>
                <i class="total-icons bx bx-calendar-check"></i>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 mb-md-3">
            <div class="card card-shadow p-3 px-3 total-card rounded justify-content-center overflow-hidden">
                <div>
                    <div class="fs-5">One</div>
                </div>
                <div class="fw-bold fs-4" style="">7,555</div>
                <i class="total-icons bx bx-calendar-check"></i>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 mb-md-3">
            <div class="card card-shadow p-3 px-3 total-card rounded justify-content-center overflow-hidden">
                <div>
                    <div class="fs-5">One</div>
                </div>
                <div class="fw-bold fs-4" style="">7,555</div>
                <i class="total-icons bx bx-calendar-check"></i>
            </div>
        </div>

    </div>
    <!-- End Totals -->

    <!-- Trendings -->
    <div class="row">

        <div class="col-12 col-lg-6 mb-3 mb-md-3">
            <div class="card p-3">
                <div class="mb-3">
                    <div class="header fw-bold" style="font-size: 16px;">Top 1</div>
                    <small class="text-light">An overview of top list</small>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><a class="text-secondary" href="#">name</a></td>
                            <td class="text-end fw-bold">535</td>
                        </tr>
                        <tr>
                            <td><a class="text-secondary" href="#">name</a></td>
                            <td class="text-end fw-bold">535</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-3 mb-md-3">
            <div class="card p-3">
                <div class="mb-3">
                    <div class="header fw-bold" style="font-size: 16px;">Top 2</div>
                    <small class="text-light">An overview of top list</small>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>name</td>
                            <td class="text-end fw-bold">1,020</td>
                        </tr>
                        <tr>
                            <td>name</td>
                            <td class="text-end fw-bold">890</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- End Trendings -->

    <div class="row">

        <div class="col-12 mb-3 mb-md-3">
            <div class="card p-3">
                <div class="mb-3">
                <div class="header fw-bold" style="font-size: 16px;">
                    Most Recent Transactions
                </div>
                <small class="text-light">An overview of latest transactions</small>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <th>#</th>
                        <th>User</th>
                        <th>Type</th>
                        <th>At</th>
                        <tbody>
                            <tr>
                                <td>TR0005</td>
                                <td>Administrator</td>
                                <td>Bank Transfer</td>
                                <td>30 September 2023 18:45</td>
                            </tr>
                            <tr>
                                <td>TR0004</td>
                                <td>Administrator</td>
                                <td>Bank Transfer</td>
                                <td>30 September 2023 18:45</td>
                            </tr>
                            <tr>
                                <td>TR0003</td>
                                <td>Administrator</td>
                                <td>Cash</td>
                                <td>30 September 2023 18:45</td>
                            </tr>
                            <tr>
                                <td>TR0002</td>
                                <td>Administrator</td>
                                <td>Bank Transfer</td>
                                <td>30 September 2023 18:45</td>
                            </tr>
                            <tr>
                                <td>TR0001</td>
                                <td>Administrator</td>
                                <td>Online Payment</td>
                                <td>30 September 2023 18:45</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
