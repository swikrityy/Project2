<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Abstract Form Table</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 40px;
    }

    .container {
      background: white;
      padding: 25px;
      border-radius: 10px;
      max-width: 900px;
      margin: auto;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h1 {
      margin-bottom: 5px;
    }

    p {
      color: gray;
      margin-bottom: 25px;
    }

    /* Form */
    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .create-btn {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 18px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      margin-bottom: 25px;
    }

    /* Table */
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
      margin-right: 5px;
    }
  </style>
</head>

<body>

  <div class="container">
  <form action="{{ route('store') }}" method="post">
    <!-- Heading -->
    <h1>Container Table</h1>
    <p>Manage title, subtitle, and contact button text.</p>

    <!-- Input Form -->
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" placeholder="Enter title" name="title-2">
    </div>

    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input type="text" id="subtitle" placeholder="Enter subtitle" name="subtitle">
    </div>

    <div class="form-group">
      <label for="contact">Contact Button Text</label>
      <input type="text" id="contact" placeholder="Enter contact button text" name="contact">
    </div>

    <button class="create-btn" type="submit">Create</button>
</form>
    <!-- Table -->
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Subtitle</th>
          <th>Contact Button</th>
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