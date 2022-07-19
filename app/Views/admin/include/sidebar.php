  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

      <div data-simplebar class="h-100">

          <!--- Sidemenu -->
          <div id="sidebar-menu">
              <!-- Left Menu Start -->
              <ul class="metismenu list-unstyled" id="side-menu">
                  <li>
                      <a href="<?php echo base_url() ?>/admin/home" class="waves-effect">
                          <i class="mdi mdi-home-variant-outline"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-building-4-line"></i>
                          <span>Floor Information</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/floor_list">Floor List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/floor_add">Add Floor</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-community-line"></i>
                          <span>Unit Information</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/unit_list">Unit List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/unit_add">Add Unit</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-user-line"></i>
                          <span>Owner Information</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/ownerlist">Owner List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/owneradd">Add Owner</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class=" ri-team-line"></i>
                          <span>Tenant Information</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/tenant_list">Tenant List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/tenant_add">Add Tenant</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-shield-user-line"></i>
                          <span>Employee Information</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url('admin/employeelist'); ?>">Employee List</a></li>
                          <li><a href="<?php echo base_url('admin/addemployee'); ?>">Add Employee</a></li>
                          <li><a href="<?php echo base_url('admin/employeesalary'); ?>">Employee Salary</a></li>
                          <li><a href="<?php echo base_url('admin/employeeleave'); ?>">Employee Leave Request</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class=" ri-money-dollar-box-line"></i>
                          <span>Rent Collection</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?= base_url('admin/rentlist'); ?>">Rent List</a></li>
                          <li><a href="<?= base_url('admin/addrent'); ?>">Add Rent</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-user-settings-line"></i>
                          <span>Owner Utility</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url('admin/ownerutilitylist') ?>">Owner Utility List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/ownerutilityadd">Add Owner Utility</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class=" ri-scissors-cut-line"></i>
                          <span>Maintenance Cost</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/maintenance_list">Maintenance Cost List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/maintenance_add">Add Maintenance Cost</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-user-4-line"></i>
                          <span>Management Committee</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/committee_list">Member List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/committee_add">Add Member</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="  ri-exchange-funds-line"></i>
                          <span>Apartment Fund</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url('admin/fundlist'); ?>">Fund List</a></li>
                          <li><a href="<?php echo base_url('admin/addfund'); ?>">Add Fund</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class=" ri-secure-payment-line"></i>
                          <span>Bill Deposit</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url('admin/billdipositlist'); ?>">Bill List</a></li>
                          <li><a href="<?php echo base_url('admin/addbill'); ?>">Add Bill</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-question-answer-line"></i>
                          <span>Complain</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/complain_list">Complain List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/complain_add">Add Complain</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-roadster-line"></i>
                          <span>Visitor</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/visitor_list">Visitor List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/visitor_add">Add Visitor</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-account-pin-box-line"></i>
                          <span>Meeting</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url() ?>/admin/meeting_list">Meeting List</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/meeting_add">Add Meeting</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="  ri-user-voice-line"></i>
                          <span>Notice Board</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <!-- <li><a href="notice.php">Tenant Notice Board</a></li>
                        <li><a href="employee_notice.php">Employee Notice Board</a></li> -->
                          <li><a href="<?php echo base_url('admin/addnotice'); ?>">Notice Board</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="<?php echo base_url() ?>/admin/mailsms_list" class="waves-effect">
                        <i class="ri-mail-line"></i> 
                        <span>Email / SMS Alert</span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-pin-box-line"></i>
                        <span>Users</span>
                    </a> 
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo base_url('admin/adduser'); ?>">Add users</a></li>
                    </ul>
                </li> -->

                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-bar-chart-grouped-line"></i>
                          <span>Report</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url('admin/rentreport'); ?>">Rental Report</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/rented_report">Tenant Report</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/visitor_report">Visitors Report</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/complain_report">Complain Report</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/unit_report">Unit Status Report</a></li>
                          <li><a href="<?php echo base_url('admin/fundstatus'); ?>">Fund Status</a></li>
                          <li><a href="<?php echo base_url('admin/billreport'); ?>">Bill Report</a></li>
                          <li><a href="<?php echo base_url('admin/salaryreport'); ?>">Salary Report</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="javascript: void(0);" class="has-arrow waves-effect">
                          <i class="ri-settings-2-line"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li><a href="<?php echo base_url('admin/adduser'); ?>">User Setup</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/billsetup_add">Bill Type Setup</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/utility_setup">Utility Bill Setup</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/membersetup_add">Management Member Type</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/monthsetup_add">Month Setup</a></li>
                          <li><a href="<?php echo base_url('admin/yearsetup'); ?>">Year Setup</a></li>
                          <li><a href="<?php echo base_url('admin/currencysetup'); ?>">Currency Setup</a></li>
                          <li><a href="<?php echo base_url('admin/systemsetup'); ?>">System Setup</a></li>
                          <li><a href="<?php echo base_url() ?>/admin/notification_list">Notification Setup</a></li>
                      </ul>
                  </li>

              </ul>
          </div>
          <!-- Sidebar -->
      </div>
  </div>
  <!-- Left Sidebar End -->
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">