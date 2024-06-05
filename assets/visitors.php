<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include 'include/header.php';
        include 'include/sidebar.php';
    ?>    

    <div class="visitors-frame">
        <div class="first">
            <div class="visitors-title"> VISITORS </div>
            <div class="addGuest-btn" id="addGuest">
                <span class="addGuest-btn-text"> Add Visitor </span>
            </div>
        </div>
       
        <div class="table1">
            <div class="guestType">
                <span class="table1-title"> Type of Guest </span>
                <div class="guest-dropdown-container">
                    <div class="guestType-button"> 
                        <span class="guest-box-text"> Regular </span>
                        <img src="img/downward-arrow.png" alt="arrow" class="guest-box-arrow">
                    </div>
                    <div class="guest-dropdown-content" style="display: none;">
                        <span class="VIP-button">VIP</span>
                    </div>
                </div>
            </div>   
            
            <div class="container9">
            <span class="table1-title"> Date </span>
            <form>
                <input type="date" id="dateInput" name="date">
            </form>
            </div>
            
            <div class="guestType">
                <span class="table1-title">&nbsp;</span>
                <div>
                    <input type="text" class="search-input" placeholder="Search...">
                    <i class="fas fa-search search-icon"></i>
                </div>
            </div>     
             
        </div>

        <div class="reg-table-container" style="display: block;">
            <table class="reg-table">
                <thead>
                    <tr>
                        <th>I.D</th>
                        <th>Name</th>
                        <th>Designation/Position</th>
                        <th>Rank</th>
                        <th>Unit/Organization</th>
                        <th>Contact Number</th>
                        <th>Purpose</th>
                        <th>Date</th>
                        <th>Time-in</th>
                        <th>Time-out</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
         <div class="vip-table-container" style="display: none;">
            <table class="vip-table">
                <thead>
                    <tr>
                        <th>I.D</th>
                        <th>Name</th>
                        <th>Designation/Position</th>
                        <th>Rank</th>
                        <th>Unit/Organization</th>
                        <th>Contact number</th>
                        <th>Purpose</th>
                        <th>Message</th>
                        <th>Signature</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Time-in</th>
                        <th>Time-out</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="popup-camera" style="display: none;">
        <div class="popup-camera-content">
            <video id="video" autoplay></video>
            <canvas id="canvas" style="display:none;"></canvas>
            <div class="camera-button-container">
                <img src="img/camera.png" alt="" id="take-image" >
                <img src="img/retake.png" alt="" id="retake" style="display: none;">
                <img src="img/check.png" alt="" id="done" style="display: none;">
            </div>
            <input type="hidden" name="image" id="image">
        </div>
    </div>

    <div class="popup">
        <div class="popup-content">
            <div class="popup-title">Add Visitor</div>

            <div class="popup-dropdown-container">
                <div class="popup-guestType-button"> 
                    <span class="popup-RegularVis-btn"> Regular </span>
                    <img src="img/downward-arrow.png" alt="arrow" class="guest-box-arrow">
                </div>
                <div class="popup-dropdown-content" style="display: none;">
                    <span class="popup-VIPVis-btn">VIP</span>
                </div>
            </div>

            <!-- This input container is for regular visitors -->
            <div id="reg_input_container" class="input-container">
            <div class="text-input-container">
                    <div class="inputs">
                        <div>
                            <div class="label"> Name: </div>
                            <input type="textbox" class="textbox" name="reg-name">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label"> Designation/Postion: </div>
                            <input type="textbox" class="textbox" name="reg-designation">
                        </div>
                    </div>

                    <div class="inputs">
                        <label for="label">Rank:</label>
                        <select id="rank" name="rank">
                            <option value="Private">Mr.</option>
                            <option value="Private">Ms.</option>
                            <option value="Private">Private</option>
                            <option value="Private first class">Private first class</option>
                            <option value="Corporal">Corporal</option>
                            <option value="Sergeant">Sergeant</option>
                            <option value="Staff sergeant">Staff sergeant	</option>
                            <option value="Technical sergeant">Technical sergeant</option>
                            <option value="Master sergeant">Master sergeant</option>
                            <option value="Senior master sergeant">Senior master sergeant</option>
                            <option value="Chief master sergeant">Chief master sergeant</option>
                            <option value="Second lieutenant">Second lieutenant</option>
                            <option value="First lieutenant">First lieutenant</option>
                            <option value="Captain">Captain</option>
                            <option value="Major">Major</option>
                            <option value="Lieutenant Colonel">Lieutenant Colonel</option>
                            <option value="Colonel">Colonel</option>
                            <option value="Brigadier general">Brigadier general</option>
                            <option value="	Major general">Major general</option>
                            <option value="Lieutenant general">Lieutenant general</option>
                            <option value="General">General</option>
                        </select>
                            </div>
                    
                    <div class="inputs">
                        <div>
                            <div class="label"> Unit/Organization: </div>
                            <input type="textbox" class="textbox" name="reg-unit">
                        </div>
                    </div>

                </div>

                <div class="text-input-container">

                    <div class="inputs">
                        <div>
                            <div class="label"> Contact no: </div>
                            <input type="textbox" class="textbox" name="reg-contact">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label"> Purpose of Visit: </div>
                            <input type="textbox" class="textbox" name="reg-purpose">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label"> Time-in: </div>
                            <input type="time" class="textbox" name="reg-time-in">
                        </div>
                    </div>
                    
                    <div class="inputs">
                        <div>
                            <div class="label"> Time-out: </div>
                            <input type="time" class="textbox" name="reg-time-out">
                        </div>
                    </div>
                </div>
            </div>

            <!-- this input container for VIP Visitors -->
            <div id="vip_input_container" class="input-container" style="display: none;">
                <div class="image-container">
                    <div id="image_holder" class="image-holder" ></div>
                    <div class="image-button-container">
                        <div id="uploadButton">Upload</div>
                        <div id="captureButton">Capture</div>
                    </div>
                    <input type="file" id="fileInput" accept="image/*" style="display: none;">
                </div>

                <div class="text-input-container">
                    <div class="inputs">
                        <div>
                            <div class="label"> Name: </div>
                            <input type="textbox" class="textbox" name="vip-name">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label"> Designation/Position:: </div>
                            <input type="textbox" class="textbox" name="vip-designation">
                        </div>
                    </div>

                    <div class="inputs">
                    <label for="label">Rank:</label>
                        <select id="rank" name="rank">
                            <option value="Private">Mr.</option>
                            <option value="Private">Ms.</option>
                            <option value="Private">Private</option>
                            <option value="Private first class">Private first class</option>
                            <option value="Corporal">Corporal</option>
                            <option value="Sergeant">Sergeant</option>
                            <option value="Staff sergeant">Staff sergeant	</option>
                            <option value="Technical sergeant">Technical sergeant</option>
                            <option value="Master sergeant">Master sergeant</option>
                            <option value="Senior master sergeant">Senior master sergeant</option>
                            <option value="Chief master sergeant">Chief master sergeant</option>
                            <option value="Second lieutenant">Second lieutenant</option>
                            <option value="First lieutenant">First lieutenant</option>
                            <option value="Captain">Captain</option>
                            <option value="Major">Major</option>
                            <option value="Lieutenant Colonel">Lieutenant Colonel</option>
                            <option value="Colonel">Colonel</option>
                            <option value="Brigadier general">Brigadier general</option>
                            <option value="	Major general">Major general</option>
                            <option value="Lieutenant general">Lieutenant general</option>
                            <option value="General">General</option>
                        </select>
                            </div>
                    
                    <div class="inputs">
                        <div>
                            <div class="label"> Unit/Organization: </div>
                            <input type="textbox" class="textbox" name="vip-unit">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label"> Contact no: </div>
                            <input type="textbox" class="textbox" name="vip-contact">
                        </div>
                    </div>
                     

                </div>

                <div class="text-input-container">

                    <div class="inputs">
                        <div>
                            <div class="label"> Purpose of Visit: </div>
                            <input type="textbox" class="textbox" name="vip-purpose">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label"> Message: </div>
                            <input type="textbox" class="textbox" name="vip-comment">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label"> Time-in: </div>
                            <input type="time" class="textbox" name="vip-time-in">
                        </div>
                    </div>
                    
                    <div class="inputs">
                        <div>
                            <div class="label"> Time-out: </div>
                            <input type="time" class="textbox" name="vip-time-out">
                        </div>
                    </div>

                    <div class="inputs">
                        <div>
                            <div class="label">Signature:</div>
                            <canvas id="signatureCanvas" width="400" height="150" style="border: 0.18vw solid var(--green-pale);"></canvas>
                            <img id="clearSignatureBtn" src="img/clear.png" class="clear-signature"></img>
                        </div>
                    </div>
                </div>

               
            </div>
            <div class="popup-button-container">
                <div id="add-visitor-btn"> Add Visitor</div>
                <div id="cancel"> Cancel</div>
            </div>
            
         </div>
    </div>

    <script src="js/reg-visitors-info.js"></script>
    <script src="js/vip-visitors-info.js"></script>

    <script>
        // Add event listeners to all dropdown buttons
        const dropdownButtons = document.querySelectorAll('.guestType-button');
        dropdownButtons.forEach(button => {
            button.addEventListener('click', function() {
                const dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === 'none') {
                    dropdownContent.style.display = 'block';
                } else {
                    dropdownContent.style.display = 'none';
                }
            });
        });
        
        const popup_dropdownButtons = document.querySelectorAll('.popup-guestType-button');
        popup_dropdownButtons.forEach(button => {
            button.addEventListener('click', function() {
                const dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === 'none') {
                    dropdownContent.style.display = 'block';
                } else {
                    dropdownContent.style.display = 'none';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener for the VIP button
            const vipButtons = document.querySelectorAll('.guest-dropdown-content .VIP-button');
            vipButtons.forEach(vipButton => {   
                vipButton.addEventListener('click', function(event) {
                    event.stopPropagation(); // Stop event propagation to prevent closing dropdown
                    const dropdownContainer = vipButton.closest('.guest-dropdown-container');
                    const guestBoxText = dropdownContainer.querySelector('.guest-box-text');
                    if (guestBoxText.textContent === 'Regular') {
                        guestBoxText.textContent = 'VIP';
                        vipButton.textContent = 'Regular';
                        document.querySelector('.reg-table-container').style.display = 'none';
                        document.querySelector('.vip-table-container').style.display = 'block';
                    } else {
                        guestBoxText.textContent = 'Regular';
                        vipButton.textContent = 'VIP';
                        document.querySelector('.reg-table-container').style.display = 'block';
                        document.querySelector('.vip-table-container').style.display = 'none';
                    }
                    // Hide dropdown after selection
                    const dropdownContent = dropdownContainer.querySelector('.guest-dropdown-content');
                    dropdownContent.style.display = 'none';
                });
            });

            // Hide dropdown when clicking outside
            document.addEventListener('click', function(event) {
                const dropdownContents = document.querySelectorAll('.guest-dropdown-content');
                dropdownContents.forEach(content => {
                    if (!content.previousElementSibling.contains(event.target) && !content.contains(event.target)) {
                        content.style.display = 'none';
                    }
                });
            });

            // Show popup when "Add Visitor" button is clicked
            document.getElementById("addGuest").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
            });

            // exit popup when "cancel" button is clicked
            document.getElementById("cancel").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "none";
            });
        });

        // This function is for popup dropdown for adding visitors
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener for the VIP button
            const vipButtons = document.querySelectorAll('.popup-dropdown-content .popup-VIPVis-btn');
            vipButtons.forEach(vipButton => {   
                vipButton.addEventListener('click', function(event) {
                    event.stopPropagation(); // Stop event propagation to prevent closing dropdown
                    const dropdownContainer = vipButton.closest('.popup-dropdown-container');
                    const guestBoxText = dropdownContainer.querySelector('.popup-RegularVis-btn');
                    if (guestBoxText.textContent === 'Regular') {
                        guestBoxText.textContent = 'VIP';
                        vipButton.textContent = 'Regular';

                        document.getElementById('reg_input_container').style.display = 'none';
                        document.getElementById('vip_input_container').style.display = 'flex';
                        
                    } else {
                        guestBoxText.textContent = 'Regular';
                        vipButton.textContent = 'VIP';
                        document.getElementById('reg_input_container').style.display = 'flex';
                        document.getElementById('vip_input_container').style.display = 'none';
                    }
                    // Hide dropdown after selection
                    const dropdownContent = dropdownContainer.querySelector('.popup-dropdown-content');
                    dropdownContent.style.display = 'none';
                });
            });

            // Hide dropdown when clicking outside
            document.addEventListener('click', function(event) {
                const dropdownContents = document.querySelectorAll('.popup-dropdown-content');
                dropdownContents.forEach(content => {
                    if (!content.previousElementSibling.contains(event.target) && !content.contains(event.target)) {
                        content.style.display = 'none';
                    }
                });
            });
        });
        

        // Access the webcam
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const captureButton = document.getElementById('take-image');
        const retakeButton = document.getElementById('retake');
        const doneButton = document.getElementById('done');
        const imageInput = document.getElementById('image');
        const imageHolder = document.querySelector('.image-holder');
        const popupCamera = document.querySelector('.popup-camera');

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

            // Display captured image in canvas
            canvas.style.display = 'block';
            video.style.display = 'none';
            captureButton.style.display = 'none';
            retakeButton.style.display = 'block';
            doneButton.style.display = 'block';
        });

        // Retake the image
        retakeButton.addEventListener('click', () => {
            canvas.style.display = 'none';
            video.style.display = 'block';
            captureButton.style.display = 'block';
            retakeButton.style.display = 'none';
            doneButton.style.display = 'none';
        });

        // Done button (place captured image and close popup)
        doneButton.addEventListener('click', () => {
            // Place captured image in image-holder
            const capturedImage = new Image();
            capturedImage.src = imageInput.value;
            capturedImage.alt = 'Captured Image';

            // Clear any previous image and append the new one
            imageHolder.innerHTML = '';
            imageHolder.appendChild(capturedImage);

            // Close the popup
            popupCamera.style.display = 'none';

            // Log captured image data URL (optional)
            console.log('Image captured and saved:', imageInput.value);
        });


        document.getElementById('captureButton').addEventListener('click', function() {
            document.querySelector(".popup-camera").style.display = "flex";
        });

        document.getElementById('uploadButton').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageHolder = document.querySelector('.image-holder');
                    imageHolder.innerHTML = `<img src="${e.target.result}" alt="Uploaded Image" style="max-width: 100%; border-radius: 1vh;">`;
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('captureButton').addEventListener('click', function() {
            document.querySelector(".popup-camera").style.display = "flex";
        });
    

        const signatureCanva = document.getElementById('signatureCanvas');
        const signaturePad = new SignaturePad(signatureCanva);
        // Clear the signature
        document.getElementById('clearSignatureBtn').addEventListener('click', function() {
            signaturePad.clear();
        });
    </script>

<script src="js/add-visitor.js"></script>
</body>
</html>
