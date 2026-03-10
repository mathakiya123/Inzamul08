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
      font-size: 120px;
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
      height: 56px;
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

    <!-- Illustration Section -->
    <div class="illustration">
      <img src="{{asset('task/user/img/user.png')}}">
    </div>

    <!-- Text Content -->
    <div class="content text-center">
      <h2>Task Manager APP</h2>
      <p>
        Accomplish your daily tasks and we help you
        keep track of your growth
      </p>

      
      <a href="/contact-us" class="text-dark fs-3"><i class="bi bi-phone"></i>Contact Us</a>
    
    </div>

    <!-- Footer Navigation -->
    <div class="footer mb-3">
      <a href="/" class="back">
        <i class="bi bi-arrow-left"></i> back
      </a>

      <button class="next-btn">
        <a href="/register"><i class="bi bi-arrow-right"></i></a>
      </button>
    </div>

  </div>

</body>
</html>
