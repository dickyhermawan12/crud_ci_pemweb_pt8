<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Customer</title>
</head>
<body>
  <form action="/customer/save" method="post">
    <p>First Name: <input type="text" name="customer_firstname"></p>
    <p>Last Name: <input type="text" name="customer_lastname"></p>
    <button type="submit">Save</button>
  </form>
</body>
</html>