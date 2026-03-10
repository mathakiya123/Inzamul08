<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daily Tasks</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #FFC43D;
      height: 100vh;
      margin: 0;
      font-family: "Segoe UI", sans-serif;
    }

    .screen {
      max-width: 420px;
      margin: auto;
      height: 100vh;
      display: flex;
      flex-direction: column;
      padding: 24px;
    }

    .illustration {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .illustration i {
      font-size: 16px;
      color: #000;
    }

    .content h2 {
      font-weight: 700;
      margin-bottom: 12px;
    }

    .content p {
      color: #333;
      font-size: 15px;
    }

    .footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: auto;
    }

    .next-btn {
      width: 56px;
      height: auto;
      border-radius: 50%;
      background-color: #fff;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
    }

    .back {
      color: #000;
      text-decoration: none;
      font-weight: 500;
    }
  </style>
</head>

<body>

  <div class="screen">
      @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
      <!-- Text Content -->
    <div class="content text-center">
      <h2>Create your account!</h2>
      <p>
        Accomplish your daily tasks and we help you
        keep track of your growth
      </p>
    </div>

    <!-- Illustration Section -->
    <div class="illustration">

    <form class="w-100" method="post" enctype="multipart/form-data">
    @csrf

    
  <div class="mb-3">
    <label class="form-label">Upload photo</label>
    <div class="input-group">
      <span class="input-group-text">
        <i class="bi bi-person"></i>
      </span>
      <input type="file" name="file" class="form-control p-0" placeholder="Enter your name">
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Full Name</label>
    <div class="input-group">
      <span class="input-group-text">
        <i class="bi bi-person"></i>
      </span>
      <input type="text" name="fullname" class="form-control p-0" placeholder="Enter your name">
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Email Address</label>
    <div class="input-group">
      <span class="input-group-text">
        <i class="bi bi-envelope"></i>
      </span>
      <input type="email" name="email" class="form-control" placeholder="Enter email">
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Phone Number</label>
    <div class="input-group">
      <span class="input-group-text">
        <i class="bi bi-telephone"></i>
      </span>
      <input type="tel" name="phone" class="form-control" placeholder="Enter phone number">
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <div class="input-group">
      <span class="input-group-text">
        <i class="bi bi-lock"></i>
      </span>
      <input type="password" name="password" class="form-control" placeholder="Create password">
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <div class="input-group">
      <span class="input-group-text">
        <i class="bi bi-lock-fill"></i>
      </span>
      <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password">
    </div>
  </div>

  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="terms">
    <label class="form-check-label" for="terms">
      I agree to the <a href="#">Terms & Conditions</a>
    </label>
  </div>

  <button type="submit" class="btn btn-dark w-100 py-2">
    Create Account
  </button>

</form>

    </div>

    <!-- Footer Navigation -->
      <!-- Footer Navigation -->
    <div class="footer mt-4">
      <a href="/" class="back">
        <i class="bi bi-arrow-left"></i> back
      </a>

      <button class="next-btn">
        <a href="/login"><i class="bi bi-arrow-right"></i></a>
      </button>
    </div>
  </div>

</body>
</html>
