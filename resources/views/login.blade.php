<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
  <title>Login Page</title>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
