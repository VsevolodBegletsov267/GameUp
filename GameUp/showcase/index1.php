<?php
session_start();
$mysql = new mysqli('localhost', 'root', '1029384756Seva', 'gameup');
$mysql->query("CREATE TABLE IF NOT EXISTS `products`(`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `price` INT(16) NOT NULL , PRIMARY KEY (`id`))")
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
    <button id="headbut"><img src="user.png" alt="аккаунт" id="icon"></button>
    <button id="headbut"><img src="basket.png" alt="корзина" id="icon"></button>
    <div id="slogan">Лучшее для лучших!</div>
</div>
<div id="content">
    <div id="special">Специальные предложения!</div>
    <table id="tr1">
        <tr>
            <td id="sales">Блок</td>
            <td id="sales">Блок 2</td>
            <td id="sales">Блок 3</td>
            <td id="sales">Блок 4</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <form  action="../items/Mid_1.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Razer%20Basilisk%20V3.jpg">
                    </button>
                       <a href="../items/Mid_1.html"> <?php echo $name="Razer Basilisk V3"."<br>";
                        echo $price=5100 . ' руб.';
                        ?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Mid_2.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/HyperX%20Pulsefire%20Surge.jpg">
                    </button>
                       <a href="../items/Mid_2.html"><?php echo $name="HyperX Pulsefire Surge"."<br>";
                        echo $price=2969 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Mid_3.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/SteelSeries.jpg">
                    </button>
                        <a href="../items/Mid_3.html"><?php echo $name="SteelSeries Rival 5"."<br>";
                            echo $price=4380 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Kid_4.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Razer%20Ornata%20V2.jpg">
                    </button>
                    <a href="../items/Kid_4.html"><?php echo $name="Razer Ornata V2"."<br>";
                        echo $price=6999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Kid_5.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/ASUS%20TUF%20Gaming%20K7.png">
                    </button>
                    <a href="../items/Kid_5.html"> <?php echo $name="ASUS TUF Gaming K7"."<br>";
                    echo $price=10999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Kid_6.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/HyperX%20Alloy%20Origins%20Core.jpg">
                    </button>
                    <a href="../items/Kid_6.html"> <?php echo $name="HyperX Alloy Origins Core"."<br>";
                    echo $price=11999 . ' руб.';?></a>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form  action="../items/Hid_7.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/HyperX%20Cloud%20Alpha%20S.jpg"><br>
                    </button>
                    <a href="../items/Hid_7.html"> <?php echo $name="HyperX Cloud Alpha S"."<br>";
                    echo $price=8079 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Hid_8.html">
                    <button id="goodbut" >
                        <img id="goodimg" src="Goodimage/Logitech%20G%20Pro%20X.jpg">
                    </button>
                    <a href="../items/Hid_8.html"> <?php echo $name="Logitech G Pro X"."<br>";
                        echo $price=9600 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Hid_9.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Razer%20Blackshark%20V2%20X.jpg"><br>
                    </button>
                    <a href="../items/Hid_9.html"><?php echo $name="Razer Blackshark V2 X"."<br>";
                    echo $price=4950 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Mnid_10.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Samsung%20Odyssey%20G7.jpg">
                    </button>
                    <a href="../items/Mnid_10.html"> <?php echo $name="Samsung Odyssey G7"."<br>";
                    echo $price=49999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Mnid_11.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/MSI%20Oculux%20NXG253.jpg"><br>
                    </button>
                    <a href="../items/Mnid_11.html"><?php echo $name="MSI Oculux NXG253"."<br>";
                    echo $price=68999 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Mnid_12.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Huawei%20MateView%20GT.jpg">
                    </button>
                    <a href="../items/Mnid_12.html"> <?php echo $name="Huawei MateView GT"."<br>";
                    echo $price=29990 . ' руб.';?></a>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form  action="../items/Cid_13.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Microsoft Xbox Elite Wireless Controller Series 2.jpg">
                    </button>
                    <a href="../items/Cid_13.html"> <?php echo $name="Microsoft Xbox Elite Wireless Controller Series 2"."<br>";
                    echo $price=12889 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Cid_14.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Sony Dual Sense.jpg"><br>
                    </button>
                    <a href="../items/Cid_14.html"><?php echo $name="Sony Dual Sense"."<br>";
                    echo $price=5900 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Cid_15.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Sony DualShock 4 v2.jpg"><br>
                    </button>
                    <a href="../items/Cid_15.html"><?php echo $name="Sony DualShock 4 v2"."<br>";
                    echo $price=4990 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Chid_16.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/DXRacer OH_KS06_NO.jpg"><br>
                    </button>
                    <a href="../items/Chid_16.html"> <?php echo $name="DXRacer OH/KS06/NO"."<br>";
                    echo $price=39192 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Chid_17.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/COUGAR Rampart Orange.png">
                    </button>
                    <a href="../items/Chid_17.html"> <?php echo $name="COUGAR Rampart Orange"."<br>";
                    echo $price=24990 . ' руб.';?></a>
                </form>
            </td>
            <td>
                <form  action="../items/Chid_18.html">
                    <button id="goodbut">
                        <img id="goodimg" src="Goodimage/Defender Pilot.jpg">
                    </button>
                    <a href="../items/Chid_18.html"> <?php echo $name="Defender Pilot"."<br>";
                    echo $price=10960 . ' руб.';?></a>
                </form>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
