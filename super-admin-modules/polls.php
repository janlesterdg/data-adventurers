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
			// MySQL query that selects all the polls and poll answers
			$stmt = $pdo->query('SELECT p.*, GROUP_CONCAT(pa.title ORDER BY pa.id) AS answers FROM polls p LEFT JOIN poll_answers pa ON pa.poll_id = p.id GROUP BY p.id');
			$polls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Polls')?>
	<div class="content home">
		<h2>Polls</h2>
		<a href="create.php" class="create-poll">Create Poll</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
				<td>Answers</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($polls as $poll): ?>
            <tr>
                <td><?=$poll['id']?></td>
                <td><?=$poll['title']?></td>
				<td><?=$poll['answers']?></td>
                <td class="actions">
					<a href="vote.php?id=<?=$poll['id']?>" class="view" title="View Poll"><i class="fas fa-eye fa-xs"></i></a>
                    <a href="hide-poll.php?id=<?=$poll['id']?>" class="trash" title="Delete Poll"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?=template_footer()?>
	</body>
</html>
