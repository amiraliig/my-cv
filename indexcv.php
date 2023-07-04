<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="./stylecv.css">
    <title>Document</title>
</head>
<body>
    
<header>
    <button class="dark-mode"><i class="fa-regular fa-sun"></i></button>
</header>
<div class="main">
    
    <div class="container">
        <div class="left-main">
            <div class="image-container">
                <img src="./download.png" alt="">
            </div>
            <div class="eduction">
                <h1 class="eduction-title">
                    eduction
                </h1>
                <div class="eduction-container">
                    <div class="major">
                        <h2><?= $_POST['certifications'] ?></h2>
                        <p class="major-name"> <?= $_POST['univercity'] ?></p>
                        <p class="major-date"><?= $_POST['uniname'] ?></p>
                    </div>
                </div>
            </div>
            <div class="eduction">
                <h1 class="eduction-title">
                    refrence
                </h1>
                <div class="eduction-container">
                    <div class="major">
                        <h2><?= $_POST['boos'] ?></h2>
                        <p class="major-name"><?= $_POST['company'] ?></p>
                        <p class="major-date"><?= $_POST['yearcopmany'] ?></p>
                    </div>
                </div>

            </div>
            <div class="contact">
                <h3 class="phone">Phone</h3>
                <p><?= $_POST['tel'] ?></p>
                <h3 class="website">github</h3>
                <p><?= $_POST['github'] ?></p>
                <h3 class="Email">Email</h3>
                <p><?= $_POST['email'] ?></p>
                <h3 class="addres">Addres</h3>
                <p><?= $_POST['addres'] ?></p>
            </div>
        </div>
        <div class="right-main">
            <h1 class="name-title"><strong> <?= $_POST['fullname'] ?></strong>
                <span>front-End Developer</span>
            </h1>
            <div class="about-me">
            <h3>about me</h3>
            <p><?= $_POST['about'] ?></p>
            
            </div>
            <div class="workexperienc">
            <h3 class="workexperienc-t">work experience</h3>
            <div class="expeience-container">
                <span class="span">compony:</span>
                <p class="company-name"><?= $_POST['company'] ?></p>
                <span class="span">title job</span>
                <p class="job-title"><?= $_POST['nameTitle'] ?></p>
                 
                    <span class="span">year:</span>
                    <p class="work-date"><?= $_POST['date'] ?></p>
                
                     <span class="span">description:</span>
                    <p class="description"><?= $_POST['describ'] ?></p>
                   
                   <span class="span">university name :</span> <p class="uni-name"><?= $_POST['uniname'] ?></p>
                   
                   <span class="span">grade:</span>
                   <p class="grade"><?= $_POST['grade'] ?></p>
                
                   <span class="span">honors:</span>
                   <p class="honors"><?= $_POST['honor'] ?></p>
                
                
            </div>

            </div>
            <div class="skills">
                <h2 class="software">
                    software
                </h2>
                <div class="skills-container">
                <div class="left">
                    <p><?= $_POST['item1'] ?></p>
                    <p><?= $_POST['item2'] ?></p>
                    <p><?= $_POST['item3'] ?></p>

                </div>
                <div class="right">
                    <p><?= $_POST['item4'] ?></p>
                    <p><?= $_POST['item5'] ?></p>
                    <p><?= $_POST['item6'] ?></p>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="./dark.js"></script>
<script src="https://kit.fontawesome.com/5e3d336e73.js" crossorigin="anonymous"></script>
</body>
</html>