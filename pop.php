<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Contact Buttons</title>
    <style>
        #contact-btns {
            padding: 0 0%;
            width: 100%;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            display: flex;
            justify-content: space-between;
            /* background-color: red; */
            margin-bottom: 45px;
        }

        @media (max-width:576px) {
            #contact-btns {
                /* margin: 0 20%; */
                /* margin-top: 20%; */
                /* padding: 0 4%; */
                width: 100%;
                position: fixed;
                bottom: 20px;
                /* right: 20px; */
                z-index: 9999;
                display: flex;
                justify-content: space-between;
                /* background-color: red; */
                margin-bottom: 40px;

            }

            #round {
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
            }


        }

        #contact-btns #round1 {
            /* display: flex;
            position: static; */
            display: block;
            width: 50px;
            height: 50px;
            background-color: #088511;
            /* WhatsApp Green */
            color: #fff;
            text-align: center;
            line-height: 50px;
            border-radius: 50%;
            margin-bottom: 10px;
            text-decoration: none;
            font-size: 24px;
            transition: transform 0.3s ease;
        }

        #round {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
        }

        #round1 {
            margin-left: 3%;
        }

        @media (max-width:576px) {
            #contact-btns a {
                width: 50px;
                height: 50px;
            }

            #round1 {
                margin-left: 10%;
            }

        }

        #contact-btns a:last-child {
            background-color: #814439;

        }

        #contact-btns a:hover {
            transform: scale(1.1);
        }

        #font-a {
            padding-left: 12px;

        }

        #font-aa {

            padding-top: 7px;

        }
    </style>
</head>

<body>

    <div id="contact-btns">
        <a href="https://wa.link/ralkcj" id="round1" target="_blank">
            <i class="fa fa-whatsapp" id="font-aa" style="font-size:37px;color:white"></i>
        </a>

        
        <!-- &#128222; -->
    </div>

    <script>
        // Optionally, you can add functionality to hide the button when scrolling down.
        window.addEventListener('scroll', function () {
            var contactBtns = document.getElementById('contact-btns');
            if (window.scrollY > 100) {
                contactBtns.style.opacity = 0;
            } else {
                contactBtns.style.opacity = 1;
            }
        });
    </script>

</body>

</html>