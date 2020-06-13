<html>
<head>
    <link rel="stylesheet" type="text/css" href="resources/dsc_viewer.css">
    <script type="text/javascript" src="resources/dsc_viewer.js"></script>
</head>
<body>
<div id="container">
<?php
/*
	@Title DSC_Viewer.PHP
	@Author David M. Turner
	@Date 13FEB2020
	
	This will take the data from the DSC Tracker CSV file and create an array of objects
	with each DS Candidate's information.  It is then available to be processed for display
	on the webpage intermixed with HTML.
*/


//*******CLASS DEFINITIONS

class Candidate
{
    var $candidateLastName;            //Candidate's last name
    var $candidateFirstName;        //Candidate's first name
    var $candidateRank;                //Candidate's rank
    var $candidateSex;                //Candidate's sex (male/female)
    var $mentorLastName;            //Candidate's mentor's last name
    var $mentorRank;                //Candidate's mentor's rank
    var $seniorLastName;            //Candidate's Senior DS's last name
    var $seniorRank;                //Candidate's Senior DS's rank
    var $dateAssigned;                //Date Candidate was assigned to the unit
    var $dsaDate;                    //Projected/Actual DS Academy school date
    var $lastAPFT;                    //Date of last Record APFT
    var $bhAppt;                    //Behavior Health Appointment date
    var $qualDate;                    //Rifle Qualification Date
    var $rfoDate;                    //date RFO submitted
    var $ordersReceived;            //DS Academy orders recived (YES/NO/'n/a')
    var $dtsCreated;                //DS Academy DTS Authorization created (YES/NO/'n/a')
    var $dtsApproved;                //DTS Authorization Aprroved (YES/NO/'n/a')
    var $firstThree;                //Moduals: Attention, Rest Positions, Hand Salute (GO/NO-GO/'n/a')
    var $prt;                        //Can pitch and conduct PRT;
    var $twoClasses;                //Teach two soldier skill Lvl. 1 classes (GO/NO-GO/'n/a')
    var $voiceCommands;                //Voice Command Exercises (GO/NO-GO/'n/a')
    var $dAndC;                        //Drill and Ceremony (GO/NO-GO/'n/a')
    var $creeds;                    //Drill Sergeant & Soldier Creeds (GO/NO-GO/'n/a')
    var $passedAPFTHW;                //Passed APFT & HT/WT (GO/NO-GO/'n/a')
    var $dsHistBadgeHat;            //DS History, Badge, Campaign/Bush Hat (GO/NO-GO/'n/a')
    var $riskManagement;            //Composite Risk Management Course (GO/NO-GO/'n/a')
    var $sensitiveDuty;                //Candidate Aquired Sensitive Duty (DA7424) (GO/NO-GO/'n/a')
    var $medRelease;                //Candidate Aquired Medical Release (DA2870) (GO/NO-GO/'n/a')
    var $asu;                        //Candidate Posses all ASU items (GO/NO-GO/'n/a')
    var $equipment;                    //Candidate Posses all equipment on school checklist (GO/NO-GO/'n/a')
    var $govtc;                        //Whatever COVTC is (GO/NO-GO/'n/a')
    var $mentalEval;                //Candidate passed mental Evaluation (DA 3822) (GO/NO-GO/'n/a')
    var $comments;                    //Any additional comments
    var $viable;                    //Are they a viable candidate (Yes/No)
    var $ready;                        //Are they ready to attend DSA (Yes/No)
    var $committed;                    //Have they picked a school date to attend DSA? (Yes/No)
    var $enrolled;                    //Have they been given a slot in a DSA class? (Yes/No)
    var $inSchool;                    //Are they currently attending DSA? (Yes/No)
    var $graduated;                    //Have they graduated DSA? (Yes/No)
    var $stillInProgram;                //Are they still in the unit as a DSC on the UMR? (Yes/No)

    //********Class Candidate getters and setters
    function setCandLastName($cln)
    {            //Candidate last name setter funtion
        $this->candidateLastName = $cln;
    }

