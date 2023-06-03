<?php
session_start();

?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>GameUp!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header">
    <image id="logo" src="logo.jpg"></image>
    GameUp!
    <form action="../items/cart.php">
    <button id="headbut"><img src="basket.png" alt="корзина" id="icon"></button>
    </form>
    <div id="slogan">Лучшее для лучших!</div>
</div>
<div id="content">
    <table>
        <tr>
            <td>
                <form  action="../items/1.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Razer%20Basilisk%20V3.jpg">
                    </button>
                       <a href="../items/1.php"> <?php echo $name="Razer Basilisk V3"."<br>";
                        echo $price=5100 . ' руб.';
                        ?></a>
                </form>
            </td>
            <td>
                <form  action="../items/2.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/HyperX%20Pulsefire%20Surge.jpg">
                    </button>
                       <a href="../items/2.php"><?php echo $name="HyperX Pulsefire Surge"."<br>";
                        echo $price=2969 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/3.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/SteelSeries.jpg">
                    </button>
                        <a href="../items/3.php"><?php echo $name="SteelSeries Rival 5"."<br>";
                            echo $price=4380 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/4.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Razer%20Ornata%20V2.jpg">
                    </button>
                    <a href="../items/4.php"><?php echo $name="Razer Ornata V2"."<br>";
                        echo $price=6999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/5.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/ASUS%20TUF%20Gaming%20K7.png">
                    </button>
                    <a href="../items/5.php"> <?php echo $name="ASUS TUF Gaming K7"."<br>";
                    echo $price=10999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/6.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/HyperX%20Alloy%20Origins%20Core.jpg">
                    </button>
                    <a href="../items/6.php"> <?php echo $name="HyperX Alloy Origins Core"."<br>";
                    echo $price=11999 . ' руб.';?></a>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form  action="../items/7.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/HyperX%20Cloud%20Alpha%20S.jpg"><br>
                    </button>
                    <a href="../items/7.php"> <?php echo $name="HyperX Cloud Alpha S"."<br>";
                    echo $price=8079 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/8.php">
                    <button id="goodbut" >
                        <img id="goodimg" src="Goodimage/Logitech%20G%20Pro%20X.jpg">
                    </button>
                    <a href="../items/8.php"> <?php echo $name="Logitech G Pro X"."<br>";
                        echo $price=9600 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/9.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Razer%20Blackshark%20V2%20X.jpg"><br>
                    </button>
                    <a href="../items/9.php"><?php echo $name="Razer Blackshark V2 X"."<br>";
                    echo $price=4950 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/10.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Samsung%20Odyssey%20G7.jpg">
                    </button>
                    <a href="../items/10.php"> <?php echo $name="Samsung Odyssey G7"."<br>";
                    echo $price=49999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/11.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/MSI%20Oculux%20NXG253.jpg"><br>
                    </button>
                    <a href="../items/11.php"><?php echo $name="MSI Oculux NXG253"."<br>";
                    echo $price=68999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/12.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Huawei%20MateView%20GT.jpg">
                    </button>
                    <a href="../items/12.php"> <?php echo $name="Huawei MateView GT"."<br>";
                    echo $price=29990 . ' руб.';?></a>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form  action="../items/13.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Microsoft Xbox Elite Wireless Controller Series 2.jpg">
                    </button>
                    <a href="../items/13.php"> <?php echo $name="Microsoft Xbox Elite Wireless Controller Series 2"."<br>";
                    echo $price=12889 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/14.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Sony Dual Sense.jpg"><br>
                    </button>
                    <a href="../items/14.php"><?php echo $name="Sony Dual Sense"."<br>";
                    echo $price=5900 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/15.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Sony DualShock 4 v2.jpg"><br>
                    </button>
                    <a href="../items/15.php"><?php echo $name="Sony DualShock 4 v2"."<br>";
                    echo $price=4990 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/16.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/DXRacer OH_KS06_NO.jpg"><br>
                    </button>
                    <a href="../items/16.php"> <?php echo $name="DXRacer OH/KS06/NO"."<br>";
                    echo $price=39192 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/17.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/COUGAR Rampart Orange.png">
                    </button>
                    <a href="../items/17.php"> <?php echo $name="COUGAR Rampart Orange"."<br>";
                    echo $price=24990 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/18.php">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Defender Pilot.jpg">
                    </button>
                    <a href="../items/18.php"> <?php echo $name="Defender Pilot"."<br>";
                    echo $price=10960 . ' руб.';?></a>
                </form>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
