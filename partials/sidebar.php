<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <div class="bg-light shadow-sm" style="height: 100vh;">
                <div class="p-4">
                    <h5 class="font-weight-bold">Grendy Aditya P.</h5>
                    <hr class="mb-4">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="dashboard.php" class="nav-link text-dark font-weight-bold rounded py-2 px-3" style="transition: background-color 0.3s;" id="dashboard-link">Dashboard</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="inventory_list.php" class="nav-link text-dark font-weight-bold rounded py-2 px-3" style="transition: background-color 0.3s;" id="inventory-link">Inventory</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="vendor_list.php" class="nav-link text-dark font-weight-bold rounded py-2 px-3" style="transition: background-color 0.3s;" id="vendor-link">Vendor</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="storage_unit.php" class="nav-link text-dark font-weight-bold rounded py-2 px-3" style="transition: background-color 0.3s;" id="storage-link">Gudang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="col-10">
            <!-- Your main content goes here -->


<style>
    .nav-link:hover {
        background-color: #007bff;
        border-radius: 25px;
    }

    .nav-link.active {
        background-color: #007bff;
        color: white !important;
        border-radius: 25px;
    }
</style>

<script>
    // Add active class based on the current page
    const currentLocation = window.location.pathname.split("/").pop();
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentLocation) {
            link.classList.add('active');
        }
    });
</script>
