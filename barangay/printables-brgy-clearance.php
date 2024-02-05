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
                                        <h5 class="m-b-10">Barangay Clearance</h5>
                                        <p class="m-b-0 js-city-brgy-name-hjagxcvsfder">Barangay, City</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Barangay Certificate</h5>
                                                        <span>Input <code>NA</code> if not applicable</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row mt-4">
                                                            <label for="requestor" class="col-sm-4 col-form-label">Select Requestor</label>
                                                            <div class="col-sm-8">
                                                                <select name="requestor" id="requestor" class="form-control form-control-lg">
                                                                    <option value="">Select Requestor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5 class="text-center mt-4">Republic of the Philippines</h5>
                                                        <h5 class="text-center">Province of <span class="js-nmxaxnsdjfgr"></span> </h5>
                                                        <h6 class="text-center">City of Naga</h6>
                                                        <h6 class="text-center">Barangay Inayagan</h6>

                                                        <h5 class="text-center mt-10">OFFICE OF PUNONG BARANGAY</h5>
                                                        <h5 class="text-center mt-10">BARANGAY CLEARANCE</h5>

                                                        <h6 class="mt-10 px-20">TO WHOM IT MAY CONCERN:</h6>
                                                        
                                                        <p class="mt-4 px-20 text-sm indent-10 text-justify">
                                                            This is to certify that <strong class="name">MAURICE S. NADER</strong> ,<span class="age">59</span> years of Age, born on <span class="birthdate">Jul. 17, 1977</span>, migrated and resides at Brgy. Inayagan, Nage, Cebu, Philippines, is personally known to me to be of good moral character and law abiding citizen in the community where she resides.
                                                        </p>
                                                        
                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            He/She has never been convicted of any criminal offense involving moral turpitude cases.
                                                        </p>

                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            That as per record/ file in our barangay no name or person of <strong class="name">MAURICE S. NADER</strong> has been appeared or recorded.
                                                        </p>

                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            This certification is issued upon the request of <strong class="name">MAURICE S. NADER</strong> for whatever legal purpose this may serve.
                                                        </p>

                                                        <p class="mt-2 px-20 text-sm indent-10 text-justify">
                                                            ISSUED on this <span class="this_day" >26th</span> day of <span class="this_month">January</span>, <span class="this_year">2024</span> at Brgy. Inayagan, Naga, Cebu.
                                                        </p>

                                                        <div class="mt-3 flex px-20 gap-10 mb-20">
                                                            <div>
                                                                <b class="text-sm">
                                                                    <u class="name">MAURICE S. NADER</u>
                                                                </b>
                                                                <p class="text-sm m-0">Affiant</p>
                                                                <p class="text-sm m-0">Issued on: <span class="this_date">01/20/2024</span></p>
                                                                <p class="text-sm m-0">Issued at: Inayagan, Naga</p>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p class="text-sm m-0">Prepared by:</p>
                                                                    <p class="indent-10 text-sm ml-10 mb-0">
                                                                        <input type="text" id="secretary" class="form-control" />
                                                                    </p>
                                                                    <p class="indent-10 text-sm m-0">Brgy. Secretary</p>
                                                                </div>
                                                                <div>
                                                                    <p class="text-sm m-0">Prepared by:</p>
                                                                    <p class="indent-10 text-sm ml-10 mb-0">
                                                                        <input type="text" id="captain" class="form-control" />
                                                                    </p>
                                                                    <p class="indent-10 text-sm m-0">Brgy. Captain</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-outline-primary">Clear</button>
                                        <div class="p-2"></div>
                                        <button class="btn btn-primary js-hjgytrfdesw3" >Register</button>
                                        <div class="p-2"></div>
                                        <button class="btn btn-primary d-none" id="to-print-btn">Print</button>
                                    </div>
                                </div>
                                <div id="styleSelector"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="print" class="w-screen min-h-screen bg-white p-10 d-none">
        <div class="shadow-sm text-center p-5 max-w-880px mx-auto">
            <h5 class="text-center mt-4">Republic of the Philippines</h5>
            <h5 class="text-center">Province of <span class="js-nmxaxnsdjfgr"></span> </h5>
            <h6 class="text-center">City of Naga</h6>
            <h6 class="text-center">Barangay Inayagan</h6>

            <h5 class="text-center mt-5">OFFICE OF PUNONG BARANGAY</h5>
            <h5 class="text-center mt-5">BARANGAY CLEARANCE</h5>

            <h6 class="mt-10 px-20 text-left">TO WHOM IT MAY CONCERN:</h6>

            <p class="mt-4 px-20 text-sm indent-10 text-justify">
                This is to certify that <strong class="name">MAURICE S. NADER</strong> ,<span class="age">59</span> years of Age, born on <span class="birthdate">Jul. 17, 1977</span>, migrated and resides at Brgy. Inayagan, Nage, Cebu, Philippines, is personally known to me to be of good moral character and law abiding citizen in the community where she resides.
            </p>

            <p class="mt-2 px-20 text-sm indent-10 text-justify">
                He/She has never been convicted of any criminal offense involving moral turpitude cases.
            </p>

            <p class="mt-2 px-20 text-sm indent-10 text-justify">
                That as per record/ file in our barangay no name or person of <strong class="name">MAURICE S. NADER</strong> has been appeared or recorded.
            </p>

            <p class="mt-2 px-20 text-sm indent-10 text-justify">
                This certification is issued upon the request of <strong class="name">MAURICE S. NADER</strong> for whatever legal purpose this may serve.
            </p>

            <p class="mt-2 px-20 text-sm indent-10 text-justify">
                ISSUED on this <span class="this_day" >26th</span> day of <span class="this_month">January</span>, <span class="this_year">2024</span> at Brgy. Inayagan, Naga, Cebu.
            </p>

            <div class="mt-3 flex px-20 gap-10 mb-20">
                <div>
                    <b class="text-sm">
                        <u class="name">MAURICE S. NADER</u>
                    </b>
                    <p class="text-sm m-0">Affiant</p>
                    <p class="text-sm m-0">Issued on: <span class="this_date">01/20/2024</span></p>
                    <p class="text-sm m-0">Issued at: Inayagan, Naga</p>
                </div>
                <div>
                    <div>
                        <p class="text-sm m-0">Prepared by:</p>
                        <p class="indent-10 text-sm ml-10 mb-0 secretary">Linda Su</p>
                        <p class="indent-10 text-sm m-0">Brgy. Secretary</p>
                    </div>
                    <div>
                        <p class="text-sm m-0">Prepared by:</p>
                        <p class="indent-10 text-sm ml-10 mb-0 captain">Mark Bone</p>
                        <p class="indent-10 text-sm m-0">Brgy. Captain</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-primary back-to-page">Back</button>
                <div class="p-2"></div>
                <button class="btn btn-primary" id="print-btn">Print</button>
            </div>
        </div>
    </div>
    
    <?php include "c-footer-library.php"; ?>
    <script>
        $(document).ready(() => {
            let urlSearchParams = new URLSearchParams(window.location.search);

            if (urlSearchParams.get('id')) {
                $('#to-print-btn').removeClass('d-none');
            } else {
                $('#to-print-btn').addClass('d-none');
            }

            let selected_resident = {};

            $(".js-nmxaxnsdjfgr").text("Cebu");
            $(".js-jkaxndtq1zma").text("City of Talisay");
            $(".js-hbzxcvdfgftre").text(getUserBrgyInfo()['brgy_name']);

            let residents = [];

            $('#requestor').html('');
            $('#requestor').html('<option value="0">Please wait ...</option>');

            $.get( gv.api + "cims/resident_all", function (response) {
                residents = response;
                $('#requestor').html('');
                $('#requestor').html('<option value="0">Select Requestor</option>');
                response.forEach(resident => {
                    $('#requestor').append(`<option value='${resident.reference_id}'>${resident.firstname + ' ' + resident.lastname}</option>`);
                });

                if (urlSearchParams.get('id')) {
                    selected_resident = residents.find(res => res.reference_id == urlSearchParams.get('id'));
                    $('#requestor').val(selected_resident.reference_id).change();
                    appendInterpolations(selected_resident);
                }
            });

            $('.age').html('__');
            $('.name').html('_________');
            $('.birthdate').html('__/__/___');
            $('.this_date').html('__/__/___');
            
            $('#requestor').on('change', function () {
                selected_resident = residents.find(res => res.reference_id == $(this).val());
                appendInterpolations(selected_resident);
            })

            function appendInterpolations(selected_resident) {
                $('.name').html(selected_resident.firstname + (selected_resident.middlename ? " " + selected_resident.middlename[0].toUpperCase()+ ". " : " " ) + selected_resident.lastname);

                $('.age').html((new Date()).getFullYear() - new Date(selected_resident.birthday).getFullYear());
              
                let birthday_arr = new Date(selected_resident.birthday).toDateString().split(' ');
                birthday_arr.shift();
                let birthday = birthday_arr.join(' ');

                $('.birthdate').html(birthday);

                let today = new Date()

                $('.this_date').html(`${today.getMonth() + 1}/${today.getDate()}/${today.getFullYear()}`);


                if (urlSearchParams.get('sec')) {
                    $('#secretary').val(urlSearchParams.get('sec'));
                    $('.secretary').text(urlSearchParams.get('sec'));
                }

                if (urlSearchParams.get('cap')) {
                    $('#captain').val(urlSearchParams.get('cap'));
                    $('.captain').text(urlSearchParams.get('cap'));
                }
            }


            $('.js-hjgytrfdesw3').on('click', function () {
                let data = {};

                if ($('#requestor').val() == '0') {
                    alert('Please select a requestor!');
                    return;
                }
                
                if (!$('#secretary').val()) {
                    alert('Please fill up Secretary');
                    return;
                }

                if (!$('#captain').val()) {
                    alert('Please fill up Captain');
                    return;
                }

                data['type'] = 'bgry-clearance';
                data['captain'] = $('#captain').val();
                data['requestor'] = $('#requestor').val();
                data['secretary'] = $('#secretary').val();
                data['issue_date'] = new Date().toLocaleDateString();
                data['reference_id'] = Plugin_refid.generateLocal('PDT');
                data['prepared_by'] = Plugin_auth.getLocalUser()['reference_id'];

                $.get(gv.api + 'cims/barangay_printables?' + $.param(data)  , function (response) {
                    let url = window.location.href;
                    if (window.location.search) {
                        url = url.replace(window.location.search, '');
                    }

                    window.location.href = url+"?id="+response.data.requestor+"&sec="+response.data.secretary+"&cap="+response.data.captain;
                });
            });
        })

        $('#to-print-btn').on('click', function () {
            $('#pcoded').addClass('d-none');
            $('#print').removeClass('d-none');
        });

        $('.back-to-page').on('click', function () {
            $('#pcoded').removeClass('d-none');
            $('#print').addClass('d-none');
        })

        $('#print-btn').click(function () {
            $(this).parent().addClass('d-none');
            console.log($(this).parent())
            window.print();
        })

        window.onafterprint = function () {
            $('#print').addClass('d-none');
            $('#pcoded').removeClass('d-none');
            $('#print-btn').removeClass('d-none');  
        }
    </script>


</body>

</html>