    function getCandLastName()
    {                //Candidate last name getter funtion
        return $this->candidateLastName;
    }

    function setCandidateFirstName($cfn)
    {        //Candidate first name setter funtion
        $this->candidateFirstName = $cfn;
    }

    function getCandidateFirstName()
    {            //Candidate first name getter funtion
        return $this->candidateFirstName;
    }

    function setCandidateRank($cr)
    {            //Candidate rank setter funtion
        $this->candidateRank = $cr;
    }

    function getCandidateRank()
    {                //Candidate rank getter funtion
        return $this->candidateRank;
    }

    function setCandidateSex($cs)
    {                //Candidate sex setter funtion
        $this->candidateSex = $cs;
    }

    function getCandidateSex()
    {                //Candidate sex getter funtion
        return $this->candidateSex;
    }

    function setMentorLastName($mln)
    {            //Mentor's last name setter funtion
        $this->mentorLastName = $mln;
    }

    function getMentorLastName()
    {                //Mentor's last name getter funtion
        return $this->mentorLastName;
    }

    function setMentorRank($mr)
    {                //Mentor's rank setter funtion
        $this->mentorRank = $mr;
    }

    function getMentorRank()
    {                    //Mentor's rank getter funtion
        return $this->mentorRank;
    }

    function setSeniorLastName($sln)
    {            //Senior Drill Sergeant's last name setter funtion
        $this->seniorLastName = $sln;
    }

    function getSeniorLastName()
    {                //Senior Drill Sergeant's last name getter funtion
        return $this->seniorLastName;
    }

    function setSeniorRank($sr)
    {                //Senior Drill Sergeant's rank setter funtion
        $this->seniorRank = $sr;
    }

    function getSeniorRank()
    {                    //Senior Drill Sergeant's rank getter funtion
        return $this->seniorRank;
    }

    function setDateAssigned($da)
    {                //Date candidate was assigned to the untit setter funtion
        $this->dateAssigned = $da;
    }

    function getDateAssigned()
    {                //Date candidate was assigned to the untit getter funtion
        return $this->dateAssigned;
    }

    function setDSADate($dsad)
    {                //Projected or Actual DSA date setter funtion
        $this->dsaDate = $dsad;
    }

    function getDSADate()
    {                        //Projected or Actual DSA date getter funtion
        return $this->dsaDate;
    }

    function setLastAPFT($apftd)
    {                //Candidates last Record APFT date setter funtion
        $this->lastAPFT = $apftd;
    }

    function getLastAPFT()
    {                    //Candidates last Record APFT date getter funtion
        return $this->lastAPFT;
    }

    function setBHAppt($bha)
    {                    //Behavioral Health Date setter funtion
        $this->bhAppt = $bha;
    }

    function getBHAppt()
    {                        //Behavioral Health Date getter funtion
        return $this->bhAppt;
    }

    function setQualDate($qd)
    {                    //Last weapons qualification date setter funtion
        $this->qualDate = $qd;
    }

    function getQualDate()
    {                    //Last weapons qualification date getter funtion
        return $this->qualDate;
    }

    function setRFODate($rfo)
    {                    //RFO submission date setter funtion
        $this->rfoDate = $rfo;
    }

    function getRFODate()
    {                        //RFO submission date getter funtion
        return $this->rfoDate;
    }

    function setOrdersReceived($or)
    {            //Orders Received setter funtion
        $this->ordersReceived = $or;
    }

    function getOrdersReceived()
    {                //Orders Received getter funtion
        return $this->ordersReceived;
    }

    function setDTSCreated($dtsc)
    {                //DTS Authorization Created setter funtion
        $this->dtsCreated = $dtsc;
    }

    function getDTSCreated()
    {                    //DTS Authorization Created getter funtion
        return $this->dtsCreated;
    }

