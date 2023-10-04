<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload syllabus</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="file"] {
            cursor: pointer;
        }
        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Form</h2>
        <form action="" method="post">
        <div class="form-group">
    <label>Year:</label>
    <div>  <label for="year1">1</label>
        <input type="radio" id="year1" name="year" value="1" required>
      
        <label for="year2">2</label>
        <input type="radio" id="year2" name="year" value="2" required>
        
        <label for="year3">3</label>
        <input type="radio" id="year3" name="year" value="3" required>
       
        <label for="year4">4</label>
        <input type="radio" id="year4" name="year" value="4" required>
    
    </div>
</div>

            
           
            <div class="form-group">
                <label for="pdf">Upload PDF:</label>
                <input type="file" id="pdf" name="pdf" accept=".pdf" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
        <br><br><br><br>
        <?php
        if(isset($_POST['submit'])){
            
            $year=$_POST['year'];
            $pdf=$_POST['pdf'];
            $conn=mysqli_connect("localhost","root","","fullstack");
            $insert="insert into syllabus  values('$year','$pdf')";
            mysqli_query($conn,$insert);
            mysqli_close($conn);
                        echo "syllabus added";





        }
        
        ?>
    </div>
</body>
</html>
