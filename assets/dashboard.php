<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        include 'include/header.php';
        include 'include/sidebar.php';
    ?>    

    <div class="dashboard-frame">
        <div class="dashboard-title"> DASHBOARD </div>

        <div class="content">
            <div class="content-box">
            <span class="content-name">Total Regular Visitors</span>
                <img src="../assets/img/regular.png" alt="img">
                <span id="total-reg-visitor" class="content-name">0</span>
            </div>

            <div class="content-box">
                <span class="content-name">Total VIP Visitors</span>
                <img src="../assets/img/vip.png" alt="img">
                <span id="total-vip-visitor" class="content-name">0</span>
            </div>

            <div class="content-box">
                <span class="content-name">Overall Total Visitors</span>
                <img src="../assets/img/overall.png" alt="img">
                <span id="overall-total-visitor" class="content-name">0</span>
            </div>

        </div>
    </div>

    <script src="js/count-info-visitors.js"></script>
</body>
</html>
