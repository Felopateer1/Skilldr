<!DOCTYPE html>
<html>
<head>
<link
      rel="shortcut icon"
      href="../imgs/skilldr-high-resolution-logo-black-transparent.png"
      type="image/x-icon"
    />
    <title>Web Development Video - Skilldr</title>


    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body{
        color: white;
        font-family: system-ui;

        background-color: #001220;
    }
    .desc{
        background-color: 
        black;
        width: 60%;
        border-radius: 10px;
        padding: 8px;
             font-weight: 700;

background: #0f0f0f;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

    }
    
header{
    display: flex;
    justify-content: space-between;
    padding: 10px 20px;
    width: 100%;
    align-items: center;
}
input{
    border: 2px white solid;
  background-color: black;
  color: white;
  padding: 10px;
  border-radius: 10px;
  outline: none;
  width: 100%;

}
.logo{
    text-decoration: none;
    color: white;
    font-size: 1.8em;
    font-weight: 900;
}
nav a{
    text-decoration: none;
    color: white;
}
*{
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
    .desc{
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
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.buttons {
            margin-top: 20px;
            
        }

        .buttons button {
            margin-right: 20px;
            background-color: transparent;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 1.1em;
        }

        .buttons button i {
            margin-right: 5px;
        }

        .buttons button:focus {
            outline: none;
        }

        

        .like-button i.fa-thumbs-up {
            color: blue;
        }

        .dislike-button i.fa-thumbs-down {
            color: red;
        }

        .save-button i.fa-eye {
            color: green;
        }
        .no_ex{
            justify-content: center;
            text-align: center;
}

nav a{
    margin: 6px;
}
nav a svg:hover{
    text-decoration: underline;
    fill: #de5b00;
}
iframe{
    border-radius: 10px;
}
@media screen and (max-width: 1023px) {
   .chrme{
    display: none;
   }
}
header{
box-shadow:  5px 5px 10px #000000,
             -5px -5px 10px #000000;
}

.comment-section-wrapper {
    display: flex;
    justify-content: center;
}

.comment-section {
    background-color: #0f0f0f;
    border-radius: 10px;
    padding: 15px;
    margin-top: 20px;
    width: 60%;
    margin: 0 auto;
}
.comment-section h3 {
    font-weight: bold;
    margin-bottom: 10px;
}
.comment-section form {
    margin-bottom: 20px;
}
.comment-section input, .comment-section textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #1a1a1a;
    color: white;
}
.comment-section button {
    background-color: #de5b00;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.comment {
    background-color: #1a1a1a;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}
.comment p {
    margin: 5px 0;
}
@media screen and (max-width: 1023px) {
    .comment-section {
    width: 90%;
}}
@media screen and (max-width: 1023px) {
    .formobilelabel{
        font-size:20.2px;
    }
}
</style>

</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<br><br><br>
  
        <br><br>
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
         <a href="video.code.web-dev.php" style="color: #de5b00;font-size: 1.5em;">
         <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M5 9h11a4 4 0 1 1 0 8h-1"></path>
  <path d="M9 13 5 9l4-4"></path>
</svg>
         </a>
      </div>
    </header>
    <br>
    <div class="container">
        <?php
        // Check if the video ID is provided in the query parameter
        if (isset($_GET['id'])) {
            $videoId = $_GET['id'];
            $videos = [
                [
                    'id' => 1,
                    'title' => '[Arabic] Learn HTML in 2022 In One Video',
                    'description' => 'Learn HTML in 2022 In One Video. The Course In 37 Separated Videos <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE',
                    'likeNo' => '+ 15k',
                    'dislikeNo' => '+ 500',
                    'saveNo' => '+ 400k',
                ],
                [
                    'id' => 2,
                    'title' => '[Arabic] Learn CSS in 2022 In One Video',
                    'description' => 'Learn CSS in 2022 In One Video. The Course In 88 Separated Videos <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qyVkLebgfzY?si=bZpnaoGjOFjHqh6O',
                    'likeNo' => '+ 7k',
                    'dislikeNo' => '+ 400',
                    'saveNo' => '+ 300k',
                ],
                [
                    'id' => 3,
                    'title' => '[Arabic] Learn JavaScript In One Video - Part One',
                    'description' => 'Learn JavaScript In One Video - Part One . Lessons From 001 To 101 The Course In 188 Separated Videos <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'gIGGhFlGgLI?si=WZ7v-57M9a3RKvtK',
                    'likeNo' => '+ 5k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 200k',
                ],
                [
                    'id' => 4,
                    'title' => '[Arabic] Learn JavaScript In One Video - Part Two',
                    'description' => 'Learn JavaScript In One Video - Part Two . Lessons From 102 To 188 The Course In 188 Separated Videos <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'FKrfis1W1tk?si=wffpm6lkKYF8LNKu',
                    'likeNo' => '+ 1.4k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 65k',
                ],
                [
                    'id' => 5,
                    'title' => '[Arabic] Learn Bootstrap In 12 Videos',
                    'description' => 'A Complete Bootstrap Course in 2022 . <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> About: <a href="#" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'videoseries?si=jr_L00-B67GNYRq-&amp;list=PLDoPjvoNmBAyvm7f--dc6XqkpfDcen_vQ',
                    'likeNo' => '+ 20k',
                    'dislikeNo' => '+ 134',
                    'saveNo' => '+ 443k',
                ],
                [
                    'id' => 999,
                    'title' => '[Arabic] Learn React-JS In 30 Videos',
                    'description' => 'A Complete React-JS Course in 2022 . <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Unique Coderz Academy</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2022</a><br> About: <a href="#" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'videoseries?si=uoLF7ZiC8TaV-5cx&amp;list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW',
                    'likeNo' => '+ 50k',
                    'dislikeNo' => '+ 134',
                    'saveNo' => '+ 1.2M',
                ],
                [
                    'id' => 6,
                    'title' => '[Arabic] Learn PHP In 105 Videos',
                    'description' => 'A Complete PHP Course in 2022 . <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-end</a>',
                    'youtubeId' => 'videoseries?si=PgA3KHaYp3EjTywe&amp;list=PLDoPjvoNmBAy41u35AqJUrI-H83DObUDq',
                    'likeNo' => '+ 6k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 275k',
                ],
                [
                    'id' => 7,
                    'title' => '[Arabic] Learn MYSQL In 51 Videos',
                    'description' => 'A Complete MYSQL Course in 2020 . <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2020</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-end</a>',
                    'youtubeId' => 'videoseries?si=pTpW9ajAf691nCdo&amp;list=PLDoPjvoNmBAz6DT8SzQ1CODJTH-NIA7R9',
                    'likeNo' => '+ 120k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 1.5M',
                ],
                [
                    'id' => 8,
                    'title' => '[Arabic] Learn Laravel In 21 Videos',
                    'description' => 'A Complete Laravel Course in 2021 . <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2021</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Framework For Back-End</a>',
                    'youtubeId' => 'videoseries?si=SmI4WPH26nADZhdS&amp;list=PLDoPjvoNmBAy_mAhY0x8cHf8oSGPKsEKP',
                    'likeNo' => '+ 142k',
                    'dislikeNo' => '+ 600',
                    'saveNo' => '+ 650k',
                ],
                [
                    'id' => 9,
                    'title' => '[English] Learn HTML & CSS In One Video 2023',
                    'description' => 'A Complete HTML & CSS Course in 2023 . <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'HGTJBPNC-Gw?si=i5gJ5fhCxskoxn0e',
                    'likeNo' => '+ 58k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 1.9M',
                ],
                [
                    'id' => 10,
                    'title' => '[English] Learn JAVASCRIPT In One Video 2024',
                    'description' => 'A Complete JAVASCRIPT Course in 2024 . <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'lfmg-EJ8gm4?si=IIlZEQiXAHipOTx0',
                    'likeNo' => '+ 40k',
                    'dislikeNo' => '+ 150',
                    'saveNo' => '+ 1.1M',
                ],
                [
                    'id' => 11,
                    'title' => '[English] Learn Bootstrap In 20 Videos 2021',
                    'description' => 'A Complete Bootstrap Course in 2021 . <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Net Ninja</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2021</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'videoseries?si=jLu4BOAOlwlEqNfn&amp;list=PL4cUxeGkcC9joIM91nLzd_qaH_AimmdAR',
                    'likeNo' => '+ 80k',
                    'dislikeNo' => '+ 400',
                    'saveNo' => '+ 1.6M',
                ],
                [
                    'id' => 12,
                    'title' => '[English] Learn React-JS In One Video 2024',
                    'description' => 'A Complete React-JS Course in 2024 . <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'CgkZ7MvWUAA?si=4ku4iR4rtnuWrJxr',
                    'likeNo' => '+ 20k',
                    'dislikeNo' => '+ 132',
                    'saveNo' => '+ 780k',
                ],
                [
                    'id' => 13,
                    'title' => '[English] Learn PHP In One Video 2024',
                    'description' => 'A Complete PHP Course in 2024 . <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-End</a>',
                    'youtubeId' => 'zZ6vybT1HQs?si=OldtIeWGeqWIW5-H',
                    'likeNo' => '+ 33k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 1.2M',
                ],
                [
                    'id' => 14,
                    'title' => '[English] Learn MYSQL In One Video 2024',
                    'description' => 'A Complete MYSQL Course in 2024 . <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-End</a>',
                    'youtubeId' => '5OdVJbNCSso?si=mzTzMhKgJdwgKBUd',
                    'likeNo' => '+ 40k',
                    'dislikeNo' => '+ 128',
                    'saveNo' => '+ 1.5M',
                ],
            ];

            $selectedVideo = null;
            foreach ($videos as $video) {
                if ($video['id'] == $videoId) {
                    $selectedVideo = $video;
                    break;
                }
            }

            // If a matching video is found, display the video player
            if ($selectedVideo) {
                $videoTitle = $selectedVideo['title'];
                $videoDescription = $selectedVideo['description'];
                $youtubeId = $selectedVideo['youtubeId'];
                $likeNo = $selectedVideo['likeNo'];
                $dislikeNo = $selectedVideo['dislikeNo'];
                $saveNo = $selectedVideo['saveNo'];
                echo "<div class='video-player'>";
                echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allowfullscreen></iframe>";
                    echo "</div>";
                    echo "<h2 class='formobilelabel'>$videoTitle</h2>";
                
                    echo "<div class='buttons'>";
            echo "<button class='like-button' type='button'><i class='fas fa-thumbs-up'></i>$likeNo</button>";
            echo "<button class='dislike-button' type='button'><i class='fas fa-thumbs-down'></i>$dislikeNo</button>";
            echo "<button class='save-button' type='button'><i class='fas fa-eye'></i>$saveNo</button>";
            echo "</div>";
                    echo "<br>";
                    echo "<br>";
                echo "<div class='desc'>";
                echo "<p>$videoDescription</p>";
                echo "</div>";
                
            // Display the like, dislike, and save buttons
            

           
            } else {
                echo '<center><svg class="no_ex" width="80" height="80" fill="none" stroke="#de5b00" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                echo "<h2 style='justify-content:center;text-align:center;color:white;'>Sorry! ... Nothing To Watch.</h2>";
            }
        } else {
            echo '<center><svg class="no_ex" width="46" height="46" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                
            echo "<h3 style='justify-content:center;text-align:center;'>Invalid video ID.</h3>";
        }
        ?>
    </div>
<br>

<div class="comment-section">
    <h3>Comments</h3>
    <form id="commentForm">
        <input type="text" id="username" placeholder="Your Name" required>
        <textarea id="commentText" placeholder="Your Comment" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <div id="commentsContainer"></div>
</div>

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
document.addEventListener('DOMContentLoaded', function () {
    const commentForm = document.getElementById('commentForm');
    const commentsContainer = document.getElementById('commentsContainer');

    // Function to save comments to local storage
    function saveCommentsToLocalStorage(comments) {
        localStorage.setItem('comments', JSON.stringify(comments));
    }

    // Function to retrieve comments from local storage
    function getCommentsFromLocalStorage() {
        const comments = localStorage.getItem('comments');
        return comments ? JSON.parse(comments) : [];
    }

    // Function to display comments
    function displayComments() {
        commentsContainer.innerHTML = '';
        const comments = getCommentsFromLocalStorage();
        comments.forEach(function(comment) {
            const commentElement = document.createElement('div');
            commentElement.classList.add('comment');
            commentElement.innerHTML = `<p><strong style="color:#de5b00;"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 9a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" clip-rule="evenodd"></path>
  <path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1ZM3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12Zm9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21Z" clip-rule="evenodd"></path>
</svg> <span style="font-size: 20px;">${comment.username} :</span></strong></p><p>${comment.text}</p>`;
            commentsContainer.appendChild(commentElement);
        });
    }

    // Display existing comments on page load
    displayComments();

    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get input values
        const username = document.getElementById('username').value;
        const commentText = document.getElementById('commentText').value;

        // Create new comment object
        const newComment = {
            username: username,
            text: commentText
        };

        // Get existing comments from local storage
        const comments = getCommentsFromLocalStorage();

        // Add new comment to the array of comments
        comments.push(newComment);

        // Save updated comments to local storage
        saveCommentsToLocalStorage(comments);

        // Display comments again (including the new one)
        displayComments();

        // Clear the form
        commentForm.reset();
    });
});


    </script>

<br><br><br><br>
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
</body>
</html>