<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Notes</title>
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
    <div>  
    <select id="semester" name="year" required>
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="3"> 3</option>
        <option value="4"> 4</option>
        <!-- Add more semester options as needed -->
    </select>
    
    </div>
</div>

<div class="form-group">
    <label for="semester">Semester:</label>
    <select id="semester" name="sem" required>
        <option value="1">Semester 1</option>
        <option value="2" >Semester 2</option>
        <!-- Add more semester options as needed -->
    </select>
</div>
<div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>
</div>
<div class="form-group">
    <label>Unit:</label>
    <div>  
    <select id="semester" name="unit" required>
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="3"> 3</option>
        <option value="4"> 4</option>
        <option value="5"> 5</option>
        <!-- Add more semester options as needed -->
    </select>
    
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
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $sub = $_POST['subject'];
    $unit = $_POST['unit'];
    $pdf = $_FILES['pdf']['name'];

    $conn = mysqli_connect("localhost","root","","fullstack");
    $insert = "INSERT INTO Notes VALUES('$year','$sem','$sub','$unit','$pdf')";
    if(mysqli_query($conn, $insert)) {
        mysqli_close($conn);
        echo "Notes added";

        // Redirect to the home page after inserting the data
        header("Location: index.html"); // Replace "home.php" with the actual URL of your home page
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

    </div>
</body>
</html>
