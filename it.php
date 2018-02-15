<?php
$rank=array("(1)","(2)","(3)");
$colleges=array(1=>"Christ University",2=>"Department of Computer Applications, SRM University",3=>"Institute of Management Studies");
$college=array(
array("(4)","Madras Christian College","Velachery Main Road, East Tambaram, Chennai","044-22390675","http://mcc.edu.in/"));?>
<html>
<head><title>College O Pedia| Colleges</title></head>
<body><style>
/* unvisited link */
a:link {
    color: red;
}

/* visited link */
a:visited {
    color: red;
}

/* mouse over link */
a:hover {
    color: #FFFF00;
}

/* selected link */
a:active {
    color: blue;
}
</style>
<div style="padding: 1% 0;
	background: url(../images/header-tail.gif) top repeat-x #01315A;
	border-bottom: solid 1px #001C32">
<div style="background-color:#0033FF">
<img src="images/coun.png" height="91" width="400">
</div>
<div style="border-bottom: 5px solid #096DB9">
<div style="background: #014279">
<div>
<font face="Arial Black, Gadget, sans-serif" size=4>
	<a style="color:#090;padding-left:50px" href="home.html">Home</a>
	<a style="color:#090;padding-left:100px" href="about.php">About</a>
	<a style="color:#090;padding-left:100px" href="college.html">Colleges</a>
	<a style="color:#090;padding-left:100px" href="contact.html">Contact</a></div>
</div>
</div>
</div>
</div>
<div align="justify" style="padding-left:10px;padding-right:10px;" >
<br>
<p align="center"><b><u>Scenario of BCA Colleges in India.</u></b> </p>
	<p align="left">Bachelor of Computer Applications is an undergraduate academic course in Computer Applications for those who want to make their career in Information Technology. It requires a minimum of three years with six semesters to get the degree.</p>
<br>
<br>
<b><u>Admission Procedure</u></b>
<br>

<p align="left">Most of the colleges grant admission under BCA course in their college on the basis of Higher Secondary Examinations' marks, except for some reputed institutes that require students to qualify the entrance examination conducted by them. Certain colleges also conduct a session of personal interview before admitting students. Application forms for various colleges are available during the months of May and June when the 12th standard results are declared. The candidates must fill the forms correctly and send them to the respective colleges along with the required documents before the last date.</p>
<br><br>
<b><u>Eligibility Criteria</u></b>
<br>
<p align="left">
The aspirants who have cleared their High School Examination or Equivalent Diploma degree with mathematics as their subject in the qualifying Exam can apply for BCA. While the general minimum pass marks required is 50%, some colleges have increased it to 60%. Most of the colleges need the candidate to be at least 17 years old while the maximum age varies between 22 to 25 years.</p>
<br>
<br>
<b><u>Benefits of the Course</u></b>
<br>
<p align="left"> After successful completion of the course, one will have complete knowledge on how to produce computer applications to gratify the user's need using different programming languages such as C, C++, Python, Java and much more. With sound academic knowledge of Computer Applications, one can easily get a job in large IT companies as an entry-level computer applications software engineer. Companies like Microsoft, Oracle, Wipro, Infosys, Cisco, Citibank and the list goes on, also hire BCA graduates for the profile of Software Consultant, Network Engineer, Database Administrator, Test Engineer, System Analyst, Programmer and Quality Assurance Engineer.

Apart from the private sector, BHEL, NSDL, MTNL and BSNL are some of the government information technology companies that hire BCA graduates for various posts in their companies. The Banking sector also provides good job opportunities to them. The BCA course also opens the gate to different post graduate programs. These include MSc. I.T., PGDCA, MSc. CS and MCA.</p>
<br>
<div class="w3-container">
<table border="1" bgcolor="#CC99FF"  class="w3-table-all w3-card-16" id="customers">
  <tr bgcolor="#FFFF00">
    <th colspan="6" > <div align="center">Top Ten BCA Colleges in India</div></th>
  </tr>
  <tr bgcolor="#FFFF00">
    <th width="10%">Rank</th>
    <th width="38%"><strong>Name of the College</strong></th>
    <th width="22%"><strong>Address</strong></th>
    <th width="12%"><strong>Phone No</strong></th>
    <th width="18%"><strong>College Website</strong></th>
  </tr>
  <tr>
    <td><?php echo $rank[0];?></td>
    <td><?php echo $colleges[1]; ?></td>
    <td>Hosur Road, Bangalore</td>
    <td>080- 40129100/ 40129600</td>
    <td><a href="http://christuniversity.in"><abbr title="http://christuniversity.in">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td><?php echo $rank[1];?></td>
    <td><?php echo $colleges[2]; ?></td>
    <td>3 Veerasamy Street, West Mambalam, Chennai</td>
    <td>044-24742836/24747231</td>
    <td><a href="http://srmuniv.ac.in"><abbr title="http://srmuniv.ac.in">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td><?php echo $rank[2];?></td>
    <td><?php echo $colleges[3]; ?></td>
    <td>A-8B, IMS Campus, Sector-62, Noida</td>
    <td>0120-4798800/02</td>
    <td><a href="http://imsnoida.com/"><abbr title="http://imsnoida.com/">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td><?php echo $college[0][0]; ?></td>
    <td><?php echo $college[0][1]; ?></td>
    <td><?php echo $college[0][2]; ?></td>
    <td><?php echo $college[0][3]; ?></td>
    <td><a href="<?php echo $college[0][4]; ?>"><abbr title="<?php echo $college[0][5]; ?>">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td>(5)</td>
    <td>Symbiosis Institute of Computer Studaies & Research</td>
    <td>1st Floor, Atur Centre, Gokhale Cross Road, Model Colony, Pune, Maharashtra 411016</td>
    <td>020-25675601</td>
    <td><a href="http://sicsr.ac.in/"><abbr title="http://sicsr.ac.in/">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td>(6)</td>
    <td>Birla Institute of Technology</td>
    <td>Mesra, Ranchi, Jharkhand 835215</td>
    <td>0651-2275444</td>
    <td><a href="https://www.bitmesra.ac.in/"><abbr title="https://www.bitmesra.ac.in/">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td>(7)</td>
    <td>Presidency College</td>
    <td>Kempapura, Near Reliance Fresh, Hebbal, Bengaluru, Karnataka 560024</td>
    <td>80-2520 2793 - 96</td>
    <td><a href="http://presidencycollege.edu.in/"><abbr title="http://presidencycollege.edu.in/">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td>(8)</td>
    <td>University College-Kurukshetra</td>
    <td>Kurukshetra</td>
    <td>01744-238049</td>
    <td><a href="http://www.uckkr.org/"><abbr title="http://www.uckkr.org/">Click Here</abbr></td>
  </tr>
  <tr>
    <td>(9)</td>
    <td>Stella Maris College</td>
    <td>17, Cathedral Road, Chennai - 600 086, TamilNadu</td>
    <td>44-2811 1987/2811 1951</td>
    <td><a href="http://www.stellamariscollege.org/"><abbr title="http://www.stellamariscollege.org/">Click Here</abbr></a></td>
  </tr>
  <tr>
    <td>(10)</td>
    <td>Xavier Institute of Computer Application</td>
    <td>Campus Navrangpura, P.B. No. 4168, Ahmedabad</td>
    <td>079-26308057</td>
    <td><a href="http://sxca.edu.in"><abbr title="http://sxca.edu.in">Click Here</abbr></a></td>
  </tr>
</table>
</div>
</div>
<br>
<div style="background-color:#014279;height:200px">
</div>
</body>
</html>