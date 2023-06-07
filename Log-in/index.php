<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log-in | Zakipass</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Halant:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <form action="">
        <div class="logo-part">
          <h2><span>Zaki</span> pass</h2>
        </div>
        <div class="create-pass">
          <h3>Log in account</h3>
        </div>
        <div class="email">
          <label for="email-input">Email</label>
          <input type="email" id="email-input" />
        </div>
        <div class="password">
          <label class="password-lbl" for="password-input">Password</label>
          <input type="password" id="password-input" />
        </div>
        <button type="submit">Log in</button>
      </form>
      <div class="have-acc">
        <p>you don't have an account ?</p>
        <a href="./../sign-in/">Sign in here</a>
      </div>
    </div>
  </body>
</html>