    function setDTSApproved($dtsa)
    {            //DTS Authorization Approved setter funtion
        $this->dtsApproved = $dtsa;
    }

    function getDTSApproved()
    {                    //DTS Authorization Approved getter funtion
        return $this->dtsApproved;
    }

    function setFirstThree($ft)
    {                //Can pitch First Three Moduals setter funtion
        $this->firstThree = $ft;
    }

    function getFirstThree()
    {                    //Can pitch First Three Moduals getter funtion
        return $this->firstThree;
    }

    function setTwoClasses($tc)
    {                //Taught Two Classes setter funtion
        $this->twoClasses = $tc;
    }

    function getTwoClasses()
    {                    //Taught Two Classes getter funtion
        return $this->twoClasses;
    }

    function setPRT($prt)
    {                        //PRT Proficiency setter funtion
        $this->prt = $prt;
    }

    function getPRT()
    {                            //PRT Proficiency getter funtion
        return $this->prt;
    }

    function setVoiceCommands($vc)
    {            //Voice Commands Exercises setter funtion
        $this->voiceCommands = $vc;
    }

    function getVoiceCommands()
    {                //Voice Commands Exercises getter funtion
        return $this->voiceCommands;
    }

    function setDAndC($dc)
    {                    //Drill & Ceremony setter funtion
        $this->dAndC = $dc;
    }

    function getDAndC()
    {                        //Drill & Ceremony getter funtion
        return $this->dAndC;
    }

    function setCreeds($c)
    {                        //Learned DS and Soldier Creeds setter funtion
        $this->creeds = $c;
    }

    function getCreeds()
    {                        //Learned DS and Soldier Creeds getter funtion
        return $this->creeds;
    }

    function setPassedAPFTHW($passed)
    {            //Passed APFT and HW setter funtion
        $this->passedAPFTHW = $passed;
    }

    function getPassedAPFTHW()
    {                //Passed APFT and HW getter funtion
        return $this->passedAPFTHW;
    }

    function setDSHistBadgeHat($hist)
    {            //DS History, Badge, Campaign/Bush Hat setter funtion
        $this->dsHistBadgeHat = $hist;
    }

    function getDSHistBadgeHat()
    {                //DS History, Badge, Campaign/Bush Hat getter funtion
        return $this->dsHistBadgeHat;
    }

    function setRiskManagement($risk)
    {            //Composit Risk Management setter funtion
        $this->riskManagement = $risk;
    }

    function getRiskManagement()
    {                //Composit Risk Management getter funtion
        return $this->riskManagement;
    }

    function setSensitiveDuty($sd)
    {            //Aquired Sensitive Duty (DA7424) setter funtion
        $this->sensitiveDuty = $sd;
    }

    function getSensitiveDuty()
    {                //Aquired Sensitive Duty (DA7424) getter funtion
        return $this->sensitiveDuty;
    }

    function setMedRelease($mr)
    {                //Aquired Medical Release (DA2870) setter funtion
        $this->medRelease = $mr;
    }

    function getMedRelease()
    {                    //Aquired Medical Release (DA2870) getter funtion
        return $this->medRelease;
    }

    function setASU($asu)
    {                        //Possess updated ASU's setter funtion
        $this->asu = $asu;
    }

    function getASU()
    {                            //Possess updated ASU's getter funtion
        return $this->asu;
    }

    function setEquipment($e)
    {                    //Posses all equipment on school checklist setter funtion
        $this->equipment = $e;
    }

    function getEquipment()
    {                    //Posses all equipment on school checklist getter funtion
        return $this->equipment;
    }

    function setGovtc($govtc)
    {                    //Government Travel Card setter funtion
        $this->govtc = $govtc;
    }

    function getGovtc()
    {                        //Government Travel Cardgetter funtion
        return $this->govtc;
    }

    function setMentalEval($me)
    {                //Mental Evaluation setter funtion
        $this->mentalEval = $me;
    }

    function getMentalEval()
    {                    //Mental Evaluation getter funtion
        return $this->mentalEval;
    }

