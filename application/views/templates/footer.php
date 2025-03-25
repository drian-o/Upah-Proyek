</div>
</div>
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block d-print-none"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-primary box-shadow-3" href="#" id="customizer-toggle-setting" style="margin-top: 80%"><i class="ft-settings font-medium-3 spinner white"></i></a><div class="customizer-content p-2">
        <h5 class="mt-1 mb-1 text-bold-500">Navbar Color Options</h5>
        <div class="navbar-color-options clearfix">
            <div class="gradient-colors mb-1 clearfix">
                <div class="bg-gradient-x-purple-blue navbar-color-option" data-bg="bg-gradient-x-purple-blue" title="bg-gradient-x-purple-blue"></div>
                <div class="bg-gradient-x-purple-red navbar-color-option" data-bg="bg-gradient-x-purple-red" title="bg-gradient-x-purple-red"></div>
                <div class="bg-gradient-x-blue-green navbar-color-option" data-bg="bg-gradient-x-blue-green" title="bg-gradient-x-blue-green"></div>
                <div class="bg-gradient-x-orange-yellow navbar-color-option" data-bg="bg-gradient-x-orange-yellow" title="bg-gradient-x-orange-yellow"></div>
                <div class="bg-gradient-x-blue-cyan navbar-color-option" data-bg="bg-gradient-x-blue-cyan" title="bg-gradient-x-blue-cyan"></div>
                <div class="bg-gradient-x-red-pink navbar-color-option" data-bg="bg-gradient-x-red-pink" title="bg-gradient-x-red-pink"></div>
            </div>
            <div class="solid-colors clearfix">
                <div class="bg-primary navbar-color-option" data-bg="bg-primary" title="primary"></div>
                <div class="bg-success navbar-color-option" data-bg="bg-success" title="success"></div>
                <div class="bg-info navbar-color-option" data-bg="bg-info" title="info"></div>
                <div class="bg-warning navbar-color-option" data-bg="bg-warning" title="warning"></div>
                <div class="bg-danger navbar-color-option" data-bg="bg-danger" title="danger"></div>
                <div class="bg-blue navbar-color-option" data-bg="bg-blue" title="blue"></div>
            </div>
        </div>

        <hr>

        <h5 class="my-1 text-bold-500">Layout Options</h5>
        <div class="row">
            <div class="col-12">
                <div class="d-inline-block custom-control custom-radio mb-1 col-4">
                    <input type="radio" class="custom-control-input bg-primary" name="layouts" id="default-layout" checked>
                    <label class="custom-control-label" for="default-layout">Default</label>
                </div>
                <div class="d-inline-block custom-control custom-radio mb-1 col-4">
                    <input type="radio" class="custom-control-input bg-primary" name="layouts" id="fixed-layout">
                    <label class="custom-control-label" for="fixed-layout">Fixed</label>
                </div>
                <div class="d-inline-block custom-control custom-radio mb-1 col-4">
                    <input type="radio" class="custom-control-input bg-primary" name="layouts" id="static-layout">
                    <label class="custom-control-label" for="static-layout">Static</label>
                </div>
                <div class="d-inline-block custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input bg-primary" name="layouts" id="boxed-layout">
                    <label class="custom-control-label" for="boxed-layout">Boxed</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-inline-block custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input bg-primary" name="right-side-icons" id="right-side-icons">
                    <label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
                </div>
            </div>
        </div>

        <hr>

        <h5 class="mt-1 mb-1 text-bold-500">Sidebar menu Background</h5>
        <!-- <div class="sidebar-color-options clearfix">
            <div class="bg-black sidebar-color-option" data-sidebar="menu-dark" title="black"></div>
            <div class="bg-white sidebar-color-option" data-sidebar="menu-light" title="white"></div>
        </div> -->
        <div class="row sidebar-color-options ml-0">
            <label for="sidebar-color-option" class="card-title font-medium-2 mr-2">White Mode</label>
            <div class="text-center mb-1">
                <input type="checkbox" id="sidebar-color-option" class="switchery" data-size="xs"/>
            </div>
            <label for="sidebar-color-option" class="card-title font-medium-2 ml-2">Dark Mode</label>
        </div>

        <hr>

        <label for="collapsed-sidebar" class="font-medium-2">Menu Collapse</label>
        <div class="float-right">
            <input type="checkbox" id="collapsed-sidebar" class="switchery" data-size="xs"/>
        </div>

        <hr>

        <!--Sidebar Background Image Starts-->
        <h5 class="mt-1 mb-1 text-bold-500">Sidebar Background Image</h5>
        <div class="cz-bg-image row">
            <div class="col mb-3">
                <img src="<?=base_url()?>assets/images/backgrounds/04.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
            <div class="col mb-3">
                <img src="<?=base_url()?>assets/images/backgrounds/01.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
            <div class="col mb-3">
                <img src="<?=base_url()?>assets/images/backgrounds/02.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
            <div class="col mb-3">
                <img src="<?=base_url()?>assets/images/backgrounds/05.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
            </div>
        </div>
        <!--Sidebar Background Image Ends-->

        <!--Sidebar BG Image Toggle Starts-->
        <div class="sidebar-image-visibility">
            <div class="row ml-0">
                <label for="toggle-sidebar-bg-img" class="card-title font-medium-2 mr-2">Hide Image</label>
                <div class="text-center mb-1">
                    <input type="checkbox" id="toggle-sidebar-bg-img" class="switchery" data-size="xs" checked/>
                </div>
                <label for="toggle-sidebar-bg-img" class="card-title font-medium-2 ml-2">Show Image</label>
            </div>
        </div>
        <!--Sidebar BG Image Toggle Ends-->

        <hr>

        <div class="row mb-2">
            <!-- <div class="col">
                <a href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" class="btn btn-danger btn-block box-shadow-1" target="_blank">Buy Now</a>
            </div> -->
            <div class="col">
                <a href="https://themeselection.com/" class="btn btn-primary btn-block box-shadow-1" target="_blank">More Themes</a>
            </div>
        </div>
        <div class="text-center">
            <button id="twitter" class="btn btn-social-icon btn-twitter sharrre mr-1"><i class="la la-twitter"></i></button>
            <button id="facebook" class="btn btn-social-icon btn-facebook sharrre mr-1"><i class="la la-facebook"></i></button>
            <button id="google" class="btn btn-social-icon btn-google sharrre"><i class="la la-google"></i></button>
        </div>
    </div>
</div>
<!-- End: Customizer-->


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow d-print-none">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2022  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">PT. Mitra Famma Nusantara - Konstruksi</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
        </ul>
    </div>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?= base_url()?>assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!--<script src="--><?//= base_url()?><!--assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>-->
<!--<script src="--><?//= base_url()?><!--assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>-->
<script src="<?= base_url()?>assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>

<script src="<?= base_url()?>assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?= base_url()?>assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/core/app.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/scripts/customizer.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!--<script src="--><?//= base_url()?><!--assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script>-->
<script src="<?= base_url()?>assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/scripts/tables/datatables/datatable-basic.min.js" type="text/javascript"></script>

<script src="<?= base_url()?>assets/js/scripts/forms/select/form-select2.min.js" type="text/javascript"></script>

<script src="<?= base_url()?>assets/js/scripts/popover/popover.min.js" type="text/javascript"></script>

<script src="<?= base_url()?>assets/js/scripts/easy-autocomplete/jquery.easy-autocomplete.min.js"></script>

<script src="<?= base_url()?>assets/js/core/sigaka.js" type="text/javascript"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
