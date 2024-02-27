<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMIGO</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3b5998;
            padding: 15px;
            color: #fff;
            text-align: center;
        }

        main {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .post-container {
            width: 60%;
        }

        .sidebar {
            width: 30%;
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .post {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .post img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-info p {
            font-weight: bold;
        }

        .caption {
            margin-top: 8px;
        }
        button {
            background-color: #04AA6D; /* Green */
            border: none;
            border-radius: 10%;
            color: white;
            padding: 13px 26px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 1120px;
}
    </style>
</head>
<body>
    <header>
        <h1>EMIGO</h1>
        <a  href="index.html"><button >sign out</button></a>
    </header>

    <main>
        <div class="post-container">
            <!-- Display fake posts with fake images -->
            <div class="post">
                <div class="user-info">
                    <img src="form.jpg" alt="User Avatar">
                    <p>FakeUser123</p>
                </div>
                <img src="form.jpg" alt="Fake Post Image">
                <div class="caption">Just another day in paradise. #FakeNature</div>
            </div>

            <div class="post">
                <div class="user-info">
                    <img src="samaltman.jpg" alt="User Avatar">
                    <p>AwesomeCoder</p>
                </div>
                <img src="samaltman.jpg" alt="Fake Post Image">
                <div class="caption">Coding session with a view. #CodeLife</div>
            </div>
        </div>

        <div class="sidebar">
            <!-- Display user information, trending topics, or additional content here -->
            <h2>User Info</h2>
            <p>Username: FakeUser123</p>
            <p>Email: fake.user@example.com</p>

            <h2>Trending Topics</h2>
            <ul>
                <li>#FakeNews</li>
                <li>#ExploreFakeWorld</li>
                <li>#Faketastic</li>
            
            </ul>
        </div>
    </main>
</body>
</html>
