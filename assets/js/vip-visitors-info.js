const vip_filePath = "database/vip-visitors-info.php";

// Function to fetch VIP visitor information
function getVipInfo() {
    fetch(vip_filePath, {
        method: 'GET'
    })
    .then(response => response.text())
    .then(text => {
        console.log('Raw response text:', text);  // Log the raw response text
        return JSON.parse(text);  // Parse the raw text as JSON
    })
    .then(data => {
        console.log('Parsed data:', data); // Log the parsed data
        displayVipInfo(data);
    })
    .catch(error => console.error('Error:', error));
}

// Function to display VIP visitor information in the VIP table
function displayVipInfo(data) {
    const tbody = document.querySelector('.vip-table tbody');
    tbody.innerHTML = ''; // Clear existing rows

    data.forEach(visitor => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${visitor.vip_id}</td>
            <td>${visitor.fullname}</td>
            <td>${visitor.designation}</td>
            <td>${visitor.position}</td>
            <td>${visitor.rank}</td>
            <td>${visitor.unit}</td>
            <td>${visitor.contact_no}</td>
            <td>${visitor.purpose_visit}</td>
            <td>${visitor.message}</td>
            <td><img src="data:image/jpeg;base64,${visitor.signature_base64}" alt="" style="max-width: 100px;"></td>
            <td><img src="data:image/jpeg;base64,${visitor.image_base64}" alt="" style="max-width: 100px;"></td>
            <td>${visitor.date}</td>
            <td>${visitor.time_in}</td>
            <td>${visitor.time_out}</td>
            <td>
                <div class="dropdown-container">
                    <button class="dropdown-button">Action</button>
                    <div class="dropdown-content" style="display: none;">
                        <button class="edit-button">Edit</button>
                        <button class="print-button">Print</button>
                    </div>
                </div>
            </td>
        `;
        tbody.appendChild(row);
    });

    // Add event listeners to dropdown buttons
    const dropdownButtons = document.querySelectorAll('.vip-table-container .dropdown-button');
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

    // Add event listener for edit button
    const editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(editButton => {
        editButton.addEventListener('click', function() {
            console.log('Edit button clicked');
            // Handle edit functionality here
        });
    });

    // Add event listener for print button
    const printButtons = document.querySelectorAll('.print-button');
    printButtons.forEach(printButton => {
        printButton.addEventListener('click', function() {
            console.log('Print button clicked');
            // Handle print functionality here
        });
    });

    // Hide dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdownContents = document.querySelectorAll('.dropdown-content');
        dropdownContents.forEach(content => {
            if (!content.previousElementSibling.contains(event.target) && !content.contains(event.target)) {
                content.style.display = 'none';
            }
        });
    });
}

// Call the getVipInfo function to fetch and insert VIP visitor info
getVipInfo();
