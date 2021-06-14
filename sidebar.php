<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
</head>

<body>
    <ul>
        <li>
            <a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
        </li>
        <li>
            <a href="doc.php"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
        </li>
        <li class="submenu">
            <a href="#"><i class="fe fe-user"></i> <span> Patients</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
                <li><a href="patient-new.php"><i class="fe fe-user-plus"></i> New Patient</a></li>
                <li><a href="patient-list.php"><i class="fe fe-user-plus"></i> All Patients</a></li>
            </ul>
        </li>
        <li>
            <a href="tests.php"><i class="fe fe-user"></i> <span>Tests</span></a>
        </li>
        <li class="submenu">
            <a href="#"><i class="fe fe-user"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
                <li><a href="report-patient.php"><i class="fe fe-user-plus"></i> Patients</a></li>
                <li><a href="report-doctor.php"><i class="fe fe-user-plus"></i> Doctors</a></li>
            </ul>
        </li>
        <li>
            <a href="profile.php"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
        </li>
        <li>
            <a href="expense.php"><i class="fe fe-user-plus"></i> <span>Expense</span></a>
        </li>
        <li>
            <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
        </li>
        <!-- <li class="submenu">
            <a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
                <li><a href="invoice-report.html">Invoice Reports</a></li>
            </ul>
        </li> -->

    </ul>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>

</html>