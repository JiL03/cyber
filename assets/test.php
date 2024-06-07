<script>
    // Function to fetch VIP data by ID
    function fetchVIPData(vipId) {
        // Define the URL of the PHP script
        const phpScriptUrl = 'fetch_vip_data.php';

        // Make a fetch request to the PHP script with the VIP ID
        fetch(`${phpScriptUrl}?id=${vipId}`)
            .then(response => {
                // Check if the request was successful
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Parse the JSON response
                return response.json();
            })
            .then(data => {
                // Process the fetched data
                console.log('Data for VIP with ID', vipId, ':', data);
                // You can do further processing here, like updating HTML elements with the data
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Example: Fetch data for VIP with ID 1
    fetchVIPData(15);
</script>
