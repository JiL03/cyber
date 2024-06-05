<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <form action="database/upload.php" method="post" enctype="multipart/form-data">
        <label for="name">Image Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image" required>
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>
 -->

 <!-- <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybervlog";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch images from the database
$sql = "SELECT name, image FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="200"/>';
        echo "</div>";
    }
} else {
    echo "No images found.";
}

// Close connection
$conn->close();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture Image Using Webcam</title>
</head>
<body>
    <h1>Capture Image Using Webcam</h1>
    <video id="video" width="640" height="480" autoplay></video>
    <button id="capture">Capture</button>
    <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
    <form id="uploadForm" action="database/upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="image" id="image">
        <button type="submit">Upload</button>
    </form>

    <script>
        // Access the webcam
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const captureButton = document.getElementById('capture');
        const imageInput = document.getElementById('image');

        // Get access to the camera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(err => {
                console.error("Error accessing the camera: " + err);
            });

        // Capture the image
        captureButton.addEventListener('click', () => {
            const context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const dataURL = canvas.toDataURL('image/png');
            imageInput.value = dataURL;
        });
    </script>
</body>
</html>
