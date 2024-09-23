<?php 
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

<!-- Main content -->
   
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form action="process_form.php" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" required>
        </div>
        <div class="form-group">
            <label for="productPrice">Price per Unit</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="Enter price per unit" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="productQuantity">Quantity</label>
            <input type="number" class="form-control" id="productQuantity" name="productQuantity" placeholder="Enter quantity" min="1" required>
        </div>
        <div class="form-group">
            <label for="totalPrice">Total Price</label>
            <input type="text" class="form-control" id="totalPrice" name="totalPrice" placeholder="Total Price" readonly>
        </div>
        <div class="form-group">
            <label for="purchaseDate">Purchase Date</label>
            <input type="date" class="form-control" id="purchaseDate" name="purchaseDate" required>
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkMeOut">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>

<script>
    // Calculate total price based on quantity and price per unit
    document.getElementById('productQuantity').addEventListener('input', calculateTotal);
    document.getElementById('productPrice').addEventListener('input', calculateTotal);

    function calculateTotal() {
        const pricePerUnit = parseFloat(document.getElementById('productPrice').value) || 0;
        const quantity = parseInt(document.getElementById('productQuantity').value) || 0;
        const totalPrice = pricePerUnit * quantity;

        document.getElementById('totalPrice').value = totalPrice.toFixed(2); // Display total price
    }
</script>



            </div>
            <!-- /.card -->
             </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php 
include('includes/footer.php');
?>