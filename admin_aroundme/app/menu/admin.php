<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa fa-folder-open nav-icon"></i>
                <p>
                    Gallery
                    <i class="right fas fa-angle-left"></i>
                    <span class="badge badge-info right">4</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=gallery-data" class="nav-link">
                        <i class="fas fa-image nav-icon"></i>
                        <p>Main Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=aroundme_id-data" class="nav-link">
                        <i class="fas fa-camera-retro nav-icon"></i>
                        <p>AroundMe ID</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=aroundme_studio-data" class="nav-link">
                        <i class="nav-icon fas  fa-camera"></i>
                        <p>AroundMe Studio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=aroundme_wedding-data" class="nav-link">
                        <i class="fas fa-heart nav-icon"></i>
                        <p>AroundMe Wedding</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="index.php?page=team-data" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Team</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="index.php?page=client-data" class="nav-link">
                <i class="fas fa-child nav-icon"></i>
                <p>Client</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="index.php?page=testimonial-data" class="nav-link">
                <i class="fas fa-star nav-icon"></i>
                <p>Testimonial</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="index.php?page=subtitle-data" class="nav-link">
                <i class="fas fa-pen nav-icon"></i>
                <p>Subtitle</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="index.php?page=service-data" class="nav-link">
                <i class="fas fa-puzzle-piece nav-icon"></i>
                <p>Service</p>
            </a>
        </li>

        <li class="nav-item">
            <a onclick="logout()" class="nav-link text-red">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Log Out
                </p>
            </a>
        </li>

    </ul>
</nav>

<script>
    function logout() {
        let text;
        if (confirm("Are you sure want to leave this site?") == true) {
            window.location = ("logout.php");
        } else {}
    }
</script>