    function setComments($c)
    {                    //Comments setter funtion
        $this->comments = $c;
    }

    function getComments()
    {                    //Comments getter funtion
        return $this->comments;
    }

    function setViable($v)
    {                    //Are they a viable candidate setter funtion
        $this->viable = $v;
    }

    function getViable()
    {                        //Are they a viable candidate getter funtion
        return $this->viable;
    }

    function setReady($r)
    {                        //Aquired Medical Release (DA2870) setter funtion
        $this->ready = $r;
    }

    function getReady()
    {                        //Are they ready to attend DSA getter funtion
        return $this->ready;
    }

    function setCommitted($c)
    {                    //Have they picked a school date to attend DSA? setter funtion
        $this->committed = $c;
    }

    function getCommitted()
    {                    //Have they picked a school date to attend DSA? getter funtion
        return $this->committed;
    }

    function setEnrolled($e)
    {                    //Have they been given a slot in a DSA class? setter funtion
        $this->enrolled = $e;
    }

    function getEnrolled()
    {                    //Have they been given a slot in a DSA class? getter funtion
        return $this->enrolled;
    }

    function setInSchool($s)
    {                    //Are they currently attending DSA? setter funtion
        $this->inSchool = $s;
    }

    function getInSchool()
    {                    //Are they currently attending DSA? getter funtion
        return $this->inSchool;
    }

    function setGraduated($g)
    {                    //Have they graduated DSA? (Yes/No)
        $this->graduated = $g;
    }

    function getGraduated()
    {                    //Have they graduated DSA? (Yes/No)
        return $this->graduated;
    }


    function setStillInProgram($sip)
    {            //Are they still in the unit as a DSC on the UMR? setter funtion
        $this->stillInProgram = $sip;
    }

    function getStillInProgram()
    {                //CAre they still in the unit as a DSC on the UMR? getter funtion
        return $this->stillInProgram;
    }
}

//*********function takes the input of GO/NO-GO/(other) and returns appropriate HTML to display
function greenOrRed($input)
{
    $html = '';                    //HTML code to return pointing to a certian image
    if ($input == "GO") {
        $html = '"dsc_files/photos/check_box.png" class = "table-image" alt ="check_box.png">';
    } else {
        if ($input = "NO-GO") {
            $html = '"dsc_files/photos/cross_box.png" class = "table-image" alt ="cross_box.png">';
        } else {
            $html = '"dsc_files/photos/na.png" class = "table-image" alt ="na.png">';
        }
    }
    return $html;
}


//**********Create an Object Array with the data from the DSC Tracker CVS file.

//******FILE VARIABLE DECLARATIONS - normally ./dsc_files...
$candidate_data = __DIR__ . '/dsc_files/Drill_Sergeant_Candidate_Data.csv';        //Place + Name of the CSV to read from [Drill Sergeant Candidate Data]

//*******Read what's already in the saved CSV file into an array

$file1 = fopen($candidate_data, "r");            //open the server CSV file as $file1
$cand_data_array = [];                            //array to store objects made from CSV entries
$line = [];                                        //holds the row read from the CSV file
$line2 = fgetcsv($file1);                        //moves past the csv header row

while (($line = fgetcsv($file1)) !== false) {    //iterates through the CSV file and stores into an array by $line
    array_push($cand_data_array, $line);        //store current line of CSV into $cand_data_array by $line
}
fclose($file1);                                    //closes CSV file

//*******Convert read CSV data into objects [Candidate]
$candidates_array = [];
$testImageLocation = "";
$header = true;
$i = 0;
$males = 0;
$females = 0;
$viables = 0;
$nonViables = 0;
$committed = 0;
$enrolled = 0;
$inSchool = 0;
$graduated = 0;
$stillInProgram = 0;
$nonViablesArray = [];

