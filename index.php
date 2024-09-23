<?php 
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="container my-3">
                <div class="row g-4">

                    <!-- Total Purchase -->
                    <div class="col-md-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                            <div class="card-body bg-primary text-white">
                                <i class="bi bi-bag-fill card-icon"></i> <!-- Purchase Icon -->
                                <h5 class="card-title">Total Purchase</h5>
                                <p class="card-text">₹0.00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Total Inventory -->
                    <div class="col-md-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#inventoryModal">
                            <div class="card-body bg-success text-white">
                                <i class="bi bi-box-seam card-icon"></i> <!-- Inventory Icon -->
                                <h5 class="card-title">Total Inventory</h5>
                                <p class="card-text">0 Items</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stock Available Card -->
                    <div class="col-md-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#stockAvailableModal">
                            <div class="card-body bg-warning text-dark">
                                <i class="bi bi-clipboard-data-fill card-icon"></i> <!-- Stock Available Icon -->
                                <h5 class="card-title">Stock Available</h5>
                                <p class="card-text">View Products</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stock Sales Card -->
                    <div class="col-md-3">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#stockSalesModal">
                            <div class="card-body bg-danger text-white">
                                <i class="bi bi-currency-dollar card-icon"></i> <!-- Stock Sales Icon -->
                                <h5 class="card-title">Stock Sales</h5>
                                <p class="card-text">View Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Purchase Details Modal -->
            <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="purchaseModalLabel">Purchase Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price per Unit</th>
                                        <th>Total Price</th>
                                        <th>Purchase Date</th>
                                    </tr>
                                </thead>
                                <tbody id="purchaseDetails">
                                    <tr>
                                        <td>Product 1</td>
                                        <td>10</td>
                                        <td>₹100</td>
                                        <td>₹1000</td>
                                        <td>2024-09-20</td>
                                    </tr>
                                    <tr>
                                        <td>Product 2</td>
                                        <td>5</td>
                                        <td>₹200</td>
                                        <td>₹1000</td>
                                        <td>2024-09-21</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inventory Details Modal -->
            <div class="modal fade" id="inventoryModal" tabindex="-1" aria-labelledby="InventoryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="InventoryModalLabel">Inventory Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price per Unit</th>
                                        <th>Total Price</th>
                                        <th>Purchase Date</th>
                                    </tr>
                                </thead>
                                <tbody id="inventoryDetails">
                                    <tr>
                                        <td>Product 1</td>
                                        <td>10</td>
                                        <td>₹100</td>
                                        <td>₹1000</td>
                                        <td>2024-09-20</td>
                                    </tr>
                                    <tr>
                                        <td>Product 2</td>
                                        <td>5</td>
                                        <td>₹200</td>
                                        <td>₹1000</td>
                                        <td>2024-09-21</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock Available Modal -->
            <div class="modal fade" id="stockAvailableModal" tabindex="-1" aria-labelledby="stockAvailableModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="stockAvailableModalLabel">Stock Available Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Quantity Available</th>
                                        <th>Location</th>
                                        <th>Last Updated</th>
                                    </tr>
                                </thead>
                                <tbody id="stockAvailableDetails">
                                    <tr>
                                        <td>Product X</td>
                                        <td>Electronics</td>
                                        <td>120</td>
                                        <td>Warehouse A</td>
                                        <td>2024-09-15</td>
                                    </tr>
                                    <tr>
                                        <td>Product Y</td>
                                        <td>Home Appliances</td>
                                        <td>75</td>
                                        <td>Warehouse B</td>
                                        <td>2024-09-18</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock Sales Modal -->
            <div class="modal fade" id="stockSalesModal" tabindex="-1" aria-labelledby="stockSalesModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="stockSalesModalLabel">Stock Sales Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sale ID</th>
                                        <th>Product Name</th>
                                        <th>Quantity Sold</th>
                                        <th>Sale Price</th>
                                        <th>Sale Date</th>
                                    </tr>
                                </thead>
                                <tbody id="stockSalesDetails">
                                    <tr>
                                        <td>1001</td>
                                        <td>Product X</td>
                                        <td>15</td>
                                        <td>₹1500</td>
                                        <td>2024-09-20</td>
                                    </tr>
                                    <tr>
                                        <td>1002</td>
                                        <td>Product Y</td>
                                        <td>7</td>
                                        <td>₹2100</td>
                                        <td>2024-09-21</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <script>
        // You can replace this with dynamic data fetching logic
        const stockAvailableData = [
            { name: "Product X", category: "Electronics", quantity: 120, location: "Warehouse A", lastUpdated: "2024-09-15" },
            { name: "Product Y", category: "Home Appliances", quantity: 75, location: "Warehouse B", lastUpdated: "2024-09-18" },
        ];

        const stockAvailableTableBody = document.getElementById('stockAvailableDetails');
        stockAvailableData.forEach(product => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${product.name}</td>
                <td>${product.category}</td>
                <td>${product.quantity}</td>
                <td>${product.location}</td>
                <td>${product.lastUpdated}</td>
            `;
            stockAvailableTableBody.appendChild(row);
        });
    </script>
    
<?php 
include('includes/footer.php');
?>
