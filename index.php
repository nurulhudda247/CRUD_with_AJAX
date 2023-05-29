<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD with AJAX</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h2 class="text-center display-2 text-primary fw-semibold">CRUD with AJAX</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Employee Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <!-- Proccess.php file -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4 shadow p-4 rounded">
                <div class="msg mb-3">
                    <!-- Notification -->
                </div>
                <div class="form-group mb-3">
                    <input type="text" id="emp_name" placeholder="Enter Employee Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="email" id="emp_email" placeholder="Enter Employee Email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="number" id="emp_phone" placeholder="Enter Employee Phone" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <select id="emp_status" class="form-control">
                        <option value="" selected disabled>--- Select Status ---</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" id="add" class="btn btn-outline-primary w-100">Add Employee</button>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>