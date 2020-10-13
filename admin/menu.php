<ul class="list-group list-group-flush">
   <a href="?page=dashboard" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? ($_GET['page'] == 'dashboard') ? 'active' : '' : 'active'; ?>"><i class="fa fa-home space-icon"></i> Dashboard</a>
   <a href="?page=users" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? ($_GET['page'] == 'users') ? 'active' : '' : ''; ?>"><i class="fa fa-users space-icon"></i> Data Users</a>
   <a href="?page=layanan" class="list-group-item list-group-item-action <?= isset($_GET['page']) ? ($_GET['page'] == 'layanan') ? 'active' : '' : ''; ?>">Data Layanan</a>
   <a href="#" class="list-group-item list-group-item-action">Data Ulasan</a>
   <a href="../?page=logout" class="list-group-item list-group-item-action">Logout</a>
</ul>