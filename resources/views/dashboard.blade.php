<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Simple Admin Dashboard</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    display:flex;
    background:#f4f4f4;
}

/* Sidebar */
.sidebar{
    width:220px;
    height:100vh;
    background:#111827;
    color:white;
    padding:20px;
    position:fixed;
}

.sidebar h2{
    text-align:center;
    margin-bottom:30px;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    padding:15px;
    margin:10px 0;
    background:#1f2937;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}

.sidebar ul li:hover{
    background:#374151;
}

/* Main Content */
.main{
    margin-left:220px;
    width:100%;
    padding:20px;
}

.topbar{
    background:white;
    padding:15px 20px;
    border-radius:10px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));
    gap:20px;
    margin-top:25px;
}

.card{
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.card h3{
    margin-bottom:10px;
    color:#555;
}

.card p{
    font-size:28px;
    font-weight:bold;
    color:#111827;
}

/* Table */
.table-section{
    margin-top:30px;
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

table th, table td{
    padding:12px;
    text-align:left;
    border-bottom:1px solid #ddd;
}

table th{
    background:#111827;
    color:white;
}
</style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin</h2>

    <ul>
        <li>Dashboard</li>
        <li>Users</li>
        <li>Orders</li>
        <li>Products</li>
        <li>Settings</li>
    </ul>
</div>

<!-- Main Content -->
<div class="main">

    <!-- Topbar -->
    <div class="topbar">
        <h1>Dashboard</h1>
        <p>Welcome Admin</p>
    </div>

    <!-- Cards -->
    <div class="cards">

        <div class="card">
            <h3>Total Users</h3>
            <p>1,250</p>
        </div>

        <div class="card">
            <h3>Total Orders</h3>
            <p>530</p>
        </div>

        <div class="card">
            <h3>Revenue</h3>
            <p>$12K</p>
        </div>

        <div class="card">
            <h3>Products</h3>
            <p>320</p>
        </div>

    </div>

    <!-- Table -->
    <div class="table-section">
        <h2>Recent Users</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>

            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>Active</td>
            </tr>

            <tr>
                <td>Sarah</td>
                <td>sarah@example.com</td>
                <td>Pending</td>
            </tr>

            <tr>
                <td>Michael</td>
                <td>michael@example.com</td>
                <td>Active</td>
            </tr>

        </table>
    </div>

</div>

</body>
</html>