foreach ($cand_data_array as $data) {

    $candidate = new Candidate;

    $candidate->setCandLastName($data[0]);
    $candidate->setCandidateFirstName($data[1]);
    $candidate->setCandidateRank($data[2]);
    $candidate->setCandidateSex($data[3]);
    $candidate->setMentorLastName($data[4]);
    $candidate->setMentorRank($data[5]);
    $candidate->setSeniorLastName($data[6]);
    $candidate->setSeniorRank($data[7]);
    $candidate->setDateAssigned($data[8]);
    $candidate->setDSADate($data[9]);
    $candidate->setLastAPFT($data[10]);
    $candidate->setBHAppt($data[11]);
    $candidate->setQualDate($data[12]);
    $candidate->setRFODate($data[13]);
    $candidate->setOrdersReceived($data[14]);
    $candidate->setDTSCreated($data[15]);
    $candidate->setDTSApproved($data[16]);
    $candidate->setFirstThree($data[17]);
    $candidate->setPrt($data[18]);
    $candidate->setTwoClasses($data[19]);
    $candidate->setvoiceCommands($data[20]);
    $candidate->setDAndC($data[21]);
    $candidate->setCreeds($data[22]);
    $candidate->setPassedAPFTHW($data[23]);
    $candidate->setDSHistBadgeHat($data[24]);
    $candidate->setRiskManagement($data[25]);
    $candidate->setSensitiveDuty($data[26]);
    $candidate->setMedRelease($data[27]);
    $candidate->setASU($data[28]);
    $candidate->setEquipment($data[29]);
    $candidate->setGovtc($data[30]);
    $candidate->setMentalEval($data[31]);
    $candidate->setComments($data[32]);
    $candidate->setViable($data[33]);
    $candidate->setReady($data[34]);
    $candidate->setCommitted($data[35]);
    $candidate->setEnrolled($data[36]);
    $candidate->setInSchool($data[37]);
    $candidate->setGraduated($data[38]);
    $candidate->setStillInProgram($data[39]);

    if ($candidate->getCandidateSex() == "Male") {
        $males++;
    } else {
        $females++;
    }
    if ($candidate->getViable() == "Yes") {
        $viables++;
    } else {
        $nonViables++;
        array_push($nonViablesArray, $candidate);
    }
    if ($candidate->getCommitted() == "Yes") {
        $committed++;
    }
    if ($candidate->getEnrolled() == "Yes") {
        $enrolled++;
    }
    if ($candidate->getInSchool() == "Yes") {
        $inSchool++;
    }
    if ($candidate->getGraduated() == "Yes") {
        $graduated++;
    }
    if ($candidate->getStillInProgram() == "Yes") {
        $stillInProgram++;
    }


    array_push($candidates_array, $candidate);

    echo '

	<div class = "innter-container" id = "inner-container' . $i . '" style = "display: none;">
		<div class = "split left left-side top-left-section" id ="top-left-section' . $i . '">
			<div class = "picture-container"><';

    //*******Test to see if the candidate has a picture on file, if not: use the default
    $testImageLocation = '.\dsc_files\ ' . $candidate->getCandLastName() . '.jpg';
    if (file_exists($testImageLocation)) {
        $imageLocation = 'dsc_files/photos/' . $candidate->getCandLastName() . '.jpg';
        echo('img id = "picture" src = "' . $imageLocation . '"');

    } elseif ($candidate->getCandidateSex() == "Male") {
        echo 'img id = "picture" src = "dsc_files/photos/default_male.png" alt="Default Male"';
    } else {
        echo 'img id = "picture" src = "dsc_files/photos/default_female.png" alt="Default Female"';
    }


    echo '		
				>
			</div> <!--picture-container-->
			<div class = "dates">
				<!--TABLE CONTAINING DATES-->
				<table class = "small-table">
					<tr>
						<th colspan="2">Dates</th>
					</tr>
					<tr>
						<td>Assigned to Unit</td>
						<td id="date-assigned">' . $candidate->getDateAssigned() . '</td>
					</tr>
					<tr>
						<td>DSA</td>
						<td id = "dsa">' . $candidate->getDSADate() . '</td>
					</tr>
					<tr>
						<td>Latest APFT</td>
						<td id = "apft-date">' . $candidate->getLastAPFT() . '</td>
					</tr>
					<tr>
						<td>Behavioral Health Appt.</td>
						<td id = "behaviorl-health">' . $candidate->getBHAppt() . '</td>
					</tr>
					<tr>
						<td>BRM</td>
						<td id = "brm">' . $candidate->getQualDate() . '</td>
					</tr>
				</table>
					
				<!--TABLE CONTAINING ORDER STATUS-->
				<table class = "small-table">
					<tr>
						<th colspan="2">Orders</th>
					</tr>
					<tr>
						<td>RFO</td>
						<td id="rfo-made">' . $candidate->getRFODate() . '</td>
					</tr>
					<tr>
						<td>Orders Received</td>
						<td id = "orders-received">' . $candidate->getOrdersReceived() . '</td>
					</tr>
					<tr>
						<td>DTS Voucher Created</td>
						<td id = "dts-voucher">' . $candidate->getDTSCreated() . '</td>
					</tr>
					<tr>
						<td>DTS Approved</td>
						<td id = "dts-approved">' . $candidate->getDTSApproved() . '</td>
					</tr>
				</table>
			</div> <!--dates-->
			<div class = "personal-information">
				<!--TABLE CONTAINING PERSONAL INFORMATION-->
				<table class = "big-side-table">
					<tr>
						<th colspan="2">Personal Information</th>
					</tr>
					<tr>
						<td>Name</td>
						<td id="cand-name">' . $candidate->getCandidateRank() . ' ' . $candidate->getCandLastName() . ', 
							' . $candidate->getCandidateFirstName() . '</td>
					</tr>
					<tr>
						<td>Mentor</td>
						<td id = "mentor">' . $candidate->getMentorRank() . ' ' . $candidate->getMentorLastName() . '</td>
					</tr>
					<tr>
						<td>Senior Drill Sergeant</td>
						<td id = "dts-voucher">' . $candidate->getSeniorRank() . ' ' . $candidate->getSeniorLastName() . '</td>
					</tr>
				</table>
			</div> <!--personal-information-->
			<div class = "notes">
								<!--TABLE CONTAINING PERSONAL INFORMATION-->
				<table class = "comments-header">
					<tr>
						<th id= "comments-header" colspan="2">Comments</th>
					</tr>
					<tr>
						<td id="comments">' . $candidate->getComments() . '</td>
					</tr>
				</table>
			</div><!--notes-->
		</div> <!--top-left-section-->
		<div class = "split right right-side top-right-secton" id = "top-right-secton' . $i . '">
				<!--TABLE CONTAINING REQUIREMENT STATUS-->
		<table class = "big-table" style="width:100%">
			<tr>
				<th colspan="2">Requirements</th>
			</tr>
			<tr>
				<td>Modules (PSA, Rest, Hand Salute)</td>
				<td id="modules"><img src = ' . greenOrRed($candidate->getFirstThree()) . '</td>
			</tr>
			<tr>
				<td>PRT</td>
				<td id = "prt"><img src = ' . greenOrRed($candidate->getPRT()) . '</td>
			</tr>
			<tr>
				<td>Teach 2 Soldier Skill Lvl 1 Classes</td>
				<td id = "teach-classes"><img src = ' . greenOrRed($candidate->getTwoClasses()) . '</td>
			</tr>
			<tr>
				<td>Voice Command Exercises</td>
				<td id = "voice-commands"><img src = ' . greenOrRed($candidate->getVoiceCommands()) . '</td>
			</tr>
			<tr>
				<td>Drill & Ceremony</td>
				<td id = "drill-ceremony"><img src = ' . greenOrRed($candidate->getDAndC()) . '</td>
			</tr>
			<tr>
				<td>Drill Sergeant & Soldier Creeds</td>
				<td id = "creeds"><img src = ' . greenOrRed($candidate->getCreeds()) . '</td>
			</tr>
			<tr>
				<td>Passed APFT & HT/WT</td>
				<td id = "passed-apft"><img src = ' . greenOrRed($candidate->getPassedAPFTHW()) . '</td>
			</tr>
			<tr>
				<td>DS History, Badge, Hat</td>
				<td id = "history"><img src = ' . greenOrRed($candidate->getDSHistBadgeHat()) . '</td>
			</tr>
			<tr>
				<td>Risk Management</td>
				<td id = "risk"><img src = ' . greenOrRed($candidate->getRiskManagement()) . '</td>
			</tr>
			<tr>
				<td>Sensitive Duty (DA 7427)</td>
				<td id = "sensitive-duty"><img src = ' . greenOrRed($candidate->getSensitiveDuty()) . '</td>
			</tr>
			<tr>
				<td>Medical Release (DA 2870)</td>
				<td id = "medical"><img src = ' . greenOrRed($candidate->getMedRelease()) . '</td>
			</tr>
			<tr>
				<td>Army Service Uniform</td>
				<td id = "asu"><img src = ' . greenOrRed($candidate->getASU()) . '</td>
			</tr>
			<tr>
				<td>Equipment</td>
				<td id = "equipment"><img src = ' . greenOrRed($candidate->getEquipment()) . '</td>
			</tr>
			<tr>
				<td>Government Travel Card</td>
				<td id = "govtc"><img src = ' . greenOrRed($candidate->getGovtc()) . '</td>
			</tr>
			<tr>
				<td>Mental Evaluation (DA 3822)</td>
				<td id = "mental-eval"><img src = ' . greenOrRed($candidate->getMentalEval()) . '</td>
			</tr>

		</table>
		</div> <!--top-right-secton-->
	</div> <!--inner-container-->';
    $i++;
}
echo '</div> <!--container-->';
$numberOfCandidates = $i;

