<?php
include('registration.php');
?>
<!DOCTYPE html>
<!-- Coding By CodingLab | www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./tailwindstyle.css" />
  </head>
  <body>
      <section class="flex container justify-center">
        <div>
            <img src="images/cipherport.jpeg" width="500px" class="mx-auto">
            <h2 class="font-bold text-4xl text-center bg-slate-200 my-4 rounded-lg">Welcome To Cipherport Creative Centre</h2>
        <header class="my-10 text-center text-4xl bg-slate-300 rounded-lg">Registration Form</header>
      <form action="index.php" method="POST">
        <div class="py-5">
          <label class="">Full Name</label>
          <input type="text" name="name"class="border-2" placeholder="Enter full name" required />
        </div>

        <div class="py-5">
          <label>Email Address</label>
          <input type="text" name="email"class="border-2" placeholder="Enter email address" required />
        </div>

        <div class="py-5">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" name="number"class="border-2" placeholder="Enter phone number" required />
          </div>
        </div>
        <button class="py-5 border-2 rounded-lg bg-slate-400" name="register">Register</button>
      </form>
    </div>
</section>
  </body>
</html>