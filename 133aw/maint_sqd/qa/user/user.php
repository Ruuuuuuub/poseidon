<?php include 'session-redirect.php'; ?>
<?php require "get-user.php";?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../../../Pictures/maintenance_patch.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($user['NAME']) ?></title>
    <link rel="stylesheet" href="../../../../styles.css">
    <link rel="stylesheet" href="user.css">
    <style>
    body {
        background-image: url('../../../../Pictures/background.png');
    }
    </style>
</head>

<body>
    <nav class="page-navbar">
        <div class="title">
            <h1>133AW/Maintenance Squadron/QA/User/<?= htmlspecialchars($user['NAME'] ?? 'N/A') ?></h1>

        </div>
        <a href="/logout.php">
            <button>Logout</button>
        </a>
    </nav>
    <div class="main-qa">
        <aside class="sidebar">
            <div class="sidebar-clock-container">
                <div class="sidebar-clock-menu">
                    <div class="sidebar-clock-time">
                        <p class="clock-date"><span id="date"></span></p>
                        <p class="clock-time">
                            <span id="time"></span>
                            <span id="timeZulu"></span>
                            <br>
                            <span class="sidebar-clock-time-text">Local Zulu</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-box">
                <a id="133-maint-qa-1-link"><button id="133-maint-qa-1"></button></a>
                <a id="133-maint-qa-2-link"><button id="133-maint-qa-2"></button></a>
                <a id="133-maint-qa-3-link"><button id="133-maint-qa-3"></button></a>
                <a id="133-maint-qa-4-link"><button id="133-maint-qa-4"></button></a>
                <a id="133-maint-qa-5-link"><button id="133-maint-qa-5"></button></a>
                <a id="133-maint-qa-6-link"><button id="133-maint-qa-6"></button></a>
                <a id="133-maint-qa-7-link"><button id="133-maint-qa-7"></button></a>
                <a id="133-maint-qa-8-link"><button id="133-maint-qa-8"></button></a>
                <a id="133-maint-qa-9-link"><button id="133-maint-qa-9"></button></a>
                <a id="133-maint-qa-10-link"><button id="133-maint-qa-10"></button></a>
                <a id="133-maint-qa-11-link"><button id="133-maint-qa-11"></button></a>
                <a id="133-maint-qa-12-link"><button id="133-maint-qa-12"></button></a>
                <a id="133-maint-qa-13-link"><button id="133-maint-qa-13"></button></a>
                <a id="133-maint-qa-14-link"><button id="133-maint-qa-14"></button></a>
                <a id="133-maint-qa-15-link"><button id="133-maint-qa-15"></button></a>
                <a id="133-maint-qa-16-link"><button id="133-maint-qa-16"></button></a>
                <a id="133-maint-qa-17-link"><button id="133-maint-qa-17"></button></a>
                <a id="133-maint-qa-18-link"><button id="133-maint-qa-18"></button></a>
                <a id="133-maint-qa-19-link"><button id="133-maint-qa-19"></button></a>
                <a id="133-maint-qa-20-link"><button id="133-maint-qa-20"></button></a>
            </div>

        </aside>
        <Section class="user-container">
            <div class="user-card user-card-item-1">
                <h2><strong><?= htmlspecialchars($user['NAME']) ?></strong></h2>
                <p><strong>Employee Number:</strong> <?= htmlspecialchars($user['EMPLOYEE_NUMBER']) ?></p>
                <p><strong>Phone:</strong> <?= htmlspecialchars($user['PHONE'] ?? 'N/A') ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($user['EMAIL'] ?? 'N/A') ?></p>
                <p><strong>Address:</strong> <?= htmlspecialchars($user['FULL_ADDRESS'] ?? 'N/A') ?>
                <p><strong>Position ID:</strong> <?= htmlspecialchars($user['POS'] ?? 'N/A') ?></p>
                <p><strong>Organisation:</strong> <?= htmlspecialchars($user['ORG'] ?? 'N/A') ?></p>
                <p><strong>Department:</strong> <?= htmlspecialchars($user['DEP'] ?? 'N/A') ?></p>
                <p><strong>Approved:</strong> <?= htmlspecialchars($user['APPROVED'] ?? 'N/A') ?></p>
                <p><strong>User Created:</strong> <?= htmlspecialchars($user['USER_CREATED'] ?? 'N/A') ?></p>
                <p><strong>Last Login:</strong> <?= htmlspecialchars($user['LAST_LOGIN'] ?? 'N/A') ?></p>
            </div>
            <!--  BU AUTH???  -->
            <div class="user-card user-card-item-2">
                BU AUTH
            </div>
            <!--  AUTH  -->
            <div class="user-card user-card-item-3">
                AUTH
            </div>
            <!--  READ AND SIGN  -->
            <div class="user-card user-card-item-4">
                READ AND SIGN
            </div>
            <!--  AUTH  -->
            <div class="user-card user-card-item-5">
                AUTH
            </div>
        </Section>
    </div>
    <footer id="footer" class="footer"></footer>
    <script src="../../../../config/maint-qa-config.php"></script>
    <script>
    document.getElementById("footer").textContent = FOOTER;

    document.getElementById("133-maint-qa-1").textContent = MAINT_QA_1;
    document.getElementById("133-maint-qa-2").textContent = MAINT_QA_2;
    document.getElementById("133-maint-qa-3").textContent = MAINT_QA_3;
    document.getElementById("133-maint-qa-4").textContent = MAINT_QA_4;
    document.getElementById("133-maint-qa-5").textContent = MAINT_QA_5;
    document.getElementById("133-maint-qa-6").textContent = MAINT_QA_6;
    document.getElementById("133-maint-qa-7").textContent = MAINT_QA_7;
    document.getElementById("133-maint-qa-8").textContent = MAINT_QA_8;
    document.getElementById("133-maint-qa-9").textContent = MAINT_QA_9;
    document.getElementById("133-maint-qa-10").textContent = MAINT_QA_10;
    document.getElementById("133-maint-qa-11").textContent = MAINT_QA_11;
    document.getElementById("133-maint-qa-12").textContent = MAINT_QA_12;
    document.getElementById("133-maint-qa-13").textContent = MAINT_QA_13;
    document.getElementById("133-maint-qa-14").textContent = MAINT_QA_14;
    document.getElementById("133-maint-qa-15").textContent = MAINT_QA_15;
    document.getElementById("133-maint-qa-16").textContent = MAINT_QA_16;
    document.getElementById("133-maint-qa-17").textContent = MAINT_QA_17;
    document.getElementById("133-maint-qa-18").textContent = MAINT_QA_18;
    document.getElementById("133-maint-qa-19").textContent = MAINT_QA_19;
    document.getElementById("133-maint-qa-20").textContent = MAINT_QA_20;

    document.getElementById("133-maint-qa-1-link").href = MAINT_QA_1_LINK;
    document.getElementById("133-maint-qa-2-link").href = MAINT_QA_2_LINK;
    document.getElementById("133-maint-qa-3-link").href = MAINT_QA_3_LINK;
    document.getElementById("133-maint-qa-4-link").href = MAINT_QA_4_LINK;
    document.getElementById("133-maint-qa-5-link").href = MAINT_QA_5_LINK;
    document.getElementById("133-maint-qa-6-link").href = MAINT_QA_6_LINK;
    document.getElementById("133-maint-qa-7-link").href = MAINT_QA_7_LINK;
    document.getElementById("133-maint-qa-8-link").href = MAINT_QA_8_LINK;
    document.getElementById("133-maint-qa-9-link").href = MAINT_QA_9_LINK;
    document.getElementById("133-maint-qa-10-link").href = MAINT_QA_10_LINK;
    document.getElementById("133-maint-qa-11-link").href = MAINT_QA_11_LINK;
    document.getElementById("133-maint-qa-12-link").href = MAINT_QA_12_LINK;
    document.getElementById("133-maint-qa-13-link").href = MAINT_QA_13_LINK;
    document.getElementById("133-maint-qa-14-link").href = MAINT_QA_14_LINK;
    document.getElementById("133-maint-qa-15-link").href = MAINT_QA_15_LINK;
    document.getElementById("133-maint-qa-16-link").href = MAINT_QA_16_LINK;
    document.getElementById("133-maint-qa-17-link").href = MAINT_QA_17_LINK;
    document.getElementById("133-maint-qa-18-link").href = MAINT_QA_18_LINK;
    document.getElementById("133-maint-qa-19-link").href = MAINT_QA_19_LINK;
    document.getElementById("133-maint-qa-20-link").href = MAINT_QA_20_LINK;
    </script>
    <script src="../../../../scripts/dateTime.js"></script>
    <script src="../../../../scripts/table-sort.js"></script>
    <script src="../../../../scripts/table-search.js"></script>
    <?php closeDb(); ?>


</body>

</html>