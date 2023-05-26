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
                <img id="goodimg" src="Goodimage/Razer%20Ornata%20V2.jpg">
                <?php echo $name="Razer Ornata V2"."<br>";
                echo $price=6999 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/ASUS%20TUF%20Gaming%20K7.png">
                <?php echo $name="ASUS TUF Gaming K7"."<br>";
                echo $price=10999 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/HyperX%20Alloy%20Origins%20Core.jpg">
                <?php echo $name="HyperX Alloy Origins Core"."<br>";
                echo $price=11999 . ' руб.';?>
            </td>
        </tr>
        <tr>
            <td>
                <img id="goodimg" src="Goodimage/HyperX%20Cloud%20Alpha%20S.jpg"><br>
                <?php echo $name="HyperX Cloud Alpha S"."<br>";
                echo $price=8079 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/Logitech%20G%20Pro%20X.jpg">
                <?php echo $name="Logitech G Pro X"."<br>";
                echo $price=9600 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/Razer%20Blackshark%20V2%20X.jpg">
                <?php echo $name="Razer Blackshark V2 X"."<br>";
                echo $price=4950 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/Samsung%20Odyssey%20G7.jpg">
                <?php echo $name="Samsung Odyssey G7"."<br>";
                echo $price=49999 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/MSI%20Oculux%20NXG253.jpg">
                <?php echo $name="MSI Oculux NXG253"."<br>";
                echo $price=68999 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/Huawei%20MateView%20GT.jpg">
                <?php echo $name="Huawei MateView GT"."<br>";
                echo $price=29990 . ' руб.';?>
            </td>
        </tr>
        <tr>
            <td>
                <img id="goodimg" src="Goodimage/Microsoft Xbox Elite Wireless Controller Series 2.jpg">
                <?php echo $name="Microsoft Xbox Elite Wireless Controller Series 2"."<br>";
                echo $price=12889 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/Sony Dual Sense.jpg"><br>
                <?php echo $name="Sony Dual Sense"."<br>";
                echo $price=5900 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/Sony DualShock 4 v2.jpg"><br>
                <?php echo $name="Sony DualShock 4 v2"."<br>";
                echo $price=4990 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/DXRacer OH_KS06_NO.jpg">
                <?php echo $name="DXRacer OH/KS06/NO"."<br>";
                echo $price=39192 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/COUGAR Rampart Orange.png">
                <?php echo $name="COUGAR Rampart Orange"."<br>";
                echo $price=24990 . ' руб.';?>
            </td>
            <td>
                <img id="goodimg" src="Goodimage/Defender Pilot.jpg">
                <?php echo $name="Defender Pilot"."<br>";
                echo $price=10960 . ' руб.';?>
            </td>
        </tr>
    </table>

</div>
</body>
</html>