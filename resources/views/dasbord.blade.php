<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dash UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #1e293b;
            color: white;
            position: fixed;
            width: 250px;
        }
        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .sidebar a:hover {
            background-color: #334155;
            color: white;
        }
        .main {
            margin-left: 250px;
            padding: 30px;
        }
        .card-summary {
            border: none;
            border-radius: 10px;
        }
        .progress {
            height: 6px;
        }
        .rounded-profile {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
        <h4 class="mb-4">Dash UI</h4>
        <a href="#">Dashboard</a>
        <hr>
        <small class="px-3 text-muted">LAYOUTS & PAGES</small>
        <a href="#">Pages</a>
        <a href="#">Authentication</a>
        <a href="#">Layouts</a>
        <hr>
        <small class="px-3 text-muted">UI COMPONENTS</small>
        <a href="#">Components</a>
        <a href="#">Menu Level</a>
        <hr>
        <small class="px-3 text-muted">DOCUMENTATION</small>
        <a href="#">Getting Started</a>
        <a href="#">Download</a>
    </div>

    <!-- Main Content -->
    <div class="main">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center bg-primary text-white px-4 py-3 rounded">
            <h4 class="mb-0">Projects</h4>
            <button class="btn btn-light text-primary">Create New Project</button>
        </div>

        <!-- Statistic Cards -->
        <div class="row mt-4 text-center">
            <div class="col-md-3 mb-3">
                <div class="card card-summary shadow-sm">
                    <div class="card-body">
                        <h6>Projects</h6>
                        <h3>18</h3>
                        <small>2 Completed</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-summary shadow-sm">
                    <div class="card-body">
                        <h6>Active Task</h6>
                        <h3>132</h3>
                        <small>28 Completed</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-summary shadow-sm">
                    <div class="card-body">
                        <h6>Teams</h6>
                        <h3>12</h3>
                        <small>1 Completed</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-summary shadow-sm">
                    <div class="card-body">
                        <h6>Productivity</h6>
                        <h3>76%</h3>
                        <small>5% Completed</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <h5 class="mt-4">Active Projects</h5>
        <div class="table-responsive shadow-sm bg-white rounded p-3">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Project Name</th>
                        <th>Hours</th>
                        <th>Priority</th>
                        <th>Members</th>
                        <th>Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dropbox Design System</td>
                        <td>34</td>
                        <td><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>
                            <img src="https://via.placeholder.com/30" class="rounded-profile me-1">
                            <img src="https://via.placeholder.com/30" class="rounded-profile me-1">
                        </td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 15%"></div>
                            </div>
                            <small>15%</small>
                        </td>
                    </tr>
                    <tr>
                        <td>Slack Team UI Design</td>
                        <td>47</td>
                        <td><span class="badge bg-danger">High</span></td>
                        <td>
                            <img src="https://via.placeholder.com/30" class="rounded-profile me-1">
                            <img src="https://via.placeholder.com/30" class="rounded-profile me-1">
                            <img src="https://via.placeholder.com/30" class="rounded-profile me-1">
                        </td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 35%"></div>
                            </div>
                            <small>35%</small>
                        </td>
                    </tr>
                    <!-- Tambahkan lebih banyak baris jika perlu -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
