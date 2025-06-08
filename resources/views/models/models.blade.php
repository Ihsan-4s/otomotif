<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('templete')

    @section('content')
    <section class="models-section py-5 bg-light">
        <div class="container">
            <h1 class="fw-light">Find Your BMW</h1>
            <nav style="margin: 30px 0 0 0">
                <ul style="display: flex; justify-content: flex-start; flex-wrap: wrap; list-style: none; padding: 0; margin: 0;">
                    <li style="margin: 0 25px 0 0;">
                        <a href="#z4" style="position: relative; text-decoration: none; color: #333; font-weight: 500; font-size: 18px; padding-bottom: 8px; display: inline-block;">
                            Z4
                            <span style="position: absolute; left: 0; bottom: 0; width: 100%; height: 2px; background: #333; transform: scaleX(1); transform-origin: center;"></span>
                        </a>
                    </li>
                    <li style="margin: 0 25px 0 0;">
                        <a href="#bmwi" style="position: relative; text-decoration: none; color: #666; font-weight: 400; font-size: 18px; padding-bottom: 8px; display: inline-block;">
                            BMW i
                            <span style="position: absolute; left: 0; bottom: 0; width: 100%; height: 2px; background: #333; transform: scaleX(0); transition: transform 0.3s ease; transform-origin: center;"></span>
                        </a>
                    </li>
                    <li style="margin: 0 25px 0 0;">
                        <a href="#m" style="position: relative; text-decoration: none; color: #666; font-weight: 400; font-size: 18px; padding-bottom: 8px; display: inline-block;">
                            M
                            <span style="position: absolute; left: 0; bottom: 0; width: 100%; height: 2px; background: #333; transform: scaleX(0); transition: transform 0.3s ease; transform-origin: center;"></span>
                        </a>
                    </li>
                    <li style="margin: 0 25px 0 0;">
                        <a href="#x" style="position: relative; text-decoration: none; color: #666; font-weight: 400; font-size: 18px; padding-bottom: 8px; display: inline-block;">
                            X
                            <span style="position: absolute; left: 0; bottom: 0; width: 100%; height: 2px; background: #333; transform: scaleX(0); transition: transform 0.3s ease; transform-origin: center;"></span>
                        </a>
                    </li>
                </ul>
            </nav>

            <script>
            document.querySelectorAll("nav a").forEach(link => {
                link.addEventListener("mouseenter", () => {
                    link.querySelector("span").style.transform = "scaleX(1)";
                });
                link.addEventListener("mouseleave", () => {
                    if (!link.classList.contains("active")) {
                        link.querySelector("span").style.transform = "scaleX(0)";
                    }
                });
            });
            </script>
        </div>
        <hr>
        <div class="container mt-3">
            <h2 id="z4" class="fw-light">Z4</h2>
            <div style="display: flex; gap: 40px; flex-wrap: wrap;">
                <!-- Card 1 -->
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFn759Mb3AgyyIJrjGo9uyJRBODlsrjGpuaprQbhSIqppglBgm9CJl384MlficYiJHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251uSDRqoQh47wMvcYi9kQaaMb3xq0zoKUHdl38IrjGl3gbYHdl38frjGQ5uarQbvKbyFnJl386rjGj9uarQbnDMESMdQ2UyJGy5izgrQ%25r9oaaW8zWu3RuqogqaRbnl3ilUb8jcRScHJosMbnMdQBRyJGy58SurQ%25r9oKRW8zWu3DjqogqaRC4l3ilUb4dcRScHJJ8MbnMdQQYyJGy588nrQ%25r9RaFW8zWubREqogqaJQ3l3ilUQzAcRScHbgVMbnMdd8syJGy558arQ%25r9RaFW8zWubREqogqaJQ3l3ilUQzAcRScHbgVMbnMdd8syJGy558arQ%25r9REUW8zWuEYUqogqaDHzl3ilUCJ5cRScHz8fMbnMdQ3YyJGy58RnrQ%25r98nJW8zWuoD%25qogqa3R8l3ilURb0cRScHbd8MbnMdJ58yJGy5Q9urQ%25r98DUW8zWuBGrqogqaGjJl3ilUCb0cRScHb5uMbnMdJ9OyJGy5QsvrQ%25r90n2W8zWuB3dqogqaJ25l3ilURdmcRScHbQ8MbnMdJ8SyJGy5QoRrQ%25r9838W8zWuBDCqogqaC%25Kl3ilUQ3CcRScH8NiMbnMdoPdyJGy5muBrQ%25r9snGW8zWuuRbqogqaaQ8l3ilUUJ5cRScHH0mMbnMddBdyJGy559BrQ%25r90bcW8zWuKF%25qogqaYUtl3ilUR7CcRScHFeoMbnMdjQRyJGy578ErQ%25r90uRW8zWuBaNqogqaYHtl3ilUEHwcRScHzJmMbnMdgsYyJGy5su3rQ%25r9KbiW8zWuDGEqogqaD%25Fl3ilU4JZcRScHbdQMbnMdQzdyJGy57s3rQbBUq2rjGTSFhrQb9%25cQSW7%25IER8MI8YHQA"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW Z4 Roadster</h5>
                    <p style="margin: 4px 0; color: #666;">Gasoline</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp1.843.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
            </div>

            <hr>

            <h2 id="bmwi" class="fw-light">BMW i</h2>
            <div style="display: flex; gap: 40px; flex-wrap: wrap;">
                <!-- Card 1 -->
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBgnJJOl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251uRCRqoQh47wMvcYi9SDrfMb3islBglUjaqcRScHzGAMbnMdd5syJGy5i4DrQ%25r9SXRW8zWuKbsqogqaDn3l3ilUQI8cRScH8ZuMbnMdg30yJGy5QJNrQ%25r982bW8zWuomjqogqa3sHl3ilURQGcRScH7QQMbnMd03RyJGy5Q3drQ%25r98StW8zWun3CqogqaGs0l3ilUQTzcRScHzoBMbnMdgokyJGy5i4arQ%25r9sRnW8zWubFHqogqaDJNl3ilU%257QcRScH8ZAMbnMdoPdyJGy5i6ErQ%25r9SKCW8zWubDCqogqaDjzl3ilU%25d0cRScHzmBMb37ur1MESxgYXMb3dnqbgyFntBoJltJ0ab6"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW i4</h5>
                    <p style="margin: 4px 0; color: #666;">Full Electric</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp1.841.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBgEJunl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251uSD5qoQh47wMvcYi9SyE2Mb3islBglUQTzcRScH8ZuMbnMdg30yJGy5i4DrQ%25r99KGW8zWuu3Hqogqaa9Tl3ilUj7dcRScH7qjMbnMdo13yJGy5iYgrQ%25r99uDW8zWunJjqogqaG2Fl3ilUC4ocRScH7%251MbnMdgCEyJGy53RKrQ%25r9YpRW8zWuKSoqogqaDJKl3ilU%25t0cRScHzZ8MbnMdea6yJGy5isDrQ%25r993UW8zWunUQqogqaGbbl3ilU%2539cRScH7o3MbnMd088yJGy5idtrQ%25r9SoDW8zWuo86qogqa3sHl3ilUCzjcRScHbDBMbnMdJ13yJGy5Q9nrQ%25r98SFW8zWuonNqogqa3Jnl3ilURQacRScHFNbMbnMdjoUyJGy57RKrQ%25r901xW8zWuDAQqogqaJb8l3ilU4tQcRScHbrmMbnMdm3syJGy5BRNrQ%25r901AW8JYHltW7%25ZnjTW8JuzM8nq0z6Fboy6oEd82"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW i5</h5>
                    <p style="margin: 4px 0; color: #666;">Full Electric</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp2.225.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
            </div>

            <hr>

            <h2 id="m" class="fw-light">M</h2>
            <div style="display: flex; gap: 40px; flex-wrap: wrap;">
                <!-- Card 1 -->
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBgnRKnl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251u2DGqoQh47wMvcYi9678IMb3islBglU%25vzcRScHJqsMbnMdQgayJGy58g5rQ%25r9opHW8zWu3foqogqaJjdl3ilUQI8cRScH8NiMbnMdoPayJGy53L5rQ%25r9YaJW8zWuERRqogqaFQ8l3ilUjvdcRScH7wAMbnMdg30yJGy5iYarQ%25r9SERW8zWunD4qogqaGE%25l3ilU%25e0cRScHzmiMbnMdgl7yJGy5iJdrQ%25r9saYW8zWuKF%25qogqaD%25zl3ilUCzjcRScH4e3MbnMdeoiyJGy5m3lrQ%25r9sRxW8zWuKSJqogqa3Czl3ilURFjcRScHb8UMbnMdJodyJGy5Q3grQ%25r98SGW8zWuonNqogqa3o1l3ilURI8cRScHbDBMbnMdJPayJGy5QkRrQ%25r99abW8zWuuRGqogqaaRdl3ilUUHecRScHHwUMbnMdj9oyJGy57s3rQ%25r90uCW8zWuBiJqogqaY7el3iSA761JcmAMZRcRoj9y6cYiXzBLcRoHSWRzMES208bq2b7uRI"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW M4 CS</h5>
                    <p style="margin: 4px 0; color: #666;">Gasoline</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp3.499.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBg3Rnvl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251uS39qoQh47wMvcYi9kQwVMb3islBglUbuJcRScHzwgMbnMdQVayJGy53SBrQ%25r9RpbW8zWubtJqogqaJ2zl3ilUQT9cRScH8ZgMbnMdoPdyJGy5BubrQ%25r9YbJW8zWuEfCqogqaFkal3ilU%25dzcRScHzoBMbnMdg30yJGy5iYarQ%25r9SEbW8zWunD4qogqaGR4l3ilU%25FjcRScHzjgMbnMdgsYyJGy5iKnrQ%25r9SMBW8zWunm7qogqaDHFl3ilUC7gcRScH4giMbnMdei0yJGy5msbrQ%25r9sRnW8zWuKbMqogqaDJTl3ilUCG8cRScH4%25gMbnMdezOyJGy5QsnrQ%25r98BYW8zWuob9qogqa3Jal3ilURQGcRScHbz1MbnMdJbkyJGy5Q4ErQ%25r98vSW8zWuuRHqogqaaRdl3ilUUHecRScHHwsMbnMddVHyJR0aWAyFnhiExyJR5GlJirjGNY3QcNQBUJ1"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW M2 Coupé</h5>
                    <p style="margin: 4px 0; color: #666;">Gasoline</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp2.080.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBgnJdQl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251u2aIqoQh47wMvcYi9InqmMb3islBglU%25WFcRScH8ZuMbnMdg30yJGy5m3trQ%25r9RXnW8zWuu3Hqogqaakel3ilUUJzcRScH7uoMbnMd079yJGy53ARrQ%25r9o1YW8zWunfGqogqaaU4l3ilU%253pcRScHzD9MbnMdgCEyJGy5msbrQ%25r9sRnW8zWunFbqogqaGjdl3ilUjvUcRScHJzYMbnMdoIayJGy53L5rQ%25r9RpSW8zWubA%25qogqaRk5l3ilUjvecRScH4giMbnMdezJyJGy5m3lrQ%25r9SKCW8zWunC%25qogqaGE%25l3ilUC7gcRScH7o3MbnMdgQsyJGy5iKErQ%25r9snYW8zWuo86qogqa3NQl3ilURK0cRScHbj7MbnMdJgAyJGy5Q3grQ%25r98R5W8zWuonjqogqaYQ4l3ilUE45cRScHFrBMb37ur1MESxgYXMb3dnqbgyFntBoJltJ0ab6"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW M4 Convertible</h5>
                    <p style="margin: 4px 0; color: #666;">Gasoline</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp3.251.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBgnJunl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251uS3EqoQh47wMvcYi9StrfMb3islBglUQTzcRScH8ZuMbnMdg30yJGy5ic0rQ%25r9SeCW8zWuuD%25qogqaaRdl3ilUUvmcRScHHafMbnMd0BayJGy5BcXrQ%25r9SEtW8zWunbQqogqaaU4l3ilU%2580cRScHzN7MbnMd0VdyJGy5msbrQ%25r9YitW8zWunm7qogqaFk8l3ilUQTpcRScH4%25fMbnMdeo4yJGy5i4orQ%25r9S1FW8zWunxbqogqaGEJl3ilU%254mcRScHzeBMbnMdg70yJGy55oarQ%25r9SaJW8zWunRRqogqaGo5l3ilUj8ocRScH7QQMbnMdgH2yJGy5i8KrQ%25r98QIW8zWuomUqogqaD%25Fl3ilURK0cRScHzRYMbnMdJ13yJGy5QdnrQ%25r98SFW8zWuonNqogqa3Jnl3ilURQacRScHFNbMbnMdjoUyJGy57RKrQ%25r9K1HW8zWuBAhqogqaC28l3ilU4tQcRScHFpbMbnMdJWsyJGy5sRKrQ%25r9YbIW8zWuBA2qoQEdcNq0zPG7ZqoQagyoGlBg1jJ3r13F5ot"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW i5 M60 xDrive</h5>
                    <p style="margin: 4px 0; color: #666;">Full Electric</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp2.830.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBgEJKnl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251u2a9qoQh47wMvcYi9InG2Mb3islBglUQv%25cRScH8NiMbnMdoPdyJGy5iY3rQ%25r9SKCW8zWun3CqogqaGEFl3ilU%25egcRScHzDYMbnMdeBSyJGy5mSnrQ%25r993JW8zWuu3HqogqaaU4l3ilUQt9cRScH7QQMbnMd03RyJGy5iYarQ%25r9SDFW8zWu3AEqogqaGk%25l3ilUb%25BcRScHJwuMbnMdo13yJGy53LUrQ%25r9RXnW8zWuEfCqogqaFkal3ilU%25WFcRScHzRfMbnMdgCuyJGy5msbrQ%25r9sRnW8zWuKbIqogqaDJyl3ilUCGRcRScHbj7MbnMdJgAyJGy5QJNrQ%25r982bW8zWuomjqogqaakel3ilUR%250cRScHb8UMbnMdJozyJGy5mSBrQ%25r90bDW8zWuBDHqogqaYM7l3ilU%258jcRSn201AQMs2yPbMb37ur1MESxgYXMb3dnqbgyFntBoJltJ0ab6"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW M4 Coupé</h5>
                    <p style="margin: 4px 0; color: #666;">Gasoline</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp2.545.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
            </div>

            <hr>

            <h2 id="x" class="fw-light">X</h2>
            <div style="display: flex; gap: 40px; flex-wrap: wrap;">
                <!-- Card 1 -->
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpuaprQbhSIqppglBgnRntl384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251uSGNqoQh47wMvcYi9kQqQMb3islBglUbTRcRScHzGbMbnMdQgayJGy536UrQ%25r9RXyW8zWubxIqogqaFH8l3ilUjJJcRScH7o3MbnMd0%253yJGy5BObrQ%25r9Yp9W8zWunJHqogqaGQ7l3ilU%258jcRScHz09MbnMdgBoyJGy5isDrQ%25r9SBRW8zWunYEqogqaG47l3ilU%25egcRScHz8fMbnMdg43yJGy5i4FrQ%25r9saYW8zWuKF%25qogqaDC8l3ilUCQzcRScH48AMbnMdeo4yJGy5mgQrQ%25r983UW8zWuoYEqogqa3J%25l3ilURQGcRScHbzBMbnMdJbkyJGy5Q4ErQ%25r98eYW8zWuuU%25qogqaabdl3ilUUHecRScHHwsMb37ur1MESxgYXMb3dnqbgyFntBoJltJ0ab6"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW X4</h5>
                    <p style="margin: 4px 0; color: #666;">Gasoline</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp1.783.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
                <div style="width: 260px; ">
                    <img src="https://prod.cosy.bmw.cloud/bmwweb/cosySec?COSY-EU-100-2545xM4RIyFnbm9Mb3AgyyIJrjG0suyJRBODlsrjGpua8rQbhSIqppglBgbRGal384MlficYiGHqoQxYLW7%25f3tiJ0PCJirQbLDWcQW7%251uSDUqoQh47wMvcYi9M%25bgMb3islBglUb6%25cRScH8Z4MbnMdoPEyJGy5BRbrQ%25r9YEUW8zWunUUqogqaGQQl3ilU%2540cRScHz8oMbnMdgHOyJGy5ieSrQ%25r9SQHW8zWun87qogqaGhqogqaDJKl3ilUCQIcRScH4%25fMbnMdJmSyJGy5QinrQ%25r985RW8zWuo86qogqa3s7l3ilURKdcRScH715MbnMdgC0yJGy5QJlrQ%25r98BYW8zWun9rqogqa3oyl3ilUj7mcRScH78gMbnMdezJyJGy5iRarQ%25r9SDGW8JYHltW7%25ZnjTW8JuzM8nq0z6Fboy6oEd82"
                        alt="BMW Z4 Roadster" style="width: 100%; height: auto;">
                    <h5 style="font-size: 16px; font-weight: 500; margin-top: 12px;">BMW iX</h5>
                    <p style="margin: 4px 0; color: #666;">Full Electric</p>
                    <p style="font-weight: bold; margin: 0;">
                        Start From <span style="color: black;">Rp2.545.000.000</span>
                        <span style="font-size: 14px;">&#9432;</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endsection
</body>
</html>
