<div class="Animcont">
        <div class="load-space2"></div>
        <div class="anim-element2"></div>
        <div class="main-text1" style="font-family: 'Montserrat';">Studybooster</div>
        <div class="load-space1"></div>
        <div class="anim-element1"></div>
    </div>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .Animcont{
            position: absolute;
            z-index: 500;
            left: 0;
            top: 0;
            width: 100vw;
            height: 100vh;
            background-color: #fff;
        }
        .main-text1{
            position: absolute;
            margin-top: 38vh;
            margin-left: 40vw;
            text-align: center;
            color: #fff;
            background-color: rgb(243, 140, 6); /* rgba(197, 12, 243, 0.7) */
            font-size: 40px;
            width: 20vw;
            height: 9vh;
            padding: 5px 0px;
        }
        .load-space1{
            position: absolute;
            background-color: rgb(230, 230, 230);
            height: 1vh;
            width: 20vw;
            margin-top: 49.5vh;
            margin-left: 40vw;
        }
        .anim-element1{
            position: absolute;
            margin-top: 49.5vh;
            margin-left: 40vw;
            width: 5vw;
            height: 1vh;
            background-color: rgb(23, 103, 252);
            animation: loadingAnim 1.5s infinite ease;
        }
        .load-space2{
            position: absolute;
            background-color: rgb(230, 230, 230);
            height: 1vh;
            width: 20vw;
            margin-top: 34.7vh;
            margin-left: 40vw;
        }
        .anim-element2{
            position: absolute;
            margin-top: 34.7vh;
            margin-left: 55vw;
            width: 5vw;
            height: 1vh;
            background-color: rgb(23, 103, 252);
            animation: loadingAnim1 1.5s infinite ease;
        }
        @keyframes loadingAnim {
            0%{
                margin-left: 40vw;
            }
            50%{
                margin-left: 55vw;
            }
            100%{
                margin-left: 40vw;
            }
        }
        @keyframes loadingAnim1 {
            0%{
                margin-left: 55vw;
            }
            50%{
                margin-left: 40vw;
            }
            100%{
                margin-left: 55vw;
            }
        }
        
        @media screen and (max-width: 1450px) {
            .load-space1{
                width: 24vw;
            }
            .load-space2{
                width: 24vw;
            }
            .anim-element1{
                width: 9vw;
            }
            .anim-element2{
                width: 9vw;
            }
            .main-text1{
                font-size: 35px;
                width: 24vw;
                padding: 5px 15px;
            }
        }
        @media screen and (max-width: 1250px) {
            .load-space1{
                width: 25vw;
                margin-top: 48.5vh;
            }
            .load-space2{
                width: 25vw;
            }
            .anim-element1{
                width: 10vw;
                margin-top: 48.5vh;
            }
            .anim-element2{
                width: 10vw;
            }
            .main-text1{
                font-size: 33px;
                width: 25vw;
                padding: 5px 15px;
                height: 8vh;
            }
        }
        @media screen and (max-width: 950px) {
            .load-space1{
                width: 27vw;
                margin-top: 48.5vh;
            }
            .load-space2{
                width: 27vw;
            }
            .anim-element1{
                width: 12vw;
                margin-top: 48.5vh;
            }
            .anim-element2{
                width: 12vw;
            }
            .main-text1{
                font-size: 30px;
                width: 27vw;
                padding: 5px 15px;
                height: 8vh;
            }
        }
        @media screen and (max-width: 830px) {
            .load-space1{
                width: 28vw;
                margin-top: 47.5vh;
            }
            .load-space2{
                width: 28vw;
            }
            .anim-element1{
                width: 13vw;
                margin-top: 47.5vh;
            }
            .anim-element2{
                width: 13vw;
            }
            .main-text1{
                font-size: 27px;
                width: 28vw;
                padding: 5px 15px;
                height: 7vh;
            }
        }
        @media screen and (max-width: 720px) {
            .load-space1{
                width: 28vw;
                margin-top: 47.5vh;
            }
            .load-space2{
                width: 28vw;
            }
            .anim-element1{
                width: 13vw;
                margin-top: 47.5vh;
            }
            .anim-element2{
                width: 13vw;
            }
            .main-text1{
                font-size: 23px;
                width: 28vw;
                padding: 7px 16px;
                height: 7vh;
            }
        }
        @media screen and (max-width: 640px) {
            .load-space1{
                width: 28vw;
                margin-top: 47.5vh;
            }
            .load-space2{
                width: 28vw;
            }
            .anim-element1{
                width: 13vw;
                margin-top: 47.5vh;
            }
            .anim-element2{
                width: 13vw;
            }
            .main-text1{
                font-size: 20px;
                width: 28vw;
                padding: 10px 14px;
                height: 7vh;
            }
        }
        @media screen and (max-width: 530px) {
            .load-space1{
                width: 30vw;
                margin-top: 47.5vh;
            }
            .load-space2{
                width: 30vw;
            }
            .anim-element1{
                width: 15vw;
                margin-top: 47.5vh;
            }
            .anim-element2{
                width: 15vw;
            }
            .main-text1{
                font-size: 20px;
                width: 30vw;
                padding: 10px 8px;
                height: 7vh;
            }
        }
       
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(window).on("load", function(){
            $(".Animcont").fadeOut("slow");
        });
    </script>