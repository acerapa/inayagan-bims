<?php include "c-meta.php"; ?>

  <body>

    <?php include "c-theme-loader.php"; ?>
    
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            
            <?php include "c-header.php"; ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
                    <?php include "c-sidebar.php"; ?>

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Buttons</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Buttons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body button-page">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Color States</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p>Checkout color states of all buttons on popover to buttons</p>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="primary-popover-content" data-container="body" data-toggle="popover" title="Primary color states" data-placement="bottom" data-content="<div class='color-code'>
                                                            <div class='row'>
                                                              <div class='col-sm-6 col-xs-12'>
                                                                <span class='block'>Normal</span>
                                                                <span class='block'>
                                                                  <small>#4680ff</small>
                                                              </span>
                                                          </div>
                                                          <div class='col-sm-6 col-xs-12'>
                                                            <div class='display-color' style='background-color:#4680ff;'></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='color-code'>
                                                  <div class='row'>
                                                    <div class='col-sm-6 col-xs-12'>
                                                      <span class='block'>Hover</span>
                                                      <span class='block'>
                                                        <small>#79a3ff</small>
                                                    </span>
                                                </div>
                                                <div class='col-sm-6 col-xs-12'>
                                                  <div class='display-color' style='background-color:#79a3ff;'></div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class='color-code'>
                                          <div class='row'>
                                            <div class='col-sm-6 col-xs-12'>
                                              <span class='block'>Active</span>
                                              <span class='block'>
                                                <small>#0956ff</small>
                                            </span>
                                        </div>
                                        <div class='col-sm-6 col-xs-12'>
                                          <div class='display-color' style='background-color:#0956ff;'></div>
                                      </div>
                                  </div>
                              </div>

                              <div class='color-code'>
                                  <div class='row'>
                                    <div class='col-sm-6 col-xs-12'>
                                      <span class='block'>Disabled</span>
                                      <span class='block'>
                                        <small>#c3d5ff</small>
                                    </span>
                                </div>
                                <div class='col-sm-6 col-xs-12'>
                                  <div class='display-color' style='background-color:#c3d5ff;'></div>
                              </div>
                          </div>
                      </div>

                      ">Primary button</button>
                      <button type="button" class="btn btn-success waves-effect waves-light" data-container="body" data-toggle="popover" title="Success color states" data-placement="bottom" data-content="<div class='color-code'>
                        <div class='row'>
                          <div class='col-sm-6 col-xs-12'>
                            <span class='block'>Normal</span>
                            <span class='block'>
                              <small>#93BE52</small>
                          </span>
                      </div>
                      <div class='col-sm-6 col-xs-12'>
                        <div class='display-color' style='background-color:#93BE52;'></div>
                    </div>
                </div>
            </div>

            <div class='color-code'>
              <div class='row'>
                <div class='col-sm-6 col-xs-12'>
                  <span class='block'>Hover</span>
                  <span class='block'>
                    <small>#aacc77</small>
                </span>
            </div>
            <div class='col-sm-6 col-xs-12'>
              <div class='display-color' style='background-color:#aacc77;'></div>
          </div>
      </div>
  </div>

  <div class='color-code'>
      <div class='row'>
        <div class='col-sm-6 col-xs-12'>
          <span class='block'>Active</span>
          <span class='block'>
            <small>#73993a</small>
        </span>
    </div>
    <div class='col-sm-6 col-xs-12'>
      <div class='display-color' style='background-color:#73993a;'></div>
  </div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#dce9c6</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#dce9c6;'></div>
