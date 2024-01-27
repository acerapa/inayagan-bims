<div class="modal js-jkaghbcnmsdfe" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Purok Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row mt-4">
          <label class="col-sm-4 col-form-label">Purok Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-lg js-jkavzxnmashf">
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
      table: 'cims_purok',
      column: {
        reference_id: Plugin_refid.generateLocal('PRK'),
        name: $('.js-jkavzxnmashf').val(),
        city_code: getUserCityInfo()['city_code'],
        brgy_code: getUserBrgyInfo()['brgy_code'],
        created_by: Plugin_auth.getLocalUser()['reference_id']
      }
    };

    if($('.js-jkavzxnmashf').val() == '') {
      Swal.fire('Warning', 'Purok successfully created', 'success');
    }
    else {
      showLoading();
      Plugin_ui.disableButton(".js-ghtfrdew3swe", "Wait...");
      $.get( gv.api + "api/plugin_query/insertGetId?" + $.param(args), function (response) {
        hideLoading();
        Plugin_ui.enableButton(".js-ghtfrdew3swe", "Submit");
        if(response.success) {
          hideAddPurok();
          Swal.fire('Success', 'Purok successfully created', 'success').then( async () => {
            $('.js-jkavzxnmashf').val('');
            fetchPurok(getUserBrgyInfo()['brgy_code'], 1);
          });
        }
        else {
          Swal.fire('Warning', 'Something went wrong, please try again later.', 'warning');
        }
      });
    }
  });
  
  function showAddPurok() {
    $(document).ready(function () {
      $(".js-jkaghbcnmsdfe").modal("show");
    });
  }

  function hideAddPurok() {
    $(document).ready(function () {
      $(".js-jkaghbcnmsdfe").modal("hide");
    });
  }

</script>