<?php
    require_once("./modules/session_control.php");
    checkSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Custom styles -->
    <link href="./assets/css/second_page.css" rel="stylesheet">

    <title>Car mods</title>
</head>

<body>
    <header>
        <div>
            <img src="./assets/images/logo.png" class="logo" alt="logo">
            <a href="./modules/logout.php" class="text-end">Logout</a>
        </div>
        <?= $_SESSION["email"] ?>
    </header>

    <main>
        <div class="center">
            <div class="items">
                <h2 class="mb-4 text-center">Latest updates cars</h2>
                <div class="item">
                    <a href="mods/auto/maserati-tipo-61-birdcage.html">
                        <img src="./assets/images/1.jpg" alt="Maserati Tipo 61 Birdcage">
                    </a>
                    <div>
                        <h4><a href="mods/auto/maserati-tipo-61-birdcage.html">Maserati Tipo 61 Birdcage</a></h4>
                        <p>Version from Race Department</p>
                    </div>
                    <div>
                        <ul>
                            <li>600kg</li>
                            <li>254HP</li>
                            <li>324Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/ligier-js8.html">
                        <img src="./assets/images/2.jpg" alt="Ligier JS8">
                    </a>
                    <div>
                        <h4><a href="mods/auto/ligier-js8.html">Ligier JS8</a></h4>
                        <p>Version from Race Department</p>
                    </div>
                    <div>
                        <ul>
                            <li>150kg</li>
                            <li>7.5HP</li>
                            <li>10.8Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/williams-fw19-1997-vrc.html">
                        <img src="./assets/images/3.jpg" alt="Williams FW19 1997 VRC">
                    </a>
                    <div>
                        <h4><a href="mods/auto/williams-fw19-1997-vrc.html">Williams FW19 1997 VRC</a></h4>
                        <p>Version from Race Department</p>
                    </div>
                    <div>
                        <ul>
                            <li>525kg</li>
                            <li>755HP</li>
                            <li>342Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/ferrari-f310b-1997-vrc.html">
                        <img src="./assets/images/4.jpg" alt="Ferrari F310B 1997 VRC">
                    </a>
                    <div>
                        <h4><a href="mods/auto/ferrari-f310b-1997-vrc.html">Ferrari F310B 1997 VRC</a></h4>
                        <p>Version from Race Department</p>
                    </div>
                    <div>
                        <ul>
                            <li>525kg</li>
                            <li>743HP</li>
                            <li>344Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/austin-mini-cooper-s-fia-appk-spec.html">
                        <img src="./assets/images/5.jpg" alt="Austin Mini Cooper S Fia App.K Spec">
                    </a>
                    <div>
                        <h4><a href="mods/auto/austin-mini-cooper-s-fia-appk-spec.html">Austin Mini Cooper S Fia App.K
                                Spec</a></h4>
                        <p>Version from Race Department</p>
                    </div>
                    <div>
                        <ul>
                            <li>620kg</li>
                            <li>120HP</li>
                            <li>152Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/subaru-impreza-wrx-sti.html">
                        <img src="./assets/images/6.jpg" alt="Subaru Impreza WRX STi GRB">
                    </a>
                    <div>
                        <h4><a href="mods/auto/subaru-impreza-wrx-sti.html">Subaru Impreza WRX STi GRB</a></h4>
                        <p>Version 1.2</p>
                    </div>
                    <div>
                        <ul>
                            <li>1480kg</li>
                            <li>308HP</li>
                            <li>422Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/nissan-skyline-r31.html">
                        <img src="./assets/images/7.jpg" alt="Nissan Skyline R31">
                    </a>
                    <div>
                        <h4><a href="mods/auto/nissan-skyline-r31.html">Nissan Skyline R31</a></h4>
                        <p>Version 1.1</p>
                    </div>
                    <div>
                        <li>1300kg</li>
                        <li>374HP</li>
                        <li>364Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/nissan-silvia-s15-mitasu-sp.html">
                        <img src="./assets/images/8.jpg" alt="Nissan Silvia S15 Mitasu sp">
                    </a>
                    <div>
                        <h4><a href="mods/auto/nissan-silvia-s15-mitasu-sp.html">Nissan Silvia S15 Mitasu sp</a></h4>
                        <p>Version 1.3</p>
                    </div>
                    <div>
                        <ul>
                            <li>1212kg</li>
                            <li>321HP</li>
                            <li>390Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/nissan-sileighty-rps13.html">
                        <img src="./assets/images/9.jpg" alt="Nissan Sileighty RPS13">
                    </a>
                    <div>
                        <h4><a href="mods/auto/nissan-sileighty-rps13.html">Nissan Sileighty RPS13</a></h4>
                        <p>Version 1.13</p>
                    </div>
                    <div>
                        <ul>
                            <li>1184kg</li>
                            <li>356HP</li>
                            <li>402Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/mitsubishi-lancer-evolution-viii-mr.html">
                        <img src="./assets/images/10.jpg" alt="Mitsubishi Lancer Evolution VIII MR">
                    </a>
                    <div>
                        <h4><a href="mods/auto/mitsubishi-lancer-evolution-viii-mr.html">Mitsubishi Lancer Evolution
                                VIII MR</a></h4>
                        <p>Version </p>
                    </div>
                    <div>
                        <li>1455kg</li>
                        <li>276HP</li>
                        <li>374Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/mitsubishi-lancer-evolution-vi.html">
                        <img src="./assets/images/11.jpg" alt="Mitsubishi Lancer Evolution VI">
                    </a>
                    <div>
                        <h4><a href="mods/auto/mitsubishi-lancer-evolution-vi.html">Mitsubishi Lancer Evolution VI</a>
                        </h4>
                        <p>Version 1.1</p>
                    </div>
                    <div>
                        <ul>
                            <li>1350kg</li>
                            <li>308HP</li>
                            <li>375Nm</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <a href="mods/auto/dodge-charger-rt-1969.html">
                        <img src="./assets/images/12.jpg" alt="Dodge Charger R/T 1969">
                    </a>
                    <div>
                        <h4><a href="mods/auto/dodge-charger-rt-1969.html">Dodge Charger R/T 1969</a></h4>
                        <p>Version 1.4 (04.06.19)</p>
                    </div>
                    <div>
                        <ul>
                            <li>1700kg</li>
                            <li>357-425HP</li>
                            <li>629-664Nm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021 Copyrigth Simracing</p>
    </footer>
</body>

</html>