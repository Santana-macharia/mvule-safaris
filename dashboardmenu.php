<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

    
    <ul class="nav nav-sidebar">
      
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="admin.php">Admin Dashboard</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="home_admin.php">Home</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="users.php">Users</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="comments.php">Comments</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="sites.php">Sites</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="addsites.php">Add Sites</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Log out</a></li>
    </ul>     
      