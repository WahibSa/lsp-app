<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            /* max-width: 1200px; */
            margin: 0 auto;
            padding: 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 8px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-item {
            cursor: pointer;
            color: #333;
        }

        .nav-item:hover {
            text-decoration: underline;
        }

        .profile-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .account-information {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            /* margin-top: 20px; */
        }

        .account-information h3 {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar container">
            <img src="https://img.freepik.com/free-vector/gradient-printing-house-logo-template_23-2149763504.jpg"
                class="logo" alt="">
            <ul class="nav-links">
                <li class="nav-item">Home</li>
                <li class="nav-item">Jadwal Asesmen</li>
                <li class="nav-item">Laporan</li>
                <li class="nav-item">Profile</li>
            </ul>
            <div class="profile-section">
                <img src="https://www.w3schools.com/howto/img_avatar.png" class="profile-pic" alt="Profile Picture">
                <span>John Doe</span>
            </div>
        </nav>
    </header>
    <section class="container" id="jumbotron">
        <h1>Welcome to the Asesor Dashboard</h1>
        <div class="account-information">
            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="profile-pic">
            <div>
                <h3>John Doe</h3>
                <p>240401010066</p>
                <p>Pemrograman</p>
            </div>
        </div>
    </section>
</body>

</html>
