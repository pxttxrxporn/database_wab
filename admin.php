<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/employee1.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <style>
        .header {
            background-color: #333;
            text-align: center;
            font-size: 35px;
            color: #fff;
            padding: 20px;
        }
        .container {
            margin-top: 20px;
        }
        .nav-con {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-login-btn, .nav-signup-btn {
            color: white;
            margin: 0 10px;
        }
        .dashboard-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="container">
              <div class="nav-con">
                <div class="logo">
                  <a href="index01.php">ITI ADMIN</a>
                </div>
                <nav>
                <ul>
                    <li><a href="index01.php">Home</a></li>
                    <li><a href="concerts.php">Concerts</a></li>
                    <li><a href="souvenirs.php">Souvenir</a></li>
                    <li><a href="promotions.php">Promotion</a></li>
                    <input type="text" class="nav-search-box" /><a href="">🔍</a>
                </ul>
                </nav>
                <div class="auth-box">
                <a href="login.php" class="nav-login-btn">Login</a>
                <a href="register.php" class="nav-signup-btn">Signup</a>
                </div>
              </div>
            </div>
        </nav>
    </header>
    <div class="header">
        <h1>Welcome to the Employee Dashboard</h1>
    </div>
    <div class="container">
    <div class="row">
         <div class="col-md-4">
            <div class="dashboard-card">
                    <h3>Add New User</h3>
                    <p>Check details / apply for membership</p>
                    <a href="Add_NewUser.php" class="btn btn-primary">Add New User</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card">
                    <h3>Employee information</h3>
                    <p>Add / edit employee information</p>
                    <a href="user_management.php" class="btn btn-primary">Employee</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card">
                    <h3>Membership information</h3>
                    <p>Add / edit membership information</p>
                    <a href="user_management.php" class="btn btn-primary">Member</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card">
                    <h3>Souvenir</h3>
                    <p>Add and edit order details</p>
                    <a href="user_management.php" class="btn btn-primary">Go to order</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card">
                    <h3>Promotion</h3>
                    <p>Benefits and promotions</p>
                    <a href="user_management.php" class="btn btn-primary">Promotion</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-card">
                    <h3>User Management</h3>
                    <p>Manage user accounts and permissions</p>
                    <a href="user_management.php" class="btn btn-primary">Manage Users</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="dashboard-card">
                    <h3>Salary</h3>
                    <p>Check your salary details</p>
                    <a href="view_salary.php" class="btn btn-primary">View Salary</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="dashboard-card">
                    <h3>Customer List</h3>
                    <p>View the list of customers you have sold tickets to</p>
                    <a href="customer_list.php" class="btn btn-primary">View Customers</a>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
