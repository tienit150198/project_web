<?php
  $curl_enabled = function_exists('curl_version');
?>
  <!-- start page title -->
  <div class="row ">
    <div class="col-xl-8">
      <div class="card">
        <div class="card-body">
          <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('about_this_application'); ?></h4>
        </div> <!-- end card body-->
      </div> <!-- end card -->
    </div><!-- end col-->
  </div>

  <div class="row ">
    <div class="col-xl-8">
      <div class="card cta-box">
        <div class="card-body">
          <div class="media align-items-center">
            <div class="media-body">
              <div class="chart-widget-list">
                <p>
                  <i class="mdi mdi-square"></i> <?php echo get_phrase('software_version'); ?>
                  <span class="float-right">Beta 1</span>
                </p>
                
                <p>
                  <i class="mdi mdi-square"></i> <?php echo get_phrase('php_version'); ?>
                  <span class="float-right"><?php echo phpversion(); ?></span>
                </p>
                <p class="mb-0">
                  <i class="mdi mdi-square"></i> <?php echo get_phrase('curl_enable') ?>
                  <span class="float-right">
                    <?php echo $curl_enabled ? '<span class="badge badge-success-lighten">'.get_phrase('enabled').'</span>' : '<span class="badge badge-danger-lighten">'.get_phrase('disabled').'</span>'; ?>
                  </span>
                </p>

                <p style="margin-top: 8px;">
                  <i class="mdi mdi-square"></i> Edit and develop by Dinh Nguyen
                </p>
              </div>
            </div>
            <img class="ml-3" src="<?php echo base_url('assets/backend/images/report.svg'); ?>" width="120" alt="Generic placeholder image">
          </div>
        </div>
      </div>
    </div>
  </div>