echo '<!--The "HOME" screen for Company Drill Sergeant Candidate Statistics-->
	<div class = "inner-container" id = "inner-container99" style = "visibility: visible;">

		<div class = "picture-container-head">
		<table id="title-table"><tr style = "background-color: lightgrey !important;">
			<td><img id = "badge" src = "dsc_files\photos\badge.jpeg" alt = "ds badge"></td>
			<td><p class = "home-title">A Company 3rd BN 518 RGT</p>
			<p class = "home-title">DS Candidate Statistics</p></td>
			<td><img id = "div" src = "dsc_files\photos\98th.png" alt = "98th Division"></td>
			</tr></table>
			<hr>
			<div id = "viable-sex">
				<table id="top-table">
					<tr>
						<td>
							<table class = "top-tables">
								<th>Candidates</th>
								<tr>
									<td>Total</td>
									<td class ="center">' . $numberOfCandidates . '</td>
								</tr>
								<tr>
									<td>Viable</td>
									<td class ="center">' . $viables . '</td>
								</tr>
								<tr>
									<td>Non-Viable</td>
									<td class = "red center">' . $nonViables . '</td>
								</tr>
								<tr>
									<td>Male</td>
									<td class ="center">' . $males . '</td>
								</tr>
								<tr>
									<td>Female</td>
									<td class ="center">' . $females . '</td>
								</tr>
								<tr>
									<td>Still in Program</td>
									<td class ="center">' . $stillInProgram . '</td>
								</tr>
							</table>
						</td>
						<td>
							<table class = "top-tables">
								<th class = "center">Viable Candidates</th>
								<tr>
									<td>Committed</td>
									<td class = "center">' . $committed . '</td>
								</tr>
								<tr>
									<td>Enrolled in DSA</td>
									<td class = "center">' . $enrolled . '</td>
								</tr>	
								<tr>
									<td>Currently in DSA</td>
									<td class = "center">' . $inSchool . '</td>
								</tr>
								<tr>
									<td>Graduated</td>
									<td class = "center">' . $graduated . '</td>
								</tr>	
					
							</table>
						</td>
					</tr>
				</table>
			</div><!--viable-sex-->
			<div id = "non-viable">
				<table id = "nonVs">
					<th>Non-Viable Candidates</th>';
