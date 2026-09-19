<div class="page-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 mb-0">Dashboard</h2>
        </div>
    </div>

    <!-- Statistics Cards Section -->
    <section class="py-0">
        <div class="container-fluid">
            <div class="row g-3">
                <!-- Total User -->
                <div class="col-xl-3 col-md-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between mb-2">
                            <div class="title d-flex align-items-center gap-2">
                                <div class="icon"><i class="icon-user-1"></i></div>
                                <strong>Total User</strong>
                            </div>
                            <div class="number dashtext-1 fs-4 fw-bold">{{ $user }}</div>
                        </div>
                        <div class="progress progress-template" style="height: 6px;">
                            <div class="progress-bar dashbg-1" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <!-- Total Product -->
                <div class="col-xl-3 col-md-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between mb-2">
                            <div class="title d-flex align-items-center gap-2">
                                <div class="icon"><i class="icon-contract"></i></div>
                                <strong>Total Product</strong>
                            </div>
                            <div class="number dashtext-2 fs-4 fw-bold">{{ $product }}</div>
                        </div>
                        <div class="progress progress-template" style="height: 6px;">
                            <div class="progress-bar dashbg-2" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <!-- Total Order -->
                <div class="col-xl-3 col-md-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between mb-2">
                            <div class="title d-flex align-items-center gap-2">
                                <div class="icon"><i class="icon-paper-and-pencil"></i></div>
                                <strong>Total Order</strong>
                            </div>
                            <div class="number dashtext-3 fs-4 fw-bold">{{ $order }}</div>
                        </div>
                        <div class="progress progress-template" style="height: 6px;">
                            <div class="progress-bar dashbg-3" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <!-- Total Delivery -->
                <div class="col-xl-3 col-md-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between mb-2">
                            <div class="title d-flex align-items-center gap-2">
                                <div class="icon"><i class="icon-writing-whiteboard"></i></div>
                                <strong>Total Delivery</strong>
                            </div>
                            <div class="number dashtext-4 fs-4 fw-bold">{{ $delivered }}</div>
                        </div>
                        <div class="progress progress-template" style="height: 6px;">
                            <div class="progress-bar dashbg-4" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Charts Section -->
    <section class="py-4">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="bar-chart block mb-3">
                        <canvas id="barChartExample1"></canvas>
                    </div>
                    <div class="bar-chart block">
                        <canvas id="barChartExample2"></canvas>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="line-cahrt block h-100">
                        <canvas id="lineCahrt"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scans and Request Metrics -->
    <section class="pb-4">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="stats-2-block block d-flex justify-content-between mb-3">
                        <div class="stats-2 d-flex align-items-center gap-3">
                            <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                            <div class="stats-2-content">
                                <strong class="d-block fs-5">5,657</strong>
                                <span class="text-muted d-block small">Standard Scans</span>
                                <div class="progress progress-template progress-small mt-2" style="height: 4px;">
                                    <div class="progress-bar dashbg-2" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stats-2 d-flex align-items-center gap-3">
                            <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                            <div class="stats-2-content">
                                <strong class="d-block fs-5">3,1459</strong>
                                <span class="text-muted d-block small">Team Scans</span>
                                <div class="progress progress-template progress-small mt-2" style="height: 4px;">
                                    <div class="progress-bar dashbg-3" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="stats-3-block block d-flex align-items-center justify-content-between">
                        <div class="stats-3">
                            <strong class="d-block fs-5">745</strong>
                            <span class="text-muted d-block small">Total requests</span>
                            <div class="progress progress-template progress-small mt-2" style="height: 4px;">
                                <div class="progress-bar dashbg-1" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="stats-3 d-flex gap-4 text-center">
                            <div class="item">
                                <strong class="d-block fs-6">4,124</strong>
                                <span class="text-muted small d-block">Threats</span>
                                <small class="text-success">+246</small>
                            </div>
                            <div class="item">
                                <strong class="d-block fs-6">2,147</strong>
                                <span class="text-muted small d-block">Neutral</span>
                                <small class="text-success">+416</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="drills-chart block h-100">
                        <canvas id="lineChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Contributors Grid -->
    <section class="pb-4">
        <div class="container-fluid">
            <div class="row g-3 mb-3">
                @php
                    $contributors = [
                        ['order' => '1st', 'bg' => 'dashbg-2', 'img' => 'img/avatar-1.jpg', 'name' => 'Richard Nevoreski', 'username' => '@richardnevo', 'count' => '950', 'v1' => 150, 'v2' => 340, 'v3' => 460],
                        ['order' => '2nd', 'bg' => 'dashbg-1', 'img' => 'img/avatar-4.jpg', 'name' => 'Samuel Watson', 'username' => '@samwatson', 'count' => '772', 'v1' => 80, 'v2' => 420, 'v3' => 272],
                        ['order' => '3rd', 'bg' => 'dashbg-4', 'img' => 'img/avatar-6.jpg', 'name' => 'Sebastian Wood', 'username' => '@sebastian', 'count' => '620', 'v1' => 150, 'v2' => 280, 'v3' => 190],
                    ];
                @endphp

                @foreach($contributors as $userCard)
                <div class="col-lg-4">
                    <div class="user-block block text-center p-3">
                        <div class="avatar position-relative mb-2">
                            <img src="{{ asset($userCard['img']) }}" alt="{{ $userCard['name'] }}" class="img-fluid rounded-circle" style="width: 80px; height: 80px; object-fit: cover;">
                            <div class="order {{ $userCard['bg'] }} position-absolute bottom-0 start-50 translate-middle-x badge px-2 py-1">{{ $userCard['order'] }}</div>
                        </div>
                        <a href="#" class="user-title text-decoration-none">
                            <h3 class="h6 mb-0">{{ $userCard['name'] }}</h3>
                            <span class="text-muted small">{{ $userCard['username'] }}</span>
                        </a>
                        <div class="contributions my-2 fw-semibold text-primary">{{ $userCard['count'] }} Contributions</div>
                        <div class="details d-flex justify-content-around mt-3 border-top pt-2">
                            <div class="item"><i class="icon-info me-1"></i><strong>{{ $userCard['v1'] }}</strong></div>
                            <div class="item"><i class="fa fa-gg me-1"></i><strong>{{ $userCard['v2'] }}</strong></div>
                            <div class="item"><i class="icon-flow-branch me-1"></i><strong>{{ $userCard['v3'] }}</strong></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Public User List -->
            @php
                $publicUsers = [
                    ['order' => '4th', 'img' => 'img/avatar-1.jpg', 'name' => 'Tomas Hecktor', 'username' => '@tomhecktor', 'count' => '410', 'v1' => 110, 'v2' => 200, 'v3' => 100],
                    ['order' => '5th', 'img' => 'img/avatar-2.jpg', 'name' => 'Alexander Shelby', 'username' => '@alexshelby', 'count' => '320', 'v1' => 150, 'v2' => 120, 'v3' => 50],
                    ['order' => '6th', 'img' => 'img/avatar-6.jpg', 'name' => 'Arther Kooper', 'username' => '@artherkooper', 'count' => '170', 'v1' => 60, 'v2' => 70, 'v3' => 40],
                ];
            @endphp

            @foreach($publicUsers as $pUser)
            <div class="public-user-block block mb-2 p-3">
                <div class="row align-items-center">
                    <div class="col-lg-4 d-flex align-items-center gap-3">
                        <span class="badge bg-secondary">{{ $pUser['order'] }}</span>
                        <div class="avatar">
                            <img src="{{ asset($pUser['img']) }}" alt="{{ $pUser['name'] }}" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        </div>
                        <a href="#" class="name text-decoration-none">
                            <strong class="d-block text-dark">{{ $pUser['name'] }}</strong>
                            <span class="text-muted small">{{ $pUser['username'] }}</span>
                        </a>
                    </div>
                    <div class="col-lg-4 text-center my-2 my-lg-0">
                        <span class="fw-semibold">{{ $pUser['count'] }} Contributions</span>
                    </div>
                    <div class="col-lg-4">
                        <div class="details d-flex justify-content-end gap-4">
                            <div class="item"><i class="icon-info me-1"></i><strong>{{ $pUser['v1'] }}</strong></div>
                            <div class="item"><i class="fa fa-gg me-1"></i><strong>{{ $pUser['v2'] }}</strong></div>
                            <div class="item"><i class="icon-flow-branch me-1"></i><strong>{{ $pUser['v3'] }}</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Sales Stats Section -->
    <section class="pb-4">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="stats-with-chart-1 block h-100">
                        <div class="title mb-3">
                            <strong class="d-block">Sales Difference</strong>
                            <span class="text-muted small">Monthly Analysis</span>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-5">
                                <strong class="d-block dashtext-3 fs-4">$740</strong>
                                <span class="text-muted small d-block">May 2017</span>
                                <small class="text-success">320 Sales</small>
                            </div>
                            <div class="col-7">
                                <div class="bar-chart chart">
                                    <canvas id="salesBarChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="stats-with-chart-1 block h-100">
                        <div class="title mb-3">
                            <strong class="d-block">Visit Statistics</strong>
                            <span class="text-muted small">User Traffic</span>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-4">
                                <strong class="d-block dashtext-1 fs-4">$457</strong>
                                <span class="text-muted small d-block">May 2017</span>
                                <small class="text-success">210 Sales</small>
                            </div>
                            <div class="col-8">
                                <div class="bar-chart chart">
                                    <canvas id="visitPieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="stats-with-chart-1 block h-100">
                        <div class="title mb-3">
                            <strong class="d-block">Sales Activities</strong>
                            <span class="text-muted small">Performance</span>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-5">
                                <strong class="d-block dashtext-2 fs-4">80%</strong>
                                <span class="text-muted small d-block">May 2017</span>
                                <small class="text-success">+35 Sales</small>
                            </div>
                            <div class="col-7">
                                <div class="bar-chart chart">
                                    <canvas id="salesBarChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checklist and Messages -->
    <section class="pb-4">
        <div class="container-fluid">
            <div class="row g-3">
                <!-- Checklist -->
                <div class="col-lg-6">
                    <div class="checklist-block block h-100">
                        <div class="title border-bottom pb-2 mb-3">
                            <strong>To Do List</strong>
                        </div>
                        <div class="checklist d-flex flex-column gap-2">
                            @for($i = 1; $i <= 6; $i++)
                            <div class="item d-flex align-items-center gap-2">
                                <input type="checkbox" id="input-{{ $i }}" name="input-{{ $i }}" class="checkbox-template" {{ $i == 2 ? 'checked' : '' }}>
                                <label for="input-{{ $i }}" class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Messages -->
                <div class="col-lg-6">
                    <div class="messages-block block h-100">
                        <div class="title border-bottom pb-2 mb-3">
                            <strong>New Messages</strong>
                        </div>
                        @php
                            $messages = [
                                ['name' => 'Nadia Halsey', 'img' => 'img/avatar-3.jpg', 'status' => 'online', 'time' => '9:30am'],
                                ['name' => 'Peter Ramsy', 'img' => 'img/avatar-2.jpg', 'status' => 'away', 'time' => '7:40am'],
                                ['name' => 'Sam Kaheil', 'img' => 'img/avatar-1.jpg', 'status' => 'busy', 'time' => '6:55am'],
                                ['name' => 'Sara Wood', 'img' => 'img/avatar-5.jpg', 'status' => 'offline', 'time' => '10:30pm'],
                                ['name' => 'Nader Magdy', 'img' => 'img/avatar-1.jpg', 'status' => 'online', 'time' => '9:47pm'],
                            ];
                        @endphp
                        <div class="messages d-flex flex-column gap-3">
                            @foreach($messages as $msg)
                            <a href="#" class="message d-flex align-items-center gap-3 text-decoration-none">
                                <div class="profile position-relative">
                                    <img src="{{ asset($msg['img']) }}" alt="{{ $msg['name'] }}" class="img-fluid rounded-circle" style="width: 40px; height: 40px;">
                                    <div class="status {{ $msg['status'] }}"></div>
                                </div>
                                <div class="content flex-grow-1">
                                    <strong class="d-block text-dark small">{{ $msg['name'] }}</strong>
                                    <span class="d-block text-muted small">Lorem ipsum dolor sit amet</span>
                                </div>
                                <small class="date text-muted">{{ $msg['time'] }}</small>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>