</div>
</div>
</div>">Success button</button>
<button type="button" class="btn btn-info waves-effect waves-light" data-container="body" data-toggle="popover" title="Info color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#62d1f3</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#62d1f3;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#91dff7</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#91dff7;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#29c0ef</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#29c0ef;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#ccf0fb</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ccf0fb;'></div>
</div>
</div>
</div>">Info button</button>
<button type="button" class="btn btn-warning waves-effect waves-light" data-container="body" data-toggle="popover" title="Warning color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#FFB64D</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#FFB64D;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#ffcb80</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ffcb80;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#ff9d10</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ff9d10;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#ffe7c4</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ffe7c4;'></div>
</div>
</div>
</div>">warning button</button>
<button type="button" class="btn btn-danger waves-effect waves-light" data-container="body" data-toggle="popover" title="Danger color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#FC6180</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#FC6180;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#fd93a8</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#fd93a8;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#fb2550</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#fb2550;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#fecbd5</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#fecbd5;'></div>
</div>
</div>
</div>">Danger button</button>
<button type="button" class="btn btn-inverse waves-effect waves-light" data-container="body" data-toggle="popover" title="Inverse color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#303548</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#303548;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#444c67</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#444c67;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#181a23</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#181a23;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#bbbdc3</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#bbbdc3;'></div>
</div>
</div>
</div>">Inverse button</button>
<button type="button" class="btn btn-disabled waves-effect waves-light" data-container="body" data-toggle="popover" title="Disabled color states" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Disabled button</button>
</div>
</div>
</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Basic Buttons</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">

            <!-- button Default -->
            <p>
                Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
            </p>
            <button class="btn btn-primary waves-effect waves-light">Primary Button</button>
            <button class="btn btn-success waves-effect waves-light">Success Button</button>
            <button class="btn btn-info waves-effect waves-light">Info Button</button>
            <button class="btn btn-warning waves-effect waves-light">Warning Button</button>
            <button class="btn btn-danger waves-effect waves-light">Danger Button</button>
            <button class="btn btn-inverse waves-effect waves-light">Inverse Button</button>
            <button class="btn btn-disabled disabled waves-effect waves-light">Disabled Button</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Rounded Buttons</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <!-- button Rounded -->
            <p> Add <code>.btn-round</code> to default button to get rounded corners.</p>
            <button class="btn btn-primary btn-round waves-effect waves-light">Primary Button</button>
            <button class="btn btn-success btn-round waves-effect waves-light">Success Button</button>
            <button class="btn btn-info btn-round waves-effect waves-light">Info Button</button>
            <button class="btn btn-warning btn-round waves-effect waves-light">Warning Button</button>
            <button class="btn btn-danger btn-round waves-effect waves-light">Danger Button</button>
            <button class="btn btn-inverse btn-round waves-effect waves-light">Inverse Button</button>
            <button class="btn btn-disabled btn-round disabled waves-effect waves-light">Disabled Button</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Square Buttons</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <!-- buttton square -->
            <p> Add <code>.btn-square</code> to default button to get square corners.</p>
            <button class="btn waves-effect waves-light btn-primary btn-square">Primary Button</button>
            <button class="btn waves-effect waves-light btn-success btn-square">Success Button</button>
            <button class="btn waves-effect waves-light btn-info btn-square">Info Button</button>
            <button class="btn waves-effect waves-light btn-warning btn-square">Warning Button</button>
            <button class="btn waves-effect waves-light btn-danger btn-square">Danger Button</button>
            <button class="btn waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
            <button class="btn waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Skew Buttons</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <!-- buttton skew -->
            <p> Add <code>.btn-skew</code> to default button to get skew Buttons.</p>
            <button class="btn waves-effect waves-light btn-primary btn-skew">Primary Button</button>
            <button class="btn waves-effect waves-light btn-success btn-skew">Success Button</button>
            <button class="btn waves-effect waves-light btn-info btn-skew">Info Button</button>
            <button class="btn waves-effect waves-light btn-warning btn-skew">Warning Button</button>
            <button class="btn waves-effect waves-light btn-danger btn-skew">Danger Button</button>
            <button class="btn waves-effect waves-light btn-inverse btn-skew">Inverse Button</button>
            <button class="btn waves-effect waves-light btn-disabled btn-skew disabled">Disabled Button</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Inner Border</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <p>Use Class <code>.btn-out</code> inside button to make inner solid Border Button.</p>
            <button class="btn btn-out waves-effect waves-light btn-primary btn-square">Primary Button</button>
            <button class="btn btn-out waves-effect waves-light btn-success btn-square">Success Button</button>
            <button class="btn btn-out waves-effect waves-light btn-info btn-square">Info Button</button>
            <button class="btn btn-out waves-effect waves-light btn-warning btn-square">Warning Button</button>
            <button class="btn btn-out waves-effect waves-light btn-danger btn-square">Danger Button</button>
            <button class="btn btn-out waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
            <button class="btn btn-out waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
            <p>Use Class <code>.btn-out-dashed</code> inside button to make inner dashed Border Button.</p>
            <button class="btn btn-out-dashed waves-effect waves-light btn-primary btn-square">Primary Button</button>
            <button class="btn btn-out-dashed waves-effect waves-light btn-success btn-square">Success Button</button>
            <button class="btn btn-out-dashed waves-effect waves-light btn-info btn-square">Info Button</button>
            <button class="btn btn-out-dashed waves-effect waves-light btn-warning btn-square">Warning Button</button>
            <button class="btn btn-out-dashed waves-effect waves-light btn-danger btn-square">Danger Button</button>
            <button class="btn btn-out-dashed waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
            <button class="btn btn-out-dashed waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
            <p>Use Class <code>.btn-out-dotted</code> inside button to make inner solid dotted Button.</p>
            <button class="btn btn-out-dotted waves-effect waves-light btn-primary btn-square">Primary Button</button>
            <button class="btn btn-out-dotted waves-effect waves-light btn-success btn-square">Success Button</button>
            <button class="btn btn-out-dotted waves-effect waves-light btn-info btn-square">Info Button</button>
            <button class="btn btn-out-dotted waves-effect waves-light btn-warning btn-square">Warning Button</button>
            <button class="btn btn-out-dotted waves-effect waves-light btn-danger btn-square">Danger Button</button>
            <button class="btn btn-out-dotted waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
            <button class="btn btn-out-dotted waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Mega</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <h4 class="sub-title">Vertical gradient</h4>
            <p>Use Class <code>.btn-grd-*</code> inside button to make gradient Button.</p>
            <button class="btn waves-effect waves-light btn-grd-primary ">Primary Button</button>
            <button class="btn waves-effect waves-light btn-grd-success">Success Button</button>
            <button class="btn waves-effect waves-light btn-grd-info ">Info Button</button>
            <button class="btn waves-effect waves-light btn-grd-warning ">Warning Button</button>
            <button class="btn waves-effect waves-light btn-grd-danger ">Danger Button</button>
            <button class="btn waves-effect waves-light btn-grd-inverse ">Inverse Button</button>
            <button class="btn waves-effect waves-light btn-grd-disabled btn-disabled disabled">Disabled Button</button>
            <h4 class="sub-title">Horizontal gradient</h4>
            <p>Use Class <code>.hor-grd .btn-grd-*</code> inside button to make horizontal gradient Button.</p>
            <button class="btn waves-effect waves-light hor-grd btn-grd-primary ">Primary Button</button>
            <button class="btn waves-effect waves-light hor-grd btn-grd-success">Success Button</button>
            <button class="btn waves-effect waves-light hor-grd btn-grd-info ">Info Button</button>
            <button class="btn waves-effect waves-light hor-grd btn-grd-warning ">Warning Button</button>
            <button class="btn waves-effect waves-light hor-grd btn-grd-danger ">Danger Button</button>
            <button class="btn waves-effect waves-light hor-grd btn-grd-inverse ">Inverse Button</button>
            <button class="btn waves-effect waves-light hor-grd btn-grd-disabled btn-disabled disabled">Disabled Button</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Materialized</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block">
            <p>Use Class <code>.btn-mat</code> inside button to make matrialized Button.</p>
            <button class="btn btn-mat waves-effect waves-light btn-primary ">Primary Button</button>
            <button class="btn btn-mat waves-effect waves-light btn-success">Success Button</button>
            <button class="btn btn-mat waves-effect waves-light btn-info ">Info Button</button>
            <button class="btn btn-mat waves-effect waves-light btn-warning ">Warning Button</button>
            <button class="btn btn-mat waves-effect waves-light btn-danger ">Danger Button</button>
            <button class="btn btn-mat waves-effect waves-light btn-inverse ">Inverse Button</button>
            <button class="btn btn-mat waves-effect waves-light btn-disabled disabled">Disabled Button</button>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Buttons With Icon</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <!-- button Default -->
                <p>Use <code>&lt;i class="icofont icofont-star"&gt;</code> inside button to add icon.</p>
                <button class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-user-alt-3"></i>Primary Button</button>
                <button class="btn waves-effect waves-light btn-success"><i class="icofont icofont-check-circled"></i>Success Button</button>
                <button class="btn waves-effect waves-light btn-info"><i class="icofont icofont-info-square"></i>Info Button</button>
                <button class="btn waves-effect waves-light btn-warning"><i class="icofont icofont-warning-alt"></i>Warning Button</button>
                <button class="btn waves-effect waves-light btn-danger"><i class="icofont icofont-eye-alt"></i>Danger Button</button>
                <button class="btn waves-effect waves-light btn-inverse"><i class="icofont icofont-exchange"></i>Inverse Button</button>
                <button class="btn waves-effect waves-light btn-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled Button</button>
            </div>
        </div>
    </div>
    <!-- Border button -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Border Buttons</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <!-- button Default -->
                <p>Use Class <code>btn-outline-*</code> inside button to make Border Button.</p>
                <button class="btn waves-effect waves-light btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i>Primary Button</button>
                <button class="btn waves-effect waves-light btn-success btn-outline-success"><i class="icofont icofont-check-circled"></i>Success Button</button>
                <button class="btn waves-effect waves-light btn-info btn-outline-info"><i class="icofont icofont-info-square"></i>Info Button</button>
                <button class="btn waves-effect waves-light btn-warning btn-outline-warning"><i class="icofont icofont-warning-alt"></i>Warning Button</button>
                <button class="btn waves-effect waves-light btn-danger btn-outline-danger"><i class="icofont icofont-eye-alt"></i>Danger Button</button>
                <button class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i>Inverse Button</button>
                <button class="btn waves-effect waves-light btn-disabled btn-outline-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled Button</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Buttons Dropdown</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <!-- button Default -->
                <div class="dropdown-primary dropdown open">
                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Primary</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                    </div>
                </div>
                <div class="dropdown-success dropdown open">
                    <button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Success</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                    </div>
                </div>
                <div class="dropdown-info dropdown open">
                    <button class="btn btn-info dropdown-toggle waves-effect waves-light " type="button" id="dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Info</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                    </div>
                </div>
                <div class="dropdown-warning dropdown open">
                    <button class="btn btn-warning dropdown-toggle waves-effect waves-light " type="button" id="dropdown-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Warning</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-5" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                    </div>
                </div>
                <div class="dropdown-danger dropdown open">
                    <button class="btn btn-danger dropdown-toggle waves-effect waves-light " type="button" id="dropdown-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Danger</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-6" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                    </div>
                </div>
                <div class="dropdown-inverse dropdown open">
                    <button class="btn btn-inverse dropdown-toggle waves-effect waves-light " type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Inverse</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                    </div>
                </div>
                <div class="dropdown-disabled dropdown open">
                    <button class="btn btn-disabled dropdown-toggle waves-effect waves-light disabled" type="button" id="dropdown-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Disabled</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-8" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                        <a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Border button -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Buttons With Split Dropdown With Icon</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="btn-group dropdown-split-primary">
                    <button type="button" class="btn btn-primary"><i class="icofont icofont-user-alt-3"></i>Primary</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle primary</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                    </div>
                </div>
                <div class="btn-group dropdown-split-success">
                    <button type="button" class="btn btn-success"><i class="icofont icofont-check-circled"></i>Success</button>
                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle primary</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                    </div>
                </div>
                <div class="btn-group dropdown-split-info">
                    <button type="button" class="btn btn-info"><i class="icofont icofont-info-square"></i>Info</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle primary</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                    </div>
                </div>
                <div class="btn-group dropdown-split-warning">
                    <button type="button" class="btn btn-warning"><i class="icofont icofont-warning-alt"></i>Warning</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle primary</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                    </div>
                </div>
                <div class="btn-group dropdown-split-danger">
                    <button type="button" class="btn btn-danger"><i class="icofont icofont-eye-alt"></i>Danger</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle primary</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                    </div>
                </div>
                <div class="btn-group dropdown-split-inverse">
                    <button type="button" class="btn btn-inverse"><i class="icofont icofont-exchange"></i>Inverse</button>
                    <button type="button" class="btn btn-inverse dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle primary</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                    </div>
                </div>
                <div class="btn-group dropdown-split-disabled">
                    <button type="button" class="btn btn-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled</button>
                    <button type="button" class="btn btn-disabled disabled dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle primary</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Icon Button</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block icon-btn">
                <!-- button Default -->
                <p>Use <code>&lt;i class="icofont icofont-star"&gt;</code> inside button to add icon.</p>
                <div>
                    <button class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-user-alt-3"></i></button>
                    <button class="btn waves-effect waves-light btn-success"><i class="icofont icofont-check-circled"></i></button>
                    <button class="btn waves-effect waves-light btn-info"><i class="icofont icofont-info-square"></i></button>
                    <button class="btn waves-effect waves-light btn-warning"><i class="icofont icofont-warning-alt"></i></button>
                    <button class="btn waves-effect waves-light btn-danger"><i class="icofont icofont-eye-alt"></i></button>
                    <button class="btn waves-effect waves-light btn-inverse"><i class="icofont icofont-exchange"></i></button>
                    <button class="btn waves-effect waves-light btn-disabled disabled"><i class="icofont icofont-not-allowed"></i></button>
                </div>
                <div>
                    <button class="btn waves-effect waves-light btn-primary btn-icon"><i class="icofont icofont-user-alt-3"></i></button>
                    <button class="btn waves-effect waves-light btn-success btn-icon"><i class="icofont icofont-check-circled"></i></button>
                    <button class="btn waves-effect waves-light btn-info btn-icon"><i class="icofont icofont-info-square"></i></button>
                    <button class="btn waves-effect waves-light btn-warning btn-icon"><i class="icofont icofont-warning-alt"></i></button>
                    <button class="btn waves-effect waves-light btn-danger btn-icon"><i class="icofont icofont-eye-alt"></i></button>
                    <button class="btn waves-effect waves-light btn-inverse btn-icon"><i class="icofont icofont-exchange"></i></button>
                    <button class="btn waves-effect waves-light btn-disabled btn-icon disabled"><i class="icofont icofont-not-allowed"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Border button -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Icon Border Buttons</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block icon-btn">
                <!-- button Default -->
                <p>Use Class <code>btn-outline-*</code> inside button to make Border Button.</p>
                <div>
                    <button class="btn waves-effect waves-dark btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i></button>
                    <button class="btn waves-effect waves-dark btn-success btn-outline-success"><i class="icofont icofont-check-circled"></i></button>
                    <button class="btn waves-effect waves-dark btn-info btn-outline-info"><i class="icofont icofont-info-square"></i></button>
                    <button class="btn waves-effect waves-dark btn-warning btn-outline-warning"><i class="icofont icofont-warning-alt"></i></button>
                    <button class="btn waves-effect waves-dark btn-danger btn-outline-danger"><i class="icofont icofont-eye-alt"></i></button>
                    <button class="btn waves-effect waves-dark btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i></button>
                    <button class="btn waves-effect waves-dark btn-disabled btn-outline-disabled disabled"><i class="icofont icofont-not-allowed"></i></button>
                </div>
                <div>
                    <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-user-alt-3"></i></button>
                    <button class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i class="icofont icofont-check-circled"></i></button>
                    <button class="btn waves-effect waves-dark btn-info btn-outline-info btn-icon"><i class="icofont icofont-info-square"></i></button>
                    <button class="btn waves-effect waves-dark btn-warning btn-outline-warning btn-icon"><i class="icofont icofont-warning-alt"></i></button>
                    <button class="btn waves-effect waves-dark btn-danger btn-outline-danger btn-icon"><i class="icofont icofont-eye-alt"></i></button>
                    <button class="btn waves-effect waves-dark btn-inverse btn-outline-inverse btn-icon"><i class="icofont icofont-exchange"></i></button>
                    <button class="btn waves-effect waves-dark btn-disabled btn-outline-disabled btn-icon disabled"><i class="icofont icofont-not-allowed"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Group Buttons</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <!-- button Default -->
                <p>Use <code>btn-xlg, btn-lg, btn-md, btn-sm, btn-mini</code> inside class to use different size button.</p>
                <div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-xlg waves-effect waves-light">Left</button>
                        <button type="button" class="btn btn-primary btn-xlg waves-effect waves-light">Middle</button>
                        <button type="button" class="btn btn-primary btn-xlg waves-effect waves-light">Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Left</button>
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Middle</button>
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Left</button>
                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Middle</button>
                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Left</button>
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Middle</button>
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-mini waves-effect waves-light">Left</button>
                        <button type="button" class="btn btn-primary btn-mini waves-effect waves-light">Middle</button>
                        <button type="button" class="btn btn-primary btn-mini waves-effect waves-light">Right</button>
                    </div>
                </div>
                <div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-xlg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
                        <button type="button" class="btn btn-primary btn-xlg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
                        <button type="button" class="btn btn-primary btn-xlg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
                        <button type="button" class="btn btn-primary btn-md waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
                    </div>
                    <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                        <button type="button" class="btn btn-primary btn-mini waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
                        <button type="button" class="btn btn-primary btn-mini waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
                        <button type="button" class="btn btn-primary btn-mini waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Social Buttons</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <a href="#fakelink" class="btn waves-effect waves-light btn-facebook"><i class="icofont icofont-social-facebook"></i>Facebook</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-twitter"><i class="icofont icofont-social-twitter"></i>Twitter</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-linkedin"><i class="icofont icofont-brand-linkedin"></i>Linkedin</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-dribbble"><i class="icofont icofont-social-dribble"></i>Dribble</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-google-plus"><i class="icofont icofont-social-google-plus"></i>Google+</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-instagram"><i class="icofont icofont-social-instagram"></i>Instagram</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-pinterest"><i class="icofont icofont-social-pinterest"></i>Pinterest</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-dropbox"><i class="icofont icofont-social-dropbox"></i>Dropbox</a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-tumblr"><i class="icofont icofont-social-tumblr"></i>Tumbler</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Social Buttons Without Label</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block remove-label">
                <a href="#fakelink" class="btn waves-effect waves-light btn-facebook"><i class="icofont icofont-social-facebook"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-twitter"><i class="icofont icofont-social-twitter"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-linkedin"><i class="icofont icofont-brand-linkedin"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-dribbble"><i class="icofont icofont-social-dribble"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-google-plus"><i class="icofont icofont-social-google-plus"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-instagram"><i class="icofont icofont-social-instagram"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-pinterest"><i class="icofont icofont-social-pinterest"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-dropbox"><i class="icofont icofont-social-dropbox"></i></a>
                <a href="#fakelink" class="btn waves-effect waves-light btn-tumblr"><i class="icofont icofont-social-tumblr"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Link Buttons</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block remove-label">
                <a href="#fakelink" class="btn btn-primary">Link</a>
                <button type="button" class="btn btn-primary waves-effect waves-light">Button</button>
                <input type="button" class="btn btn-primary waves-effect waves-light" value="Input">
                <input type="submit" class="btn btn-primary waves-effect waves-light" value="Submit">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Block Buttons</h5>
                </div>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <button class="btn waves-effect waves-light btn-primary btn-block">Default Button</button>
                            <button class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block"><i class="icofont icofont-user-alt-3"></i>Border Button</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- Block level buttons with icon -->
                        <div class="form-group">
                            <button class="btn waves-effect waves-light btn-success btn-square btn-block">Square Button</button>
                            <button class="btn waves-effect waves-light btn-info btn-round btn-block">Rounded Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Page-body end -->
</div>
</div>
<!-- Warning Section Starts -->

<div id="styleSelector">

</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include "c-footer-library.php"; ?>

<!-- Custom js -->
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function() {
                return $('#primary-popover-content').html();
            }
        });
    });
</script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
