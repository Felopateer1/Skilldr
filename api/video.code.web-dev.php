<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../imgs/skilldr-high-resolution-logo-black-transparent.png" type="image/x-icon">

    <title>Web development - Skilldr</title>
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS styles */
        body {
            color: white;
            font-family: system-ui;
            background-color: #292929;
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            width: 100%;
            align-items: center;
        }

        input {
            border: 2px white solid;
            background-color: black;
            color: white;
            padding: 10px;
            border-radius: 10px;
            outline: none;
            width: 100%;
        }
        .video-item{
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      color: white;
      background: #0f0f0f;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

        }
        .video-item h3{
            color: white;
        }
        @media screen and (max-width: 1023px) {
            .video-item h3{
            color: white;
            font-size: 16px;
        }
}
.video-item:hover{
    transform: translateY(-10px);
      background-color:#313535;
}
        .logo {
            text-decoration: none;
            color: white;
            font-size: 1.8em;
            font-weight: 900;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
            margin: 0;
            padding: 0;
        }

        @media screen and (max-width: 1023px) {
            .video-item {
                width: 100%;
            }

            .video-player iframe {
                max-width: 100%;
            }

            .desc {
                width: 100%;
            }
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-width: 1023px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }


        @media screen and (max-width: 1023px) {
   .chrme{
    display: none;
   }
}header{
box-shadow:  5px 5px 10px #000000,
             -5px -5px 10px #000000;
}
    </style>
</head>
<body style="
 background-color: #001220;
">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br><br>
        <a href="../html/code/intro.html">Return</a>
        <a href="../index.html">Home</a>
        <a href="../index.html#about">About Us</a>
        <a href="../index.html#courses">Courses</a>
    </div>
    
<header>
        
        <a href="../index.html" class="logo">Skill<span style="color:#de5b00;">dr.</span></a>
      
            <div class="chrme" >
            <form method="get" action="result.php" style="display: flex; justify-content: center;" class="search_form">
        <input
            title="Search Skilldr"
            type="search"
            name="query"
            style="border-radius: 10px; color: #de5b00; font-weight: 700; width: 700px;"
            placeholder="Search Skilldr Academy ..."
            id="search"
        />
      </form>
            </div>
            <div class="rt" style="color: white;">
              <a href="../html/code/intro.html" style="color: #de5b00;font-size: 1.5em;">
              <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M5 9h11a4 4 0 1 1 0 8h-1"></path>
  <path d="M9 13 5 9l4-4"></path>
</svg>
              </a>
           </div>
        </header>

