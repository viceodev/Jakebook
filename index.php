<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Jakebook is a booking site built by Okonkwo Victor to test his skills on SASS,Javascript and PHP">
    <meta name="author" content="Okonkwo Victor">
    <title>Jakebook</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <!-- Mobile Header -->
    <?php require 'app.php' ?>

    <!-- Hero Section -->
    <div class="hero shadow">
        <div class="hero-content">
            <div class="d-none hero-img">
                <img src="./img/man pointing.png" alt="">
            </div>

            <div class="hero-info capitalize">
            <p> Revolutionizing road transportation in Nigeria</p>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum ut ipsum enim deleniti voluptate amet aut veniam temporibus similique.</small><br>
            <button class="button-secondary">Book A Bus</button> 
            </div>
                
        </div>
        
        
    </div>

    <!-- Terminals point-->
    <section class="terminals mt-3">
        <h2 class="shadow title">Available Terminals/Routes</h2>

        <!-- Individual-->
        <div class="card">
            <script>
                let num = 6;
                let output = "";
                for(let i = 0;  i < num; i++){
                    output+= `<div class="card-item  shadow">
                <img src="./img/terminals.jpeg" alt="terminals Ojuelegba">
                <a href="" class="">
                    <svg class="shadow" id="light" enable-background="new 0 0 24 24" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg"><g><path d="m10.5 21h-2c-.827 0-1.5-.673-1.5-1.5 0-.311.095-.611.267-.845l4.432-6.655-4.445-6.673c-.159-.216-.254-.516-.254-.827 0-.827.673-1.5 1.5-1.5h2c.499 0 .965.251 1.246.673l5 7.5c.159.216.254.516.254.827s-.095.611-.267.845l-4.987 7.482c-.281.422-.747.673-1.246.673zm-2-17c-.276 0-.5.224-.5.5 0 .095.028.192.073.254l4.643 6.968c.112.168.112.387 0 .555l-4.63 6.95c-.058.081-.086.178-.086.273 0 .276.224.5.5.5h2c.167 0 .317-.083.414-.228l5-7.5c.058-.08.086-.177.086-.272s-.028-.192-.073-.254l-5.013-7.518c-.097-.145-.247-.228-.414-.228z"/></g></svg>
                
                <p>Jarin Park- (#4,500 - #10,000)</p></a>
            </div>`;
                }
                document.querySelector('div.card').innerHTML = output;
            </script>

            
        </div>
    </section>

    <!-- services and services-->

    <section class="services">
        <h2 class="title shadow mt-5">Services</h2>

        <div class="services_card d-flex">
            <div class="services-item shadow pb-3">
                <div class="header">
                <img src="./img/transportation.png" alt="road transportation">
                <h2 class="title-sm">Road Transportation</h2>  
                </div>
                
                <p class="p-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad neque atque quis, obcaecati minus voluptatibus? Iusto, aliquid earum praesentium tenetur ut, dolor voluptatem laboriosam dolores optio maiores odit error. Numquam.</p>
                <button class="button-primary">Read More</button>
            </div>

            <div class="services-item shadow pb-3">
                <div class="header">
                <img src="./img/pickup.png" alt="logistics">
                <h2 class="title-sm">Logistics/Way-Billing</h2>  
                </div>
                
                <p class="p-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad neque atque quis, obcaecati minus voluptatibus? Iusto, aliquid earum praesentium tenetur ut, dolor voluptatem laboriosam dolores optio maiores odit error. Numquam.</p>
                <button class="button-primary">Read More</button>
            </div>

            <div class="services-item shadow pb-3">
                <div class="header">
                <img src="./img/academy.jpeg" alt="logistics">
                <h2 class="title-sm">Learning Academy</h2>  
                </div>
                
                <p class="p-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad neque atque quis, obcaecati minus voluptatibus? Iusto, aliquid earum praesentium tenetur ut, dolor voluptatem laboriosam dolores optio maiores odit error. Numquam.</p>
                <button class="button-primary">Read More</button>
            </div>
        </div>
    </section><hr class="mb-3">

<!-- App Download-->
<div class="app-flex">
<section class="app">
    <div class="download p-2 shadow m-auto rounded">
        <p class="title rounded">Booking Trips Made Easy!</p>
        <p class="p-1">Download our app today and book your trips with ease. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, minus?</p>

        <div class="svg-group">
            <!-- apple -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/></svg>

            <!-- google play store -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"/></svg>

            <!-- android -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M420.55,301.93a24,24,0,1,1,24-24,24,24,0,0,1-24,24m-265.1,0a24,24,0,1,1,24-24,24,24,0,0,1-24,24m273.7-144.48,47.94-83a10,10,0,1,0-17.27-10h0l-48.54,84.07a301.25,301.25,0,0,0-246.56,0L116.18,64.45a10,10,0,1,0-17.27,10h0l47.94,83C64.53,202.22,8.24,285.55,0,384H576c-8.24-98.45-64.54-181.78-146.85-226.55"/></svg>

            <!-- windows -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z"/></svg>

        </div>
        <a href=""><p class="title rounded">Download Now</p></a>
    </div>
</section>


<section class="children-discount mt-3">
    <div class="discount p-2 shadow m-auto rounded">
        <p class="title-sm rounded capitalize">get discounts on family ride!</p>
        <p class="p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti enim ex, beatae quaerat adipisci sed officiis perspiciatis autem, velit nemo veritatis rem quam, saepe veniam repudiandae minima quos est iste!</p>

        <div class="svg-group">
            <!-- male -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M96 0c35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64S60.654 0 96 0m48 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H48c-26.51 0-48 21.49-48 48v136c0 13.255 10.745 24 24 24h16v136c0 13.255 10.745 24 24 24h64c13.255 0 24-10.745 24-24V352h16c13.255 0 24-10.745 24-24V192c0-26.51-21.49-48-48-48z"/></svg>

            <!-- Female -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M128 0c35.346 0 64 28.654 64 64s-28.654 64-64 64c-35.346 0-64-28.654-64-64S92.654 0 128 0m119.283 354.179l-48-192A24 24 0 0 0 176 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H80a24 24 0 0 0-23.283 18.179l-48 192C4.935 369.305 16.383 384 32 384h56v104c0 13.255 10.745 24 24 24h32c13.255 0 24-10.745 24-24V384h56c15.591 0 27.071-14.671 23.283-29.821z"/></svg>

            <!-- happy male -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M120 72c0-39.765 32.235-72 72-72s72 32.235 72 72c0 39.764-32.235 72-72 72s-72-32.236-72-72zm254.627 1.373c-12.496-12.497-32.758-12.497-45.254 0L242.745 160H141.254L54.627 73.373c-12.496-12.497-32.758-12.497-45.254 0-12.497 12.497-12.497 32.758 0 45.255L104 213.254V480c0 17.673 14.327 32 32 32h16c17.673 0 32-14.327 32-32V368h16v112c0 17.673 14.327 32 32 32h16c17.673 0 32-14.327 32-32V213.254l94.627-94.627c12.497-12.497 12.497-32.757 0-45.254z"/></svg>

            <!-- bus -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h6.4c16 0 25.6-12.8 25.6-25.6V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM112 400c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm16-112c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h256c17.67 0 32 14.33 32 32v128c0 17.67-14.33 32-32 32H128zm272 112c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"/></svg>

        </div>
        <a href="#"><p class="title-sm rounded">Book Now</p></a>
    </div>
</section>
</div>



<?php require 'footer.php' ?>
</html>