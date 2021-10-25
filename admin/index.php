<?php

include_once('./layout/header.php');
require('../db/config.php');

?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="height:150px;">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Số dịch vụ đã được đặt</div>
                            <?php
                            $sql = "SELECT * from producttaken";
                            $select = mysqli_query($conn, $sql);

                            $count = mysqli_num_rows($select);
                            ?>
                            <div class="stat-digit"><?php echo $count; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="height:150px;">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <?php
                            $total = 0;
                            while ($row = mysqli_fetch_assoc($select)) {
                                $productId = $row['productId'];
                                $sql = "SELECT price from product where productId = '$productId'";
                                $selectPrice = mysqli_query($conn, $sql);
                                $price = mysqli_fetch_assoc($selectPrice);
                                $total += $price['price'];
                            }
                            ?>
                            <div class="stat-text">Tổng doanh thu</div>
                            <div class="stat-digit" style="font-style: 10px;"><?php echo number_format($total, 0, '.', '.'); ?>
                                <span>VNĐ</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="height:150px;">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Task Completed</div>
                            <div class="stat-digit">500</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card" style="height:150px;">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Task Completed</div>
                            <div class="stat-digit">650</div>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
</div>
    <?php
    include_once('./layout/footer.php');
    ?>