foreach ($nonViablesArray as $nonV) {
    echo '<tr><td>' . $nonV->getCandidateRank() . ' ' . $nonV->getCandLastName() . ', ' .
        $nonV->getCandidateFirstName() . '</td><td>' . $nonV->getComments() . '</td></tr>';
}
echo '	
				</table>
				<table>
				<tr><td>
				<div id = "choose1">
	<div class = "selection" id = "home-screen1" onclick = "selectCandidate(99, ' . $numberOfCandidates . ')">
		<img class = "selection-image" src = "dsc_files\photos\stats.png" alt = "statistics">
			<p class = "selection-title"> DSC Statistics</p>
	</div> <!--home-screen-->';
$i = 0;
foreach ($candidates_array as $dsc) {
    echo '	<div class = "selection" id = "dsc-screen-' . $i . '" onclick = "selectCandidate(' .
        $i . ', ' . $numberOfCandidates . ')" >';

    //*******Test to see if the candidate has a picture on file, if not: use the default
    $testImageLocation = '.\dsc_files\ ' . $dsc->getCandLastName() . '.jpg';
    if (file_exists($testImageLocation)) {
        $imageLocation = 'dsc_files/photos/' . $dsc->getCandLastName() . '.jpg';
        echo('<img class = "selection-image" src = "' . $imageLocation . '">');

    } elseif ($dsc->getCandidateSex() == "Male") {
        echo '<img class = "selection-image" src = "dsc_files/photos/default_male.png" alt="Default Male">';
    } else {
        echo '<img class = "selection-image" src = "dsc_files/photos/default_female.png" alt="Default Female">';
    }
    echo '
			<p class = "selection-title">' . $dsc->getCandidateRank() . ' ' . $dsc->getCandLastName() . '</p>
	</div> <!--dsc-screen-->';
    $i++;
}
echo '
</div> <!--choose-->
				</td></tr>
				</table>
			</div> <!--non-viable-->
			
		</div><!--picture-container-->

	</div><!--inner-container-->
	
 
