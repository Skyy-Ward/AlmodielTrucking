$(document).ready(function () {

  new AirDatepicker('#empBirthDate', {
    dateFormat: 'yyyy-MM-dd',
    autoClose: true,
    isMobile: true,
    fixedHeight: true,
    locale: {
      days: ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
      daysShort: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
      daysMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
      months: ['January','February','March','April','May','June','July','August','September','October','November','December'],
      monthsShort: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
      today: 'Today',
      clear: 'Clear',
      dateFormat: 'yyyy-MM-dd',
      timeFormat: 'HH:mm',
      firstDay: 0
    }
    });

  const stepTitles = {
    1: 'Step 1: Employment Type',
    2: 'Step 2: Personal Information',
    3: 'Step 3: Contact Information'
  };

  const stepper = document.querySelector('.stepper');

  if (stepper) {
    const observer = new MutationObserver(() => {
      $('.tab-pane').each(function (index) {
        if ($(this).hasClass('active')) {
          const stepNum = index + 1;
          const total = 3;

          $('#empStepTitle').text(stepTitles[stepNum] || '');
          $('#empBtnBack').css('visibility', stepNum === 1 ? 'hidden' : 'visible');

          if (stepNum === total) {
            $('#empBtnNext').text('Register').off('click.register').on('click.register', function () {
              saveEmployee();
            });
          } else {
            $('#empBtnNext').text('Next').off('click.register');
          }
        }
      });
    });

    observer.observe(stepper, { attributes: true, subtree: true, attributeFilter: ['class'] });
  }

  $('#empBtnBack').css('visibility', 'hidden');

  function saveEmployee() {
    const formData = new FormData();
    formData.append('empType',        $('#empType').val());
    formData.append('empFName',       $('#empFName').val());
    formData.append('empLName',       $('#empLName').val());
    formData.append('empMI',          $('#empMI').val());
    formData.append('empSuffix',      $('#empSuffix').val());
    formData.append('empBirthDate',   $('#empBirthDate').val());
    formData.append('empPhoneNumber', $('#empPhoneNumber').val());
    formData.append('empEmail',       $('#empEmail').val());
    formData.append('empStatus',      'active'); // auto set

    $.ajax({
      url: 'ajax/employee_save_record.ajax.php',
      method: 'POST',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'text',
      success: function (response) {
        Swal.fire({
            title: 'Employee registered!',
            icon: 'success',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'btn btn-success'
            },
            buttonsStyling: false
        }).then(function(result){
            if(result.value){
                window.location = "employee-reg";
            }
        });
        
      },
      error: function () {
        console.error('Something went wrong.');
      }
    });
  }

});