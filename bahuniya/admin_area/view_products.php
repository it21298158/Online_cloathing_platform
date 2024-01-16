<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / View Products
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> View Products
                    </h3>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Sold</th>
                                    <th>Keywords</th>
                                    <th>Date</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                $get_pro = "SELECT * FROM products WHERE status='product'";
                                $run_pro = mysqli_query($con, $get_pro);
                                while ($row_pro = mysqli_fetch_array($run_pro)) {
                                    $pro_id = $row_pro['product_id'];
                                    $pro_title = $row_pro['product_title'];
                                    $pro_image = $row_pro['product_img1'];
                                    $pro_price = $row_pro['product_price'];
                                    $pro_keywords = $row_pro['product_keywords'];
                                    $pro_date = $row_pro['date'];
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $pro_title; ?></td>
                                        <td><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"></td>
                                        <td>RS: <?php echo $pro_price; ?></td>
                                        <td>
                                            <?php
                                            $get_sold = "SELECT * FROM pending_orders WHERE product_id='$pro_id'";
                                            $run_sold = mysqli_query($con, $get_sold);
                                            $count = mysqli_num_rows($run_sold);
                                            echo $count;
                                            ?>
                                        </td>
                                        <td><?php echo $pro_keywords; ?></td>
                                        <td><?php echo $pro_date; ?></td>
                                        <td>
                                            <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                                <i class="fa fa-trash-o"></i> Delete
                                            </a>
                                        </td>
                                        <td>
                                            <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <!-- Download Report button -->
                        <button onclick="downloadReport()">Download Report</button>

                        <!-- JavaScript for generating PDF -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>
                        <script>
                            function downloadReport() {
                                try {
                                    const pdf = new jsPDF();
                                    const table = document.querySelector('.table-bordered');
                                    const deleteColumnIndex = 7; // Index of the Delete column
                                    const editColumnIndex = 8; // Index of the Edit column

                                    // Clone the table and remove Delete and Edit columns
                                    const clonedTable = table.cloneNode(true);
                                    clonedTable.querySelectorAll('tr').forEach(row => {
                                        row.deleteCell(deleteColumnIndex);
                                        row.deleteCell(editColumnIndex);
                                    });

                                    // Convert the table to a string of HTML
                                    const tableHtml = clonedTable.outerHTML;

                                    // Remove the script tags from the table HTML
                                    const cleanTableHtml = tableHtml.replace(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, "");

                                    // Add the HTML content to the PDF using autoTable
                                    pdf.autoTable({
                                        html: cleanTableHtml,
                                        startY: 15,
                                    });

                                    // Save the PDF file
                                    pdf.save('report.pdf');
                                    console.log('PDF generated and saved successfully');
                                } catch (error) {
                                    console.error('Error generating or saving PDF:', error);
                                }
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>