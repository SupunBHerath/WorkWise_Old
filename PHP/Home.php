<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/Home.css">
</head>

<body>
    <!-- ---nav bar--- -->
    <div class="navbar">
        <header>
            <img src="../Image/logo/logo1.png" alt="logo" class="logo">
        </header>
        <ul>
            <li class="homebtn"><a href="#home">Home</a></li>

            <!-- dropdown list (find job) -->
            <li class="dropdown"> <a href="#i" class="dropbtn">Find Job</a>
                <!-- <div class="drop-content">
                    <a href="#"></a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div> -->
            </li>
            <!-- dropdown list (find job) -->
            <!-- dropdown list (find job) -->
            <li class="dropdown"> <a href="javascript:void(0)" class="dropbtn"> Other</a>
                <div class="drop-content">
                    <a href="#i">Post Your Work</a>
                    <a href="#">How to Find Your Work</a>
                    <a href="#">About Us</a>
                </div>
            </li>
            <!-- dropdown list (find job) -->
            <li style="float:right"><a href="../HTML/Signup.html" class="singup" style="color:  #07be16;">Sing Up</a>
            </li>
            <li style="float:right"><a href="../HTML/Login.html" class="login">Login</a></li>

        </ul>

        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    </div>
    <!-- ---nav bar--- -->


    <div class="container">
        <div class="flex-container">
            <div class="flex-text">
                <h1>Welcome to</h1>
                <h1 id="workwise"> <span style="color: black;">Work</span>Wise</h1>
                <h3>The #1 Site for Remote Jobs</h3>
                <button class="signbtn"><a href="../HTML/Signup.html">Sign Up & Find Your Next Remote Job!</a></button>
                <br>

            </div>
            <div class="flex-image">
                
            </div>
        </div>
        <br><br>
        <div id="i" class="imagebar"> 
         
        </div>
    </div>

    <!-- image bar -->

    
    
    <H1 id="squareText">Recomment Job </H1>
    <div class="square-container">
        <div class="square">
            <img src="../Image/FT/GD.png" alt="">
            <h3><a href="#">Graphic Design</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/WD (2).jpg" alt="">
            <h3><a href="#">Web Development</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/SD2.jpg" alt="">
            <h3> <a href="#">Software Development</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/GD.png" alt="">
            <h3><a href="#">Graphic Design</a></h3>
        </div>
        <div class="square">
            <img src="../Image/FT/GD.png" alt="">
            <h3><a href="#">Graphic Design</a></h3>
        </div>
    </div>

    <H1 id="squareText">Job List </H1>

    <!-- /* post your work  */ -->
    <div id="PostWork"></div>
    <div class="PostWork">
        <h1>Post Your Work</h1>
        <p>Welcome to our "Post Your Work" section, a space dedicated to showcasing your creative projects and talents!
            Whether you're an artist, designer, photographer, or a creator in any other field, we invite you to share
            your work with our community.</p>
        <p><strong>How it Works:</strong></p>
        <ol>
            <li><strong>Fill in the Details:</strong> Provide a title, a brief description of your work, and specify the
                category it falls under.</li>
            <li><strong>Upload an Image:</strong> Share a visual representation of your project by uploading an image.
                This could be a snapshot, artwork, design, or any other relevant visual content.</li>
            <li><strong>Submit Your Work:</strong> Hit the submit button, and your work will be shared with our
                community.</li>
        </ol>
        <p><strong>Guidelines:</strong></p>
        <ul>
            <li>Please ensure that your content adheres to our community guidelines.</li>
            <li>Include a descriptive title and relevant category for easy navigation.</li>
            <li>Provide a concise yet informative description of your work.</li>
            <li>Only upload images that you have the right to share.</li>
        </ul>
        <p><strong>Note:</strong> Your submitted work may go through a brief review process before being featured on our
            platform. We appreciate your contribution to our creative community!</p>
        <center>
            <button type="submit"><a href="../HTML/Login.html">Post Your Work</a></button>
            <br><br>
        </center>
    </div>
    <!-- /* post your work  */ -->
    <br><br><br>
    <!-- footer -->
    <footer>
        <br>
        <hr style="height:3px;border-width:0;background-color:rgb(255, 255, 255)">
        <br>
        <p style="color: green; font-weight: bolder;">&copy; 2023 Your Workwise Website. All rights reserved.</p>
        <br>
        <hr style="height:3px;border-width:0;background-color:rgb(255, 255, 255)">
        <br>
    </footer>
</body>

</html>