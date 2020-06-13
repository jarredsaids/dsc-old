<html>
<head>
    <link rel="stylesheet" type="text/css" href="resources/index.css">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <script>
        function clickHowTo() {
            document.getElementById("how-to").style.display = "block";
            document.getElementById("example").style.display = "none";
            document.getElementById("choose-dsa").style.display = "none";
            document.getElementById("bgimage").style.display = "none";
        }

        function clickBlank() {
            document.getElementById("how-to").style.display = "none";
            document.getElementById("example").style.display = "none";
            document.getElementById("choose-dsa").style.display = "block";
            document.getElementById("bgimage").style.display = "none";
        }

        function clickExample() {
            document.getElementById("how-to").style.display = "none";
            document.getElementById("example").style.display = "block";
            document.getElementById("choose-dsa").style.display = "none";
            document.getElementById("bgimage").style.display = "none";
        }
    </script>
</head>
<body>
<div id="container">
    <table style="width:100%">
        <tr>
            <td align="left">
                <a href="candidates.php"><i class="fas fa-arrow-alt-circle-left"></i></a>
            </td>
            <td align="center"><h1 style="color: green;">DSA Packets</h1></td>
            <td align="right">
                <a href="index.php"><i class="fas fa-home"></i></a>
            </td>
        </tr>
    </table>

    <hr>

    <!--The list of pickable options-->
    <table class="side-choose">
        <tr class="side-choose-tr">
            <td class="side-choose-td-left">

                <button class="selection-button" onclick="clickHowTo()"> DSA Packet How-To</button>

                <button class="selection-button" onclick="clickExample()"> Example DSA Packet</button>

                <button class="selection-button" onclick="clickBlank()"> Blank Packet Forms</button>


            </td>
            <td class="side-choose-td-right">
                <div>
                    <img id="bgimage" src="resources\images\academy.jpg" alt="DS Academnt Statue">
                </div>
                <iframe id="how-to"
                        src="https://onedrive.live.com/embed?cid=AA24791B37FFDDAC&resid=AA24791B37FFDDAC%219256&authkey=AIkKRSS5vIgKBCA&em=2"
                        width="100%" height="592px" frameborder="0" scrolling="no" style="display: none;"></iframe>

                <iframe id="example"
                        src="https://onedrive.live.com/embed?cid=AA24791B37FFDDAC&resid=AA24791B37FFDDAC%215242&authkey=ANcoSE-EcGexYGo&em=2"
                        width="100%" height="592px" frameborder="0" scrolling="no" style="display: none;"></iframe>

                <!--The list of pickable options-->
                <div id="choose-dsa" style="display: none;">
                    <div class="selection">
                        <a href="dsc_files/documents/DRILL SERGEANT PACKET CHECKLIST Fillable.pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> DS Packet Checklist</div>
                        </a>
                    </div> <!--selection-->

                    <div class="selection">
                        <a href="dsc_files/documents/USADSA Commanders Checklist.pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> USADSA Commanders Checklist</div>
                        </a>
                    </div> <!--selection-->

                    <div class="selection">
                        <a href="dsc_files/documents/DA Form 3822 Mental Health Eval.pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> DA 3822 Mental Health Eval</div>
                        </a>
                    </div> <!--selection-->

                    <div class="selection">
                        <a href="dsc_files/documents/da-7424-sensitive-duty.pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> DA 7424 Sensitive Duty</div>
                        </a>
                    </div> <!--selection-->
                    <div class="selection">
                        <a href="dsc_files/documents/DSC Initial Counseling.pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> DSC Initial Counseling</div>
                        </a>
                    </div> <!--selection-->

                    <div class="selection">
                        <a href="dsc_files/documents/dd2870 Authorization for MED DENT INF.pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> DD 2870 AUTH for MED DENT</div>
                        </a>
                    </div> <!--selection-->

                    <div class="selection">
                        <a href="dsc_files/documents/CDRS OCIE Example Memo.docx" target="_blank"> <img
                                class="selection-image" src="resources\images\docx.png" alt="statistics">
                            <div class="selection-title"> CDRS OCIE Example Memo</div>
                        </a>
                    </div> <!--selection-->

                </div> <!--choose-->
            </td>
    </table>

</div> <!--container-->
</body>
</html>