<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Title Subtitle Button Table</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 40px;
    }

    .container {
      background: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 700px;
      margin: auto;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h1 {
      margin-bottom: 5px;
    }

    p {
      color: gray;
      margin-bottom: 20px;
    }

    

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background: #f0f0f0;
    }

    .delete-btn {
      background: #b92323;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
    }
    .edit-btn {
      background: #18651d;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div class="container">
    <!-- Title -->
    <h1>Container Table</h1>

    <!-- Subtitle -->
    <p>Manage title and subtitle with create and delete actions.</p>

    <!-- Table -->
    <table>
      <thead>
        <tr>
          <th>title-2</th>
          <th>sub-title</th>
          <th>Contact-us</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Welcome to Our Bakery Academy</td>
          <td>Build professional baking skills with hands-on practice and expert support.</td>
          <td>Contact Us</td>
          <td>
            <button class="edit-btn">Edit</button>
            <button class="delete-btn">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>