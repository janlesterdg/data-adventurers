<?php
include "header.php";
 ?>

 <div class="list-group list-group-flush">
   <a href="dashboard.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
   <a href="members.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-users-cog mr-3"></i>User Management</a>
   <a href="page-information.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-table mr-3"></i>Page Information</a>
   <a href="user-registration.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-users mr-3"></i>User Registration</a>
   <a href="announcements.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-bullhorn mr-3"></i>Announcements</a>
   <a href="activities.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-snowboarding mr-3"></i>Activities</a>
   <a href="memo.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-sticky-note mr-3"></i>Memo</a>
   <a href="polls.php" class="list-group-item list-group-item-action active waves-effect">
     <i class="fas fa-poll-h mr-3"></i>Polls</a>
   <a href="profile.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-user-circle mr-3"></i>Profile</a>
   <a href="settings.php" class="list-group-item list-group-item-action waves-effect">
     <i class="fas fa-tools mr-3"></i>Settings</a>
 </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
<!DOCTYPE html>
<html>
	<head>
		<title>Poll</title>
	</head>
	<body>
<?php
include 'functions-poll.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// If the GET request "id" exists (poll id)...
if (isset($_GET['id'])) {
    // MySQL query that selects the poll records by the GET request "id"
    $stmt = $pdo->prepare('SELECT * FROM polls WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the record
    $poll = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the poll record exists with the id specified
    if ($poll) {
        // MySQL Query that will get all the answers from the "poll_answers" table ordered by the number of votes (descending)
        $stmt = $pdo->prepare('SELECT * FROM poll_answers WHERE poll_id = ? ORDER BY votes DESC');
        $stmt->execute([$_GET['id']]);
        // Fetch all poll answers
        $poll_answers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Total number of votes, will be used to calculate the percentage
        $total_votes = 0;
        foreach ($poll_answers as $poll_answer) {
            // Every poll answers votes will be added to total votes
            $total_votes += $poll_answer['votes'];
        }
    } else {
        die ('Poll with that ID does not exist.');
    }
} else {
    die ('No poll ID specified.');
}
?>

<?=template_header('Poll Results')?>

<div class="content poll-result">
    <h2><?=$poll['title']?></h2>
    <p><?=$poll['desc']?></p>
    <div class="wrapper">
        <?php foreach ($poll_answers as $poll_answer): ?>
        <div class="poll-question">
            <p><?=$poll_answer['title']?> <span>(<?=$poll_answer['votes']?> Votes)</span></p>
            <div class="result-bar" style= "width:<?=@round(($poll_answer['votes']/$total_votes)*100)?>%">
                <?=@round(($poll_answer['votes']/$total_votes)*100)?>%
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>
