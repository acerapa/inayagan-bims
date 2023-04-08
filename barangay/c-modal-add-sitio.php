<div class="modal js-hjbcvxdsebms" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sitio Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row mt-4">
          <label class="col-sm-4 col-form-label">Sitio Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-lg js-klzw39azmcbd">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary js-ghtfrdew3swe">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

  $(".js-ghtfrdew3swe").click(function () {
    var args = {
      table: 'cims_sitio',
      column: {
        reference_id: Plugin_refid.generateLocal('STO'),
        name: $('.js-klzw39azmcbd').val(),
        city_code: getUserCityInfo()['city_code'],
        brgy_code: getUserBrgyInfo()['brgy_code'],
        created_by: Plugin_auth.getLocalUser()['reference_id']
      }
    };

    if($('.js-klzw39azmcbd').val() == '') {
      Swal.fire('Warning', 'Sitio successfully created', 'success');
    }
    else {
      showLoading();
      Plugin_ui.disableButton(".js-ghtfrdew3swe", "Wait...");
      $.get( gv.api + "api/plugin_query/insertGetId?" + $.param(args), function (response) {
        hideLoading();
        Plugin_ui.enableButton(".js-ghtfrdew3swe", "Submit");
        if(response.success) {
          hideAddSitio();
          Swal.fire('Success', 'Sitio successfully created', 'success').then( async () => {
            $('.js-klzw39azmcbd').val('');
          });
        }
        else {
          Swal.fire('Warning', 'Something went wrong, please try again later.', 'warning');
        }
      });
    }
  });
  
  function showAddSitio() {
    $(document).ready(function () {
      $(".js-hjbcvxdsebms").modal("show");
    });
  }

  function hideAddSitio() {
    $(document).ready(function () {
      $(".js-hjbcvxdsebms").modal("hide");
    });
  }

</script>