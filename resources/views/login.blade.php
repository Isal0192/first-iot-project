<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/styleLogin.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="login-container relay-card">
    <div class="login-form">
      <h2>Login</h2>
      <form id="loginForm">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="login-btn">Login</button>
      </form>
    </div>
  </div>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'faisal' && password === '1234') {
      alert('Login berhasil!');
      window.location.href = '/home';
    } else {
      alert('Username atau password salah!');
    }
  });

  </script>
</body>
</html>