<div id = "choose2" style = "display: none;">
	<div class = "selection" id = "home-screen2" onclick = "selectCandidate(99, ' . $numberOfCandidates . ')">
		<img class = "selection-image" src = "dsc_files\photos\stats.png" alt = "statistics">
			<p class = "selection-title"> DSC Statistics</p>
	</div> <!--home-screen-->';
$i = 0;
foreach ($candidates_array as $dsc) {
    echo '	<div class = "selection" id = "dsc-screen-' . $i . '" onclick = "selectCandidate(' .
        $i . ', ' . $numberOfCandidates . ')" >';

    //*******Test to see if the candidate has a picture on file, if not: use the default
    $testImageLocation = '.\dsc_files\ ' . $dsc->getCandLastName() . '.jpg';
    if (file_exists($testImageLocation)) {
        $imageLocation = 'dsc_files/photos/' . $dsc->getCandLastName() . '.jpg';
        echo('<img class = "selection-image" src = "' . $imageLocation . '">');

    } elseif ($dsc->getCandidateSex() == "Male") {
        echo '<img class = "selection-image" src = "dsc_files/photos/default_male.png" alt="Default Male">';
    } else {
        echo '<img class = "selection-image" src = "dsc_files/photos/default_female.png" alt="Default Female">';
    }
    echo '
			<p class = "selection-title">' . $dsc->getCandidateRank() . ' ' . $dsc->getCandLastName() . '</p>
	</div> <!--dsc-screen-->';
    $i++;
}
echo '
</div> <!--choose-->
	
</div> <!--container-->



</body>
</html>';
?>