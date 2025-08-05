<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Iuran Warga</title>
  <style>
    body {
      background-color: #f0f2f5;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 320px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      border: none;
      color: white;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 1rem;
      display: none;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>Login Iuran Warga</h2>
  <div class="error" id="error">Username atau password salah!</div>
  <form onsubmit="return login()">
    <input type="text" id="username" placeholder="Username" required />
    <input type="password" id="password" placeholder="Password" required />
    <button type="submit">Login</button>
  </form>
</div>

<script>
  // Dummy login check
  function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const errorDiv = document.getElementById("error");

    // Ganti username/password sesuai yang kamu mau
    if (username === "warga" && password === "12345") {
      alert("Login berhasil!");
      // Redirect ke halaman dashboard
      window.location.href = "dashboard.html"; // Buat halaman ini nanti
      return false;
    } else {
      errorDiv.style.display = "block";
      return false;
    }
  }
</script>

</body>
</html>
