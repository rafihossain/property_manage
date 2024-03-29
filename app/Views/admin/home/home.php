 <?= $this->extend('admin/master') ?>
 <?= $this->section('content') ?>

 <!-- start page title -->
 <div class="row">
     <div class="col-12">
         <div class="page-title-box d-sm-flex align-items-center justify-content-between">
             <h4 class="mb-sm-0">Golden Tower Dashboard</h4>

             <div class="page-title-right">
                 <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="javascript: void(0);">Golden Tower</a></li>
                     <li class="breadcrumb-item active">Dashboard</li>
                 </ol>
             </div>

         </div>
     </div>
 </div>
 <!-- end page title -->
 <div class="row">
     <div class="col-xl-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title mb-4"> Quick Link</h4>
                 <div class="quick_link_list">
                     <a href="fairadd.php">
                         <i class="ri-money-dollar-box-line color-primary  font-size-24"></i>
                         add new <br> Rent
                     </a>
                     <a href="tenantadd.php">
                         <i class=" ri-team-line color-primary  font-size-24"></i>
                         add new <br> tenant
                     </a>
                     <a href="bill_add.php">
                         <i class=" ri-secure-payment-line color-primary  font-size-24"></i>
                         add new <br> Bill
                     </a>
                     <a href="meeting_add.php">
                         <i class="ri-account-pin-box-line color-primary  font-size-24"></i>
                         add new <br> Meeting
                     </a>
                     <a href="notice.php">
                         <i class="ri-user-voice-line color-primary  font-size-24"></i>
                         add new <br> Notice
                     </a>
                     <a href="maintenance_cost_add.php">
                         <i class=" ri-scissors-cut-line color-primary  font-size-24"></i>
                         Maintenance <br> Cost
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="row">

     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="ri-building-4-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Floor</p>
                         <h5 class="mb-3">45</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="floorlist.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="ri-community-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Unit</p>
                         <h5 class="mb-3">125</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="unitlist.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="ri-user-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Owner</p>
                         <h5 class="mb-3">5</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="ownerlist.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class=" ri-team-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Tenant</p>
                         <h5 class="mb-3">333</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="rentlist.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="ri-shield-user-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Employee</p>
                         <h5 class="mb-3">125</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="employeelist.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="ri-group-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Committee</p>
                         <h5 class="mb-3">15</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="m_committee_list.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class=" ri-money-dollar-box-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Rent</p>
                         <h5 class="mb-3">$12234456</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="fairlist.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class=" ri-scissors-cut-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Maintenance</p>
                         <h5 class="mb-3">$215</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="maintenance_cost_list.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="  ri-exchange-funds-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Fund</p>
                         <h5 class="mb-3">$200.00</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="fund_list.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class=" ri-exchange-dollar-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Owner Utility</p>
                         <h5 class="mb-3">$00</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="owner_utility_list.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="ri-secure-payment-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Employee Salary</p>
                         <h5 class="mb-3">$8000</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="employee_salary_setup.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-xl-3 col-sm-6">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex text-muted">
                     <div class="flex-shrink-0  me-3 align-self-center">
                         <div class="avatar-sm">
                             <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                 <i class="ri-question-answer-line"></i>
                             </div>
                         </div>
                     </div>
                     <div class="flex-grow-1 overflow-hidden">
                         <p class="mb-1">Total Complain</p>
                         <h5 class="mb-3">$8000</h5>
                         <p class="text-truncate mb-0"><span class="text-primary me-2"> More Info <a href="complainlist.php"><i class="ri-arrow-right-up-line align-bottom ms-1"></i></a></span> </p>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>

     <!-- end col -->
 </div>
 <!-- end row -->

 <div class="row">
     <div class="col-xl-12">
         <div class="card">
             <div class="card-body">
                 <div class="d-flex align-items-center">
                     <div class="flex-grow-1">
                         <h5 class="card-title">Monthly Deposit Bill Graph For Year 2021</h5>
                     </div>
                     <div class="flex-shrink-0">
                         <div>
                             <button type="button" class="btn btn-soft-secondary btn-sm">
                                 ALL
                             </button>
                             <button type="button" class="btn btn-soft-primary btn-sm">
                                 1M
                             </button>
                             <button type="button" class="btn btn-soft-secondary btn-sm">
                                 6M
                             </button>
                             <button type="button" class="btn btn-soft-secondary btn-sm active">
                                 1Y
                             </button>
                         </div>
                     </div>
                 </div>

                 <div>
                     <div id="mixed-chart" class="apex-charts" dir="ltr"></div>
                 </div>
             </div>
             <!-- end card-body -->

             <div class="card-body border-top">
                 <div class="text-muted text-center">
                     <div class="row">
                         <div class="col-4 border-end">
                             <div>
                                 <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-primary me-1"></i> Expenses</p>
                                 <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>1.2 %</span></h5>
                             </div>
                         </div>
                         <div class="col-4 border-end">
                             <div>
                                 <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-light me-1"></i> Maintenance</p>
                                 <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>2.0 %</span></h5>
                             </div>
                         </div>
                         <div class="col-4">
                             <div>
                                 <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-danger me-1"></i> Profit</p>
                                 <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>0.4 %</span></h5>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->


     <!-- end col -->
 </div>
 <!-- end row -->

 <div class="row">
     <div class="col-lg-6">
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title mb-4"> Last 5 Complains</h4>

                 <div class="table-responsive">
                     <table class="table table-centered table-nowrap mb-0">
                         <thead>
                             <tr>

                                 <th scope="col">Title</th>
                                 <th scope="col">Issue Date</th>

                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>
                                     <p class="mb-1 font-size-12">#AP1234</p>
                                     <h5 class="font-size-15 mb-0">David Wiley</h5>
                                 </td>
                                 <td>02 Nov, 2019</td>
                                 <td>
                                     <a href="#" class="btn btn-outline-success btn-sm"><i class="ri-eye-line"></i> </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <p class="mb-1 font-size-12">#AP1234</p>
                                     <h5 class="font-size-15 mb-0">David Wiley</h5>
                                 </td>
                                 <td>02 Nov, 2019</td>
                                 <td>
                                     <a href="#" class="btn btn-outline-success btn-sm"><i class="ri-eye-line"></i> </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <p class="mb-1 font-size-12">#AP1234</p>
                                     <h5 class="font-size-15 mb-0">David Wiley</h5>
                                 </td>
                                 <td>02 Nov, 2019</td>
                                 <td>
                                     <a href="#" class="btn btn-outline-success btn-sm"><i class="ri-eye-line"></i> </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <p class="mb-1 font-size-12">#AP1234</p>
                                     <h5 class="font-size-15 mb-0">David Wiley</h5>
                                 </td>
                                 <td>02 Nov, 2019</td>
                                 <td>
                                     <a href="#" class="btn btn-outline-success btn-sm"><i class="ri-eye-line"></i> </a>
                                 </td>
                             </tr>


                         </tbody>
                     </table>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
     <div class="col-lg-6">
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title mb-4"> Last 5 Visitors</h4>

                 <div class="table-responsive">
                     <table class="table table-centered table-nowrap mb-0">
                         <thead>
                             <tr>

                                 <th scope="col">Last 5 Visitors</th>
                                 <th scope="col">Last 5 Visitors</th>

                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>

                                 <td>
                                     <h5 class="font-size-15 mb-0">27/08/2019</h5>
                                 </td>
                                 <td>Kalvin Peter</td>


                                 <td>
                                     <a href="#" class="btn btn-outline-success btn-sm"><i class="ri-eye-line"></i> </a>
                                 </td>
                             </tr>
                             <tr>

                                 <td>
                                     <h5 class="font-size-15 mb-0">27/08/2019</h5>
                                 </td>
                                 <td>Kalvin Peter</td>


                                 <td>
                                     <a href="#" class="btn btn-outline-success btn-sm"><i class="ri-eye-line"></i> </a>
                                 </td>
                             </tr>

                         </tbody>
                     </table>
                 </div>
             </div>
             <!-- end card-body -->
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
 </div>
 <!-- end row -->
 <?= $this->endSection() ?>