<br>
    <div class="container">
    <h1 style="text-decoration:underline;">" Web Development "</h1>
    <br>
        <div class="video-container">
            <?php
            $videos = [
                [
                    'id' => 1,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn HTML in 2022 In One Video',
                    'description' => 'Learn HTML in 2022 In One Video. The Course In 37 Separated Videos',
                    'filename' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE'
                ],
                [
                    'id' => 2,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn CSS in 2022 In One Video',
                    'description' => 'Learn CSS in 2022 In One Video. The Course In 88 Separated Videos',
                    'filename' => 'qyVkLebgfzY?si=bZpnaoGjOFjHqh6O'
                ],
                [
                    'id' => 3,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn JavaScript In One Video <span style="color:red;">(1)</span>',
                    'description' => 'Learn JavaScript In One Video - Part One . Lessons From 001 To 101 The Course In 188 Separated Videos',
                    'filename' => 'gIGGhFlGgLI?si=WZ7v-57M9a3RKvtK'
                ],
                [
                    'id' => 4,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn JavaScript In One Video <span style="color:red;">(2)</span>',
                    'description' => 'Learn JavaScript In One Video - Part Two . Lessons From 102 To 188 The Course In 188 Separated Videos',
                    'filename' => 'FKrfis1W1tk?si=wffpm6lkKYF8LNKu'
                ],
                [
                    'id' => 5,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn Bootstrap In 12 Videos',
                    'description' => 'A Complete Bootstrap Course in 2022',
                    'filename' => 'videoseries?si=jr_L00-B67GNYRq-&amp;list=PLDoPjvoNmBAyvm7f--dc6XqkpfDcen_vQ',
                ],
                [
                    'id' => 999,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn React-JS In 30 Videos',
                    'description' => 'A Complete React-JS Course in 2022',
                    'filename' => 'videoseries?si=uoLF7ZiC8TaV-5cx&amp;list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW',
                ],
                [
                    'id' => 6,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn PHP In 105 Videos',
                    'description' => 'A Complete PHP Course in 2022',
                    'filename' => 'videoseries?si=PgA3KHaYp3EjTywe&amp;list=PLDoPjvoNmBAy41u35AqJUrI-H83DObUDq'
                ],
                [
                    'id' => 7,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn MYSQL In 51 Videos',
                    'description' => 'A Complete MYSQL Course in 2020',
                    'filename' => 'videoseries?si=pTpW9ajAf691nCdo&amp;list=PLDoPjvoNmBAz6DT8SzQ1CODJTH-NIA7R9'
                ],
                [
                    'id' => 8,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn Laravel In 21 Videos',
                    'description' => 'A Complete Laravel Course in 2021',
                    'filename' => 'videoseries?si=SmI4WPH26nADZhdS&amp;list=PLDoPjvoNmBAy_mAhY0x8cHf8oSGPKsEKP'
                ],
                [
                    'id' => 9,
                    'title' => '<span style="color:blue;">[English]</span>: Learn HTML & CSS In One Video 2023',
                    'description' => 'A Complete HTML & CSS Course in 2023',
                    'filename' => 'HGTJBPNC-Gw?si=i5gJ5fhCxskoxn0e'
                ],
                [
                    'id' => 10,
                    'title' => '<span style="color:blue;">[English]</span>: Learn JAVASCRIPT In One Video 2024',
                    'description' => 'A Complete JAVASCRIPT Course in 2024',
                    'filename' => 'lfmg-EJ8gm4?si=IIlZEQiXAHipOTx0'
                ],
                [
                    'id' => 11,
                    'title' => '<span style="color:blue;">[English]</span>: Learn Bootstrap In 20 Videos 2021',
                    'description' => 'A Complete Bootstrap Course in 2021',
                    'filename' => 'videoseries?si=jLu4BOAOlwlEqNfn&amp;list=PL4cUxeGkcC9joIM91nLzd_qaH_AimmdAR'
                ],
                [
                    'id' => 12,
                    'title' => '<span style="color:blue;">[English]</span>: Learn React-JS In One Video 2024',
                    'description' => 'A Complete React-JS Course in 2024',
                    'filename' => 'CgkZ7MvWUAA?si=4ku4iR4rtnuWrJxr'
                ],
                [
                    'id' => 13,
                    'title' => '<span style="color:blue;">[English]</span>: Learn PHP In One Video 2024',
                    'description' => 'A Complete PHP Course in 2024',
                    'filename' => 'zZ6vybT1HQs?si=OldtIeWGeqWIW5-H'
                ],
                [
                    'id' => 14,
                    'title' => '<span style="color:blue;">[English]</span>: Learn MYSQL In One Video 2024',
                    'description' => 'A Complete MYSQL Course in 2024',
                    'filename' => '5OdVJbNCSso?si=mzTzMhKgJdwgKBUd'
                ],
            ];

            // Check if a search query is provided
            if (isset($_GET['query'])) {
                $searchQuery = $_GET['query'];

                // Filter the videos based on the search query
                $filteredVideos = array_filter($videos, function ($video) use ($searchQuery) {
                    return stripos($video['title'], $searchQuery) !== false || stripos($video['description'], $searchQuery) !== false;
                });

                // Display the filtered videos
                foreach ($filteredVideos as $video) {
                    $videoId = $video['id'];
                    $videoTitle = $video['title'];
                    $videoDescription = $video['description'];
                    echo "<div class='video-item'>";
                    echo "<a href='play.code.web-dev.php?id=$videoId'>";
                    echo "<div class='video-info'>";
                    echo "<h3>$videoTitle</h3>";
                    echo "<p>$videoDescription</p>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                }
            } else {
                // Display all videos if no search query is provided
                foreach ($videos as $video) {
                    $videoId = $video['id'];
                    $videoTitle = $video['title'];
                    $videoDescription = $video['description'];
                    echo "<div class='video-item'>";
                    echo "<a href='play.code.web-dev.php?id=$videoId'>";
                    echo "<div class='video-info'>";
                    echo "<h3>$videoTitle</h3>";
                    echo "<p>$videoDescription</p>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>

    <br><br>
    <h6 style="font-weight: bold;color: white;text-align: center;">* While using the application, you agree to our <a href="../html/Privacy&Policy.html">Privacy & Policy Terms</a></h6>
    <br>
    <footer style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); padding: 20px; text-align: center;">

<span style="font-weight: 700;color: #de5b00;">© 2023 Skilldr. Made by Astronaut ♡</span>
<br>
--------------------------------------------------
<br><br>
<form method="get" action="result.php" style="display: flex; justify-content: center;" class="search_form">
        <input
            title="Search Skilldr"
            type="search"
            name="query"
            style="border-radius: 10px; color: #de5b00; font-weight: 700; width: 700px;"
            placeholder="Search Skilldr Academy ..."
            id="search"
        />
      </form>
</footer>
    <script>
        function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
  document.getElementById("mySidenav").style.padding = "10px";
  document.getElementById("main").style.marginLeft = "250px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mySidenav").style.padding = "0px";
  document.getElementById("main").style.marginLeft= "0";
}
    </script>
</body>
</html>