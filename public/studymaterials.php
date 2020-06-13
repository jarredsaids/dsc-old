<html>
<head>
    <link rel="stylesheet" type="text/css" href="resources/index.css">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <script>
        function clickGrading() {
            document.getElementById("grading-sheets").style.display = "block";
            document.getElementById("training-videos").style.display = "none";
            document.getElementById("bgimage").style.display = "none";
            document.getElementById("external-links").style.display = "none";
        }

        function clickBlank() {
            document.getElementById("grading-sheets").style.display = "none";
            document.getElementById("training-videos").style.display = "none";
            document.getElementById("bgimage").style.display = "none";
            document.getElementById("external-links").style.display = "none";
        }

        function clickVideos() {
            document.getElementById("grading-sheets").style.display = "none";
            document.getElementById("training-videos").style.display = "block";
            document.getElementById("bgimage").style.display = "none";
            document.getElementById("external-links").style.display = "none";
        }

        function clickLinks() {
            document.getElementById("grading-sheets").style.display = "none";
            document.getElementById("training-videos").style.display = "none";
            document.getElementById("bgimage").style.display = "none";
            document.getElementById("external-links").style.display = "block";
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
            <td align="center"><h1 style="color: green;">Study Materials</h1></td>
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

                <button class="selection-button" onclick="clickGrading()">Grading Sheets</button>

                <button class="selection-button" onclick="clickVideos()"> Module Training Videos</button>

                <button class="selection-button" onclick="clickHowTo()"> Reference Material</button>

                <button class="selection-button" onclick="clickLinks()"> External Links</button>
            </td>
            <td class="side-choose-td-right">
                <div>
                    <img id="bgimage" src="resources\images\DSLs.jpg" alt="DS Academnt Statue">
                </div>

                <!--Grading Sheets-->
                <div id="grading-sheets" style="display: none;">
                    <div class="selection">
                        <a href="dsc_files/grade_sheets/Grade Sheet (Position of Attention).pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> Position of Attention</div>
                        </a>
                    </div> <!--selection-->

                    <div class="selection">
                        <a href="dsc_files/grade_sheets/Grade Sheet (Rest Positions at the Halt).pdf" target="_blank">
                            <img class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> Rest Positions</div>
                        </a>
                    </div> <!--selection-->

                    <div class="selection">
                        <a href="dsc_files/grade_sheets/Grade Sheet (Hand Salute).pdf" target="_blank"> <img
                                class="selection-image" src="resources\images\pdf.jpg" alt="statistics">
                            <div class="selection-title"> Hand Salute</div>
                        </a>
                    </div> <!--selection-->
                </div> <!--grading-sheets-->

                <!--The list of pickable options-->
                <div id="external-links" style="display: none;">
                    <div class="selection-container">
                        <div class="selection-with-description">
                            <a href="https://www.milsuite.mil/book/groups/usadsa" target="_blank"> <img
                                    class="selection-image" src="resources\images\milsuite.png"
                                    alt="DS Academy MilSuite Link">
                                <div class="selection-title"> MilSuite DS Academy Site</div>
                            </a>
                        </div> <!--selection-->
                        <p>The official Drill Sergeant Academy Site with everything you need to study and prepare for
                            school. (CAC login)</p>
                    </div><!--selection-container-->

                    <div class="selection-container">
                        <div class="selection-with-description">
                            <a href="https://www.the98thdrillsergeant.com/" target="_blank"> <img
                                    class="selection-image" src="resources\images\98th.png" alt="98th DIV Site Link">
                                <div class="selection-title"> 98th DIV Site</div>
                            </a>
                        </div> <!--selection-->
                        <p>The official 98th DIV Site with helpful links & tools for the DSCPP. SFC Watson is on the
                            About-US page. (CAC login)</p>
                    </div><!--selection-container-->

                    <div class="selection-container">
                        <div class="selection-with-description">
                            <a href="https://www.army.mil/drillsergeant/index.html" target="_blank"> <img
                                    class="selection-image" src="resources\images\usa_drill.png"
                                    alt="US Army DS Site Link">
                                <div class="selection-title"> Army.mil DS Site</div>
                            </a>
                        </div> <!--selection-->
                        <p>Army.mil Drill Sergeant Site with news, stories, media, DS Creed and the history of the Drill
                            Sergeant.</p>
                    </div><!--selection-container-->

                </div><!--external-links-->

                <script>
                    function clickModsSet1() {
                        document.getElementById("training-videos").style.display = "none";
                        document.getElementById("mods-set1").style.display = "block";
                        document.getElementById("prep-drill").style.display = "none";
                        document.getElementById("4core").style.display = "none";
                        document.getElementById("hip-drill").style.display = "none";
                        document.getElementById("mmd1").style.display = "none";
                        document.getElementById("mmd2").style.display = "none";
                        document.getElementById("cd1").style.display = "none";
                        document.getElementById("cd2").style.display = "none";
                        document.getElementById("climb1").style.display = "none";
                        document.getElementById("climb2").style.display = "none";
                    }

                    function clickPrepDrill() {
                        document.getElementById("training-videos").style.display = "none";
                        document.getElementById("mods-set1").style.display = "none";
                        document.getElementById("prep-drill").style.display = "block";
                        document.getElementById("4core").style.display = "none";
                        document.getElementById("hip-drill").style.display = "none";
                        document.getElementById("mmd1").style.display = "none";
                        document.getElementById("mmd2").style.display = "none";
                        document.getElementById("cd1").style.display = "none";
                        document.getElementById("cd2").style.display = "none";
                        document.getElementById("climb1").style.display = "none";
                        document.getElementById("climb2").style.display = "none";
                    }

                    function click4core() {
                        document.getElementById("training-videos").style.display = "none";
                        document.getElementById("mods-set1").style.display = "none";
                        document.getElementById("prep-drill").style.display = "none";
                        document.getElementById("4core").style.display = "block";
                        document.getElementById("hip-drill").style.display = "none";
                        document.getElementById("mmd1").style.display = "none";
                        document.getElementById("mmd2").style.display = "none";
                        document.getElementById("cd1").style.display = "none";
                        document.getElementById("cd2").style.display = "none";
                        document.getElementById("climb1").style.display = "none";
                        document.getElementById("climb2").style.display = "none";
                    }

                </script>


                <div id="training-videos" style="display: none;">
                    <div id="choose">
                        <div class="selection" onclick="clickModsSet1()">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Modules Set 1</div>
                        </div> <!--selection-->

                        <div class="selection" onclick="clickPrepDrill()">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Preparation Drill</div>
                        </div> <!--selection-->

                        <div class="selection" onclick="click4core()">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Four for the Core</div>
                        </div> <!--selection-->
                        <!---------------------------------------------------------------------------------------------------->
                        <div class="selection">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Hip Stability Drill</div>
                        </div> <!--selection-->

                        <div class="selection">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Military Movement Drill 1</div>
                        </div> <!--selection-->

                        <div class="selection">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Military Movement Drill 2</div>
                        </div> <!--selection-->

                        <div class="selection">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Conditioning Drill 1</div>
                        </div> <!--selection-->

                        <div class="selection">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Conditioning Drill 2</div>
                        </div> <!--selection-->
                        <div class="selection">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Climbing Drill 1</div>
                        </div> <!--selection-->

                        <div class="selection">
                            <img class="selection-image" src="resources\images\modules.jpg" alt="statistics">
                            <div class="selection-title"> Climbing Drill 2</div>
                        </div> <!--selection-->


                    </div> <!--choose-->


                </div> <!--training-videos-->
                <!--
                    Section for the first 3 D&C Modules
                -->
                <div id="mods-set1" style="display: none;">
                    <script>
                        function clickAttention() {
                            document.getElementById("mod1-frame").src = "https://www.youtube.com/embed/zz-En70UMj8";
                        }

                        function clickRestPositions() {
                            document.getElementById("mod1-frame").src = "https://www.youtube.com/embed/VFczGSL7Br4";
                        }

                        function clickHandSalute() {
                            document.getElementById("mod1-frame").src = "https://www.youtube.com/embed/VOQu1RUqOsw";
                        }
                    </script>
                    <iframe class="module-frame" id="mod1-frame" width="420" height="345"></iframe>

                    <hr>
                    <button class="selection-button2" onclick="clickAttention()">Position of Attention</button>
                    <button class="selection-button2" onclick="clickRestPositions()"> Rest Positions at the Halt
                    </button>
                    <button class="selection-button2" onclick="clickHandSalute()"> Hand Salute</button>

                </div><!--choose-mods-set1-->


                <!--
                    Section for the Preparation Drill Modules
                -->
                <div id="prep-drill" style="display: none;">
                    <script>
                        function clickBendAndReach() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/4yofbopcNG8";
                        }

                        function clickRearLunge() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/Q3YP6QfKjl8";
                        }

                        function clickHighJumper() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/QNqFDb6-2TE";
                        }

                        function clickRower() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/MoKVKxRYXww";
                        }

                        function clickSquatBender() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/EeTNzHSusMA";
                        }

                        function clickWindmill() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/tpES5iqWonI";
                        }

                        function clickForwardLunge() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/c6OXa8ma-0o";
                        }

                        function clickProneRow() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/apV88sJ-Rtc";
                        }

                        function clickBLBT() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/tpwhqrVtU6I";
                        }

                        function clickPushUp() {
                            document.getElementById("prep-frame").src = "https://www.youtube.com/embed/cOuJsxE4N_4";
                        }

                    </script>
                    <iframe class="module-frame" id="prep-frame" width="420" height="345"></iframe>

                    <hr>
                    <button class="selection-button2" onclick="clickBendAndReach()">Bend and Reach</button>
                    <button class="selection-button2" onclick="clickRearLunge()">Rear Lunge</button>
                    <button class="selection-button2" onclick="clickHighJumper()">High Jumper</button>
                    <button class="selection-button2" onclick="clickRower()">Rower</button>
                    <button class="selection-button2" onclick="clickSquatBender()">Squat Bender</button>
                    <button class="selection-button2" onclick="clickWindmill()">Windmill</button>
                    <button class="selection-button2" onclick="clickForwardLunge()">Forward Lunge</button>
                    <button class="selection-button2" onclick="clickProneRow()">Prone Row</button>
                    <button class="selection-button2" onclick="clickBLBT()">Bent Leg Body Twist</button>
                    <button class="selection-button2" onclick="clickPushUp()">Push Up</button>

                </div><!--choose-mods-set1-->

                <!--
                        Section for the first 4 for the Core Modules
                    -->
                <div id="4core" style="display: none;">
                    <script>
                        function clickAttention() {
                            document.getElementById("mod1-frame").src = "https://www.youtube.com/embed/zz-En70UMj8";
                        }

                        function clickRestPositions() {
                            document.getElementById("mod1-frame").src = "https://www.youtube.com/embed/VFczGSL7Br4";
                        }

                        function clickHandSalute() {
                            document.getElementById("mod1-frame").src = "https://www.youtube.com/embed/VOQu1RUqOsw";
                        }

                        function clickHandSalute() {
                            document.getElementById("mod1-frame").src = "https://www.youtube.com/embed/VOQu1RUqOsw";
                        }
                    </script>
                    <iframe class="module-frame" id="mod1-frame" width="420" height="345"></iframe>

                    <hr>
                    <button class="selection-button2" onclick="clickAttention()">Position of Attention</button>
                    <button class="selection-button2" onclick="clickRestPositions()"> Rest Positions at the Halt
                    </button>
                    <button class="selection-button2" onclick="clickHandSalute()"> Hand Salute</button>
                    <button class="selection-button2" onclick="clickHandSalute()"> Hand Salute</button>

                </div><!--choose-mods-set1-->


            </td>
    </table>

</div> <!--container-->
</body>
</html>