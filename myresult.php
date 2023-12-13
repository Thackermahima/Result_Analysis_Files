<?php
session_start();
$randomCode = substr(md5(mt_rand()), 0, 6);
$_SESSION['captcha'] = $randomCode;

if (isset($_POST['submit'])) {
    $captcha = $_POST['captcha'];
    if ($captcha == $_SESSION['captcha']) {
        // Code matched, allow form submission
    } else {
        // Code did not match, display error message
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Result</title>
</head>
<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      #captcha-display {
    font-size: 24px;
    font-weight: bold;
    color: #000000;
    background-color: #FFFFFF;
    padding: 5px 10px;
    border: 1px solid #CCCCCC;
    border-radius: 5px;
    display: inline-block;
}
      h1 {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
      }
      h3 {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
      }
      
       /* form {
        max-width: 500px;
        margin: auto;
        background-color: #ffffff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); */
        /* display: flex;
        justify-content: center;
        align-items: center; */
      /* }  */
      
      label {
        font-size: 15px;
        font-weight: bold;
        margin-right: 10px;
      }
      
      select {
        font-size: 16px;
        padding: 10px;
        width: 150px;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
      }
      
      input[type="submit"] {
        background-color: #419f89;
        color: #ffffff;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      input[type="text"] {
        font-size: 16px;
        padding: 10px;
        width: 200px;
        border: none;
        border-radius: 5px;
        margin-bottom: 10px;
      }

      input[type="submit"]:hover {
        background-color: #419f89;
      }
      #container-wrapper {
      display: inline-block;
      }
      #result-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

#result-searchcontainer{
  max-height: 200px;
  max-width: 500px;
  margin: 10px;
  background-color: #ffffff;
  padding: 15px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

#result-rightbox{
  max-height: 200px;
  width: 30%;
  margin: 10px;
  background-color: #ffffff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  margin-bottom: 10px;

}
#result-rightbox label{
    margin-top : 20px;
}

table {
			margin: 0 auto;
			border-collapse: collapse;
			width: 62%;
			margin-bottom: 10px;
            margin-top: 12px;
		}

		th, td {
			padding: 10px;
			text-align: center;
			border: 1px solid black;
		}

		th {
			background-color: #419f89;
			color: #fff;
		}
 
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
        .result-span {
        display: inline-block;
        margin-right: 7px;
        border: 1px solid black;
        padding: 5px;
    }
    .result_box{
        border: 1px solid black;
        margin-left: 40%;
        padding: 10px;
        padding-left: 50px;
        padding-right: 50px;

    }
    footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
    </style>
<body>
<?php
include 'header.php';
?>
<h1>Government Polytechnic college - Bhuj</h1>
<h3>Student Result</h3>

    <!-- <div id="container-searchresult">
     <label>Name</label> <span>...........</span> <br />
     <label>Enrollement No</label> <span>...........</span> <br />
     <label>Exam Seat No</label> <span>...........</span> <br />
     <label>Exam </label> <span>...........</span> <br />
     <label>Branch</label> <span>...........</span> <br />
    </div> -->
    <div id="result-container">
    <div id="result-searchcontainer">
    <form>
      <label for="exam">Exam</label>
      <select id="exam" name="exam">
        <option value="">--Select--</option>
        <option value="1">DIPL SEM 1</option>
        <option value="2">DIPL SEM 2</option>
        <option value="3">DIPL SEM 3</option>
        <option value="4">DIPL SEM 4</option>
        <option value="5">DIPL SEM 5</option>
        <option value="5">DIPL SEM 6</option>

      </select> <br />
      <label for="enrollement">Enroll no:</label>
      <input type="text" id="enrollment" name="enrollment" placeholder="Enter enrollment no">
      <br />
      <label for="number">Seat no:</label> 
      <input type="text" id="number" name="number" placeholder="Enter exam no"> <br />
      <div id="captcha-display" style="text-decoration: line-through;"><?php echo $_SESSION['captcha']; ?></div>
      <!-- <label for="captcha">Enter the code:</label> -->
      <input type="text" id="captcha" name="captcha" placeholder="Enter the code">
      <input type="submit" value="Search">

    </form>
  </div>
  <div id="result-rightbox">
    <label>Name</label> <span>....................................................</span> <br /><br />
    <label>Enrollement No</label> <span>.....................................</span> <br /><br /> 
    <label>Exam Seat No</label> <span>.......................................</span> <br /><br />
    <label>Exam </label> <span>....................................................</span> <br /><br />
    <label>Branch</label> <span>................................................</span>
    
	
  </div>

  <table>
		<thead>
			<tr>
				<th>SUBJECT
                    CODE
                </th>
				<th>SUBJECT NAME</th>
				<th>ESE ABSENT</th>
				<th>Theory Grade               <br />  <span style= "white-space: nowrap; font-size: 15px;"> <span style = "margin-left: 6px;">ESE</span> <span style = "margin-left: 14px;">PA</span> <span style = "margin-left: 10px;">TOTAL</span>

                
                </th>
				<th>Practical Grade
              <br />  <span style= "white-space: nowrap; font-size: 15px;"> <span style = "margin-left: 6px;">ESE</span> <span style = "margin-left: 14px;">PA</span> <span style = "margin-left: 10px;">TOTAL</span>
                </th>
				<th>Subject
                    Grade
                </th>
			</tr>
		</thead>
		<tbody>
        <tr>
				<td>3350701</td>
                <td style="white-space: nowrap; font-size: 15px;">Computer Maintenance And Trouble Shooting</td>
                <td>-</td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td>AB</td>
            	</tr>
                <tr>
                <td>3350702</td>
                <td style="white-space: nowrap; font-size: 15px;">Computer Maintenance And Trouble Shooting</td>
                <td>-</td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td>AB</td>
</tr>
<tr>
<td>3350703</td>
<td style="white-space: nowrap; font-size: 15px;">Computer Maintenance And Trouble Shooting</td>
                <td>-</td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td>AB</td>
</tr>
<tr>
<td>3350704</td>
<td style="white-space: nowrap; font-size: 15px;">Computer Maintenance And Trouble Shooting</td>
                <td>-</td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td>AB</td>
</tr>
<tr>
    <td>3350706</td>
    <td style="white-space: nowrap; font-size: 15px;">Computer Maintenance And Trouble Shooting</td>
                <td>-</td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td style="white-space: nowrap; font-size: 15px;"><span style="margin-right: 17px">AA</span>       <span style="margin-right: 17px">BB</span>      <span>CC</spam></td>
                <td>AB</td>
</tr>
		</tbody>
	</table>
    <div>
    <span class="result-span">Current Sem.Backlog: 0</span>
<span class="result-span">Total Backlog: 0</span>
<span class="result-span">SPI: 8.67</span>
<span class="result-span">CPI: 8.86</span>
<span class="result-span">CGPA: 8.36</span>

</div>

</div>
<div> <br /> <br /><span class="result_box">Congratulations You've passed this exam!</span></div>

<?php
include 'footer.php';
?>

</body>
</html>
