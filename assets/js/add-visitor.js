const addVisitor_filePath = "database/add-visitor.php";

function add_visitor() {
    const regContainer = document.getElementById('reg_input_container');
    const vipContainer = document.getElementById('vip_input_container');

    if (window.getComputedStyle(regContainer).display === 'flex' && window.getComputedStyle(vipContainer).display === 'none') {
        addRegularVisitor();
    } else if (window.getComputedStyle(vipContainer).display === 'flex' && window.getComputedStyle(regContainer).display === 'none') {
        addVIPVisitor();
    }
}

function addRegularVisitor() {
    console.log('Add Regular Visitor:');

    // Get additional data
    const name = document.querySelector('input[name="reg-name"]').value;
    const designation = document.querySelector('input[name="reg-designation"]').value;
    const position = document.querySelector('input[name="reg-position"]').value;
    const rank = document.querySelector('input[name="reg-rank"]').value;
    const unit = document.querySelector('input[name="reg-unit"]').value;
    const organization = document.querySelector('input[name="reg-organization"]').value;
    const contact = document.querySelector('input[name="reg-contact"]').value;
    const purpose = document.querySelector('input[name="reg-purpose"]').value;
    const timeIn = document.querySelector('input[name="reg-time-in"]').value;
    const timeOut = document.querySelector('input[name="reg-time-out"]').value;

    // Construct the data object
    const data = {
        name: name,
        designation: designation,
        position: position,
        rank: rank,
        unit: unit,
        organization: organization,
        contact: contact,
        purpose: purpose,
        timeIn: timeIn + ":00",
        timeOut: timeOut + ":00"
        // Add more fields here as needed
    };

    console.log('Data to be sent:', data); // Display data in the console

    fetch(addVisitor_filePath + '?type=reg', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Response:', data); // Log the response received from the server
    })
    .catch(error => console.error('Error:', error));
}

function addVIPVisitor() {
    console.log('Add VIP Visitor:');

    // Get the image data
    const imageHolder = document.querySelector('.image-holder');
    const imageData = imageHolder.querySelector('img').src;

    // Get additional data
    const name = document.querySelector('input[name="vip-name"]').value;
    const designation = document.querySelector('input[name="vip-designation"]').value;
    const position = document.querySelector('input[name="vip-position"]').value;
    const rank = document.querySelector('input[name="vip-rank"]').value;
    const unit = document.querySelector('input[name="vip-unit"]').value;
    const organization = document.querySelector('input[name="vip-organization"]').value;
    const contact = document.querySelector('input[name="vip-contact"]').value;
    const purpose = document.querySelector('input[name="vip-purpose"]').value;
    const comment = document.querySelector('input[name="vip-comment"]').value;
    const timeIn = document.querySelector('input[name="vip-time-in"]').value;
    const timeOut = document.querySelector('input[name="vip-time-out"]').value;
    
    // Get signature data from canvas
    const canvas = document.getElementById('signatureCanvas');
    const signatureData = canvas.toDataURL(); // Get the signature as a base64-encoded image data URL

    // Construct the data object
    const data = {
        image: imageData, // Add the image data to the data object
        name: name,
        designation: designation,
        position: position,
        rank: rank,
        unit: unit,
        organization: organization,
        contact: contact,
        purpose: purpose,
        comment: comment,
        timeIn: timeIn + ":00",
        timeOut: timeOut + ":00",
        signature: signatureData // Add the signature data to the data object
        // Add more fields here as needed
    };

    console.log('Data to be sent:', data); // Display data in the console

    fetch(addVisitor_filePath + '?type=vip', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Response:', data); // Log the response received from the server
    })
    .catch(error => console.error('Error:', error));
}

// Add event listener to the save button to call the add_visitor function
document.getElementById('add-visitor-btn').addEventListener('click', add_visitor);
