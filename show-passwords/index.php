<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/reset.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link rel="stylesheet" href="./../assets/css/template-style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Halant:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
</head>

<body>
  <aside>
    <div class="search-part">
      <section>
        <span>
          <button class="profile-btn">
            <img class="profile-img" src="./../assets/imgs/blank-profile-picture-973460_960_720.webp" alt="" />
          </button>
          <div class="profile-menu-drp active-profile-menu">
            <h2 class="profile-name">Zakaria-El assri</h2>
            <ul>
              <li><i data-feather="user"></i><a href="">My profile</a></li>
              <li><i data-feather="settings"></i><a href="">Settings</a></li>
              <li><i data-feather="inbox"></i><a href="">Inbox</a></li>
              <li><i data-feather="help-circle"></i><a href="">Help</a></li>
              <li><i data-feather="log-out"></i><a href="">Logout</a></li>
            </ul>
          </div>
        </span>
        <div class="info-setting">
          <i class="feather-32" data-feather="message-square"></i>
          <i class="feather-32" data-feather="settings"></i>
        </div>
      </section>
      <input type="text" placeholder="search" />
    </div>
    <div class="category-part">
      <div class="top-side-drp">
        <div class="catego-drp">
          <p class="title-liste-drp" onclick="categoToggle()">Categories</p>
          <ul class="liste-catego-drp">
            <li><a href="">All Items</a></li>
            <li><a href="">Passwords</a></li>
            <li><a href="">Secure Notes</a></li>
            <li><a href="">Credit Cards</a></li>
            <li><a href="">Personale Info</a></li>
            <li><a href="">Trash</a></li>
          </ul>
        </div>
        <div class="folder-drp">
          <p class="title-liste-folder-drp" onclick="folderToggle()">
            Folders
          </p>
          <ul class="liste-folder-drp">
            <li><a href="">All Items</a></li>
            <li><a href="">Passwords</a></li>
          </ul>
        </div>
      </div>
    </div>
  </aside>
  <main class="main-content">
    <div class="toggle">
      <span class="open-toggle">
        <i data-feather="align-justify"></i>
      </span>
      <span class="close-toggle active-toggle">
        <i data-feather="x"></i>
      </span>
    </div>
    <div class="container">
      <div class="header-content">
        <h2>Passwords</h2>
        <button><a href="./../create-password/">Add Item</a></button>
      </div>
      <div class="passwords">
        <div class="passwords-header">
          <span class="s1"><input type="checkbox" name="" id="" /></span>
          <div class="d1">
            <span class="title-e">
              <p>Title</p>
            </span>
            <span class="last-edited-e">
              <p>Last Edited</p>
            </span>
          </div>
        </div>
        <div class="passwords-list">
          <ul>
            <li class="passwords-item">
              <a class="a-card" href="./../show-details/">
                <div class="checkbox-part">
                  <input type="checkbox" name="" id="checkbox-item" />
                </div>
                <div class="other-side">
                  <div class="img-user-email">
                    <img class="e-img" src="./../assets/imgs/twitter-icon.png" alt="" />
                    <div class="title-c">
                      <h3>Twitter.com</h3>
                      <p>simozakaria71@gmail.com</p>
                    </div>
                  </div>
                  <div class="last-edited-c">20 minute ago</div>
                </div>
              </a>
            </li>
            <li class="passwords-item">
              <a class="a-card" href="./../show-details/">
                <div class="checkbox-part">
                  <input type="checkbox" name="" id="checkbox-item" />
                </div>
                <div class="other-side">
                  <div class="img-user-email">
                    <img class="e-img" src="./../assets/imgs/twitter-icon.png" alt="" />
                    <div class="title-c">
                      <h3>Twitter.com</h3>
                      <p>simozakaria71@gmail.com</p>
                    </div>
                  </div>
                  <div class="last-edited-c">20 minute ago</div>
                </div>
              </a>
            </li>
            <li class="passwords-item">
              <a class="a-card" href="./../show-details/">
                <div class="checkbox-part">
                  <input type="checkbox" name="" id="checkbox-item" />
                </div>
                <div class="other-side">
                  <div class="img-user-email">
                    <img class="e-img" src="./../assets/imgs/twitter-icon.png" alt="" />
                    <div class="title-c">
                      <h3>Twitter.com</h3>
                      <p>simozakaria71@gmail.com</p>
                    </div>
                  </div>
                  <div class="last-edited-c">20 minute ago</div>
                </div>
              </a>
            </li>
            <li class="passwords-item">
              <a class="a-card" href="./../show-details/">
                <div class="checkbox-part">
                  <input type="checkbox" name="" id="checkbox-item" />
                </div>
                <div class="other-side">
                  <div class="img-user-email">
                    <img class="e-img" src="./../assets/imgs/twitter-icon.png" alt="" />
                    <div class="title-c">
                      <h3>Twitter.com</h3>
                      <p>simozakaria71@gmail.com</p>
                    </div>
                  </div>
                  <div class="last-edited-c">20 minute ago</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
  <script src="../assets/js/template-scrpt.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>