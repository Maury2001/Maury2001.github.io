<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WORK IT</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    #landing {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("<?php echo base_url('work.jpg'); ?>");
        background-position: center;
        background-size: cover;
        position: relative;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 6px 6px;


    }

    nav img {
        width: 150px;
        opacity: 0.7;
        margin-left: 10px;
        /* border:1px solid white; */
    }

    nav ul li {

        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        background-color: black;
        position: relative;
    }

    nav ul li:hover {
        background-color: gray;
        transition: 1s;
    }

    .links {
        flex: 1;
        text-align: right;

    }

    .links ul li a {
        text-decoration: none;
        color: white;
        font-size: 17px;
        border-style: ridge;
        padding: 10px
    }

    .links ul li a :hover {
        background: gray;
        border-left: 0;
        border-right: 0;
    }

    .text {
        width: 90%;
        color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;

    }

    .text h1 {
        font-size: 62px;


    }

    .text a {
        display: inline-block;
        border: 1px white solid;
        padding: 10px 15px;
        margin-top: 40px;
        text-align: center;
        text-decoration: none;
        width: 20rem;
        color: #fff;
        font-size: 15px;
        background: transparent;
        position: relative;
        cursor: pointer;
    }

    .text a:hover {
        transition: 1s;
        border: 1px gray solid;
        background: gray;

    }

    .campus {
        width: 80%;
        text-align: center;
        margin: auto;
        padding-top: 50px;
    }

    .ca-col {
        flex-basis: 32%;
        border-radius: 50px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    }

    .ca-col img {

        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .layer {
        background: transparent;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: 0.5s;
    }

    .layer:hover {
        background: rgba(169, 169, 169, 0.7);

    }

    .layer h3 {
        width: 100%;
        bottom: 0;
        left: 50%;
        font-size: 40px;
        font-weight: 500;
        transform: translate(-50%);
        position: absolute;
        opacity: 0;
        transition: 0.4s;
    }

    .layer:hover h3 {
        bottom: 50%;
        left: 30%;
        opacity: 1;
    }

    button {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        background: transparent;
        padding: 0;
        font-size: inherit;
        font-family: inherit;
    }

    button.learn-more {
        width: 15rem;
        height: auto;
    }

    button.learn-more .circle {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: relative;
        display: block;
        margin: 0;
        width: 3rem;
        height: 3rem;
        background: #282936;
        border-radius: 1.625rem;
    }

    button.learn-more .circle .icon {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background: #fff;
    }

    button.learn-more .circle .icon.arrow {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        left: 0.625rem;
        width: 1.125rem;
        height: 0.125rem;
        background: none;
    }

    button.learn-more .circle .icon.arrow::before {
        position: absolute;
        content: "";
        top: -0.29rem;
        right: 0.0625rem;
        width: 0.625rem;
        height: 0.625rem;
        border-top: 0.125rem solid #fff;
        border-right: 0.125rem solid #fff;
        transform: rotate(45deg);
    }

    button.learn-more .button-text {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0.75rem 0;
        margin: 0 0 0 1.85rem;
        color: #282936;
        font-weight: 700;
        line-height: 1.6;
        text-align: center;
        text-transform: uppercase;
    }

    button:hover .circle {
        width: 100%;
    }

    button:hover .circle .icon.arrow {
        background: #fff;
        transform: translate(1rem, 0);
    }

    button:hover .button-text {
        color: #fff;
    }

    .course {
        width: 80%;
        height: 80vh;
        text-align: center;
        margin: auto;
        padding-top: 50px;
    }

    .course p {
        padding: 20px;
        color: black;
        font-weight: 300;
        line-height: 22px;
    }

    .row {
        margin-top: 5%;
        display: flex;
        justify-content: space-between;

    }

    .c-col {
        flex-basis: 31%;
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 20px 12px;
        box-sizing: border-box;
        background: silver;
        transition: 00.5s;

    }

    .course h3 {
        text-align: center;
        font-weight: 600;
    }

    .c-col:hover {
        box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.2);
    }

    .fancy a {
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        border: 2px solid #fefefe;
        text-transform: uppercase;
        color: #fefefe;
        text-decoration: none;
        font-weight: 600;
        font-size: 20px;

    }

    .fancy a::before {
        content: '';
        position: absolute;
        top: 6px;
        left: -2px;
        width: calc(100% + 4px);
        height: calc(100% - 12px);
        background-color: #212121;
        transition: 0.3s ease-in-out;
        transform: scaleY(1);
    }

    .fancy a:hover::before {
        transform: scaleY(0);
    }

    .fancy a::after {
        content: '';
        position: absolute;
        left: 6px;
        top: -2px;
        height: calc(100% + 4px);
        width: calc(100% - 12px);
        background-color: #212121;
        transition: 0.3s ease-in-out;
        transform: scaleX(1);
        transition-delay: 0.5s;
    }

    .fancy a:hover::after {
        transform: scaleX(0);
    }

    .fancy a span {
        position: relative;
        z-index: 3;
    }

    .fancy button {
        background-color: none;
        text-decoration: none;
        background-color: #212121;
        border: none;
        margin-top: 40px;
    }

    .img-r {
        border-radius: 60px;
    }

    .footer {
        background-color: black;
        width: 100%;

        margin-top: 60px;
        color: white;
    }

    .f-image img {
        width: 250px;
        height: 200px;
        opacity: 0.7;

    }

    #community {
        margin-top: 20px;
    }

    #community ul {
        list-style: none;
        padding: 10px;
        font-size: 15px;
        margin: 10px;

    }

    #community ul li {
        margin-top: 25px;
    }

    .card {
        position: relative;
        width: 200px;
        height: 200px;
        background: lightgrey;
        float: right;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        transition: all 1s ease-in-out;
        border: 2px solid rgb(255, 255, 255);
    }

    .background {
        position: absolute;
        inset: 0;
        background-color: #4158D0;
        background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
    }

    .logo {
        position: absolute;
        right: 50%;
        bottom: 50%;
        transform: translate(50%, 50%);
        transition: all 0.6s ease-in-out;
        font-size: 1.3em;
        font-weight: 600;
        color: #ffffff;
        letter-spacing: 3px;
    }

    .logo .logo-svg {
        fill: white;
        width: 30px;
        height: 30px;
    }

    .icon {
        display: inline-block;
        width: 20px;
        height: 20px;
    }

    .icon .svg {
        fill: rgba(255, 255, 255, 0.797);
        width: 100%;
        transition: all 0.5s ease-in-out;
    }

    .box {
        position: absolute;
        padding: 10px;
        text-align: right;
        background: rgba(255, 255, 255, 0.389);
        border-top: 2px solid rgb(255, 255, 255);
        border-right: 1px solid white;
        border-radius: 10% 13% 42% 0%/10% 12% 75% 0%;
        box-shadow: rgba(100, 100, 111, 0.364) -7px 7px 29px 0px;
        transform-origin: bottom left;
        transition: all 1s ease-in-out;
    }

    .box::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        opacity: 0;
        transition: all 0.5s ease-in-out;
    }

    .box:hover .svg {
        fill: white;
    }

    .box1 {
        width: 70%;
        height: 70%;
        bottom: -70%;
        left: -70%;
    }

    .box1::before {
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #ff53d4 60%, #62c2fe 90%);
    }

    .box1:hover::before {
        opacity: 1;
    }

    .box1:hover .icon .svg {
        filter: drop-shadow(0 0 5px white);
    }

    .box2 {
        width: 50%;
        height: 50%;
        bottom: -50%;
        left: -50%;
        transition-delay: 0.2s;
    }

    .box2::before {
        background: radial-gradient(circle at 30% 107%, #91e9ff 0%, #00ACEE 90%);
    }

    .box2:hover::before {
        opacity: 1;
    }

    .box2:hover .icon .svg {
        filter: drop-shadow(0 0 5px white);
    }

    .box3 {
        width: 30%;
        height: 30%;
        bottom: -30%;
        left: -30%;
        transition-delay: 0.4s;
    }

    .box3::before {
        background: radial-gradient(circle at 30% 107%, #969fff 0%, #b349ff 90%);
    }

    .box3:hover::before {
        opacity: 1;
    }

    .box3:hover .icon .svg {
        filter: drop-shadow(0 0 5px white);
    }

    .box4 {
        width: 10%;
        height: 10%;
        bottom: -10%;
        left: -10%;
        transition-delay: 0.6s;
    }

    .card:hover {
        transform: scale(1.1);
    }

    .card:hover .box {
        bottom: -1px;
        left: -1px;
    }

    .card:hover .logo {
        transform: translate(70px, -52px);
        letter-spacing: 0px;
    }

    #footie span {

        color: white;

    }
    </style>
</head>

<body>
    <section class="" id="landing">
        <nav>
            <a href="#"><img src="fit3-bg.png"></a>
            <div class="links" id="links">
                <ul>
                    <li><a href="#">LOGIN</a></li>
                    <li><a href="#">REGISTER NOW</a></li>
                    <li class="#"><a href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg></a></li>
                </ul>
            </div>

        </nav>
       
        <div class="text">
            <h1>SMALL STEPS EQUAL BIG CHANGES</h1>

            <a href="#home">START TODAY</a>
        </div>
    </section>
    <section>
        <div class="d-flex justify-content-center mt-4">
            <h1 class="mt-4 text-center fw-bold mb-4 p-4">Program for Every Goal</h1>
        </div>
        <div class="d-flex justify-content-center">
            <p class="fs-4 fw-light text-center">
                Get a workout program that works for your body. Use one of our preset <br /> programs or customize your
                own set of workouts to get the results you want. We <br /> have exercises for every body type and every
                body goal.
            </p>
        </div>

        <div class="campus">
            <div class="row">

                <div class="ca-col">
                    <img src="lift.jpg">
                    <div class="layer">
                        <h3>Body Toning</h3>
                    </div>
                </div>
                <div class="ca-col">
                    <img src="body.jpg">
                    <div class="layer">
                        <h3>weight Loss</h3>
                    </div>
                </div>
                <div class="ca-col">
                    <img src="pull.jpg">
                    <div class="layer">
                        <h3>Muscle Gain</h3>
                    </div>
                </div>

            </div>
        </div>

        <div class="d-flex justify-content-center mt-4 pt-4">
            <button class="learn-more">
                <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                </span>
                <span class="button-text">MORE PROGRAMS</span>
            </button>
        </div>

    </section>


    <section class="course">
        <div class="d-flex justify-content-center text-center mt-4">
            <h1>OUR<br />CORE<br />VALUES</h1>
        </div>


        <div class="row">
            <div class="c-col">
                <h3>Our Mission</h3>
                <p>
                    Inspiring a healthier world by providing members with AFFORDABLE access to the benefits that being
                    active can offer
                </p>
            </div>
            <div class="c-col">
                <h3>Main Objective</h3>
                <p>
                    Achieving ultimate human performance
                </p>
            </div>
            <div class="c-col">
                <h3>Quantity over quality</h3>
                <p>
                    We are very proud of the environment we have created with our everybody welcome philosophy and the
                    diversity of our membership across all our gyms.
                </p>
            </div>
        </div>
    </section>
    <section class="container text-center">
        <div class="row">
            <div class="col-md-8 rounded">

                <img src="gymm.jpg" class="img-r" style="width:100%; height:80vh;" alt="">


            </div>
            <div class="col-6 col-md-4 d-flex flex-column align-items-center">

                <p class="fs-1 fw-bold lh-lg m-4">
                    AMAZING <br /> FUNCTIONAL <br /> STRENGTH <br /> WORKOUTS, <br /> JOIN US NOW!!
                </p>

                <div class="fancy">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a href="#"><span>Subscribe</span></a>
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Subscribe Today</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method='post' action='/send_email'>

                                        <?= csrf_field() ?>
                                        <div class="form-outline mb-4">

                                            <input type="email" id="loginName" required name="email"
                                                class="form-control" value="" />
                                            <label class="form-label" for="loginName">Email</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="loginPassword" required name="password"
                                                class="form-control" autocomplete="new-password" />
                                            <label class="form-label" for="loginPassword">Password</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col d-flex align-items-center mt-4">
                    <a href="#" class="f-image"><img src="fit3.jpg"></a>
                </div>
                <div class="col" id="community">
                    <h4>Community</h4>
                    <ul>
                        <li>Issues</li>
                        <li>Discussions</li>
                        <li>Corporate Sponsors</li>
                        <li>Open Collective</li>
                        <li>Visit us</li>
                    </ul>
                </div>
                <div class="col" id="community">
                    <h4>Visit us Today</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127641.44467976203!2d36.78208!3d-1.2976127999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1af89e77803b%3A0x3feb567b4678bf10!2sNgong%20Race%20Course%20and%20Golf%20Park!5e0!3m2!1sen!2ske!4v1709915723283!5m2!1sen!2ske"
                        width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col" id="community">
                    <div class="card">
                        <div class="background">
                        </div>
                        <div class="logo">
                            Socials
                        </div>

                        <a href="#">
                            <div class="box box1"><span class="icon"><svg viewBox="0 0 30 30"
                                        xmlns="http://www.w3.org/2000/svg" class="svg">
                                        <path
                                            d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                                        </path>
                                    </svg></span></div>
                        </a>

                        <a href="##">
                            <div class="box box2"> <span class="icon"><svg viewBox="0 0 512 512"
                                        xmlns="http://www.w3.org/2000/svg" class="svg">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                        </path>
                                    </svg></span></div>
                        </a>

                        <a href="###">
                            <div class="box box3"><span class="icon"><svg viewBox="0 0 640 512"
                                        xmlns="http://www.w3.org/2000/svg" class="svg">
                                        <path
                                            d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
                                        </path>
                                    </svg></span></div>
                        </a>

                        <div class="box box4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center" id="footie">
            <span>GymWebsite&copy;<?= date('Y') ?> All rights reserved - Made with &#9829; by &#9824;Maestro </span>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>