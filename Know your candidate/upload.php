<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="css/w3.css">
</head>

<body>

    <div style="margin-left:500px">

        <h1>Candidate Details</h1>
        <form style="width:50%" method="post" action="candUpload.php" enctype="multipart/form-data"
            class=" w3-container w3-card-4 w3-light-grey">
            <p>
                <label>Candidate First Name</label>
                <input class="w3-input w3-border" name="cfname" type="text">
            </p>
            <p>
                <label>Candidate Middle Name</label>
                <input class="w3-input w3-border" name="cmname" type="text">
            </p>
            <p>
                <label>Candidate Last Name</label>
                <input class="w3-input w3-border" name="clname" type="text">
            </p>

            <p>
                <label>Upload Candidate Picture</label>
                <input class="w3-input w3-border" name="cpict" id="cpicture" type="file">
            </p>
            <p>
                <label>Upload Candidate Party</label>
                <input class="w3-input w3-border" name="cpart" id="cparty" type="file">
            </p>
            <p><button class="w3-button w3-blue w3-round-xlarge w3-right w3-margin" type="submit"
                    name="submit">Submit</button>
            </p>
        </form>
        <br>


        </form>
    </div>

</body>

</html>