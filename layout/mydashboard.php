<?php
require_once(__DIR__ . '/columns2.php');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <?php echo $OUTPUT->standard_head_html(); ?>
</head>
<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html(); ?>

<div class="custom-dashboard">
    <div class="sidebar">
        <?php echo $OUTPUT->blocks('side-pre'); ?>
    </div>

    <div class="main-content">
        <h2>Welcome back, <?php echo fullname($USER); ?>!</h2>

        <div class="dashboard-cards">
            <div class="card">🏆 <strong>16th Rank</strong></div>
            <div class="card">⚠ <strong>2 Assignments Pending</strong></div>
        </div>

        <div class="dashboard-columns">
            <div class="attendance">
                <div class="status present">Present: 27</div>
                <div class="status absent">Absent: 1</div>
                <div class="status leaves">Leaves: 2</div>
            </div>

            <div class="calendar">
                <?php echo $OUTPUT->render_from_template('core_calendar/view', []); ?>
            </div>
        </div>
    </div>
</div>

<?php echo $OUTPUT->standard_end_of_body_html(); ?>
</body>
</html>
