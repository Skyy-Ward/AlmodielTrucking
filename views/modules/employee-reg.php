<div class="row justify-content-center">
  <div class="col-12 col-lg-10 col-xl-9">
    <div class="card">
      <div class="card-body p-4">

        <h4 class="text-center mb-4">Employee Registration</h4>

        <div class="stepper">

          <!-- Step Indicators -->
          <div class="d-flex align-items-center mb-4 stepper-nav">
            <ul class="nav nav-pills d-flex gap-3 flex-wrap justify-content-center w-100">
              <li class="nav-item">
                <button class="nav-link active" type="button">1</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" type="button">2</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" type="button">3</button>
              </li>
            </ul>
          </div>

          <!-- Progress Bar -->
          <div class="progress mb-4" style="height:5px;">
            <div class="progress-bar" role="progressbar" style="width:0%;height:5px;"></div>
          </div>

          <!-- Step Title -->
          <p class="text-center text-muted small mb-4" id="empStepTitle">Step 1: Employment Type</p>

          <!-- Tab Content -->
          <div class="tab-content">

            <!-- STEP 1: Employment Type -->
            <div class="tab-pane show active" id="emp-step-1">
              <h6 class="text-uppercase text-muted mb-3">Employment Type</h6>

              <div class="row">
                <div class="col-12 col-md-6 mb-3">
                  <label class="form-label">Employee Type</label>
                  <div class="form-icon">
                    <i class="ri-briefcase-line text-muted"></i>
                    <select class="form-control form-control-icon" id="empType">
                      <option value="">Select Type</option>
                      <option value="driver">Driver</option>
                      <option value="assistant">Assistant</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- STEP 2: Personal Information -->
            <div class="tab-pane" id="emp-step-2">
              <h6 class="text-uppercase text-muted mb-3">Personal Information</h6>

              <div class="row">
                <div class="col-12 col-md-5 mb-3">
                  <label class="form-label">First Name</label>
                  <div class="form-icon">
                    <i class="ri-user-line text-muted"></i>
                    <input type="text" class="form-control form-control-icon" id="empFName">
                  </div>
                </div>
                <div class="col-12 col-md-5 mb-3">
                  <label class="form-label">Last Name</label>
                  <div class="form-icon">
                    <i class="ri-user-line text-muted"></i>
                    <input type="text" class="form-control form-control-icon" id="empLName">
                  </div>
                </div>
                <div class="col-12 col-md-2 mb-3">
                  <label class="form-label">M.I.</label>
                  <div class="form-icon">
                    <i class="ri-font-size text-muted"></i>
                    <input type="text" class="form-control form-control-icon" id="empMI" maxlength="1">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-4 mb-3">
                  <label class="form-label">Suffix</label>
                  <div class="form-icon">
                    <i class="ri-text text-muted"></i>
                    <input type="text" class="form-control form-control-icon" id="empSuffix" placeholder="e.g. Jr., Sr., III">
                  </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                  <label class="form-label">Birth Date</label>
                  <div class="form-icon">
                    <i class="ri-calendar-line text-muted"></i>
                    <input type="text" class="form-control form-control-icon" id="empBirthDate" placeholder="Birth Date">
                  </div>
                </div>
              </div>
            </div>

            <!-- STEP 3: Contact Information -->
            <div class="tab-pane" id="emp-step-3">
              <h6 class="text-uppercase text-muted mb-3">Contact Information</h6>

              <div class="row">
                <div class="col-12 col-md-6 mb-3">
                  <label class="form-label">Phone Number</label>
                  <div class="form-icon">
                    <i class="ri-phone-line text-muted"></i>
                    <input type="tel" class="form-control form-control-icon" id="empPhoneNumber" maxlength="11">
                  </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                  <label class="form-label">Email</label>
                  <div class="form-icon">
                    <i class="ri-mail-line text-muted"></i>
                    <input type="email" class="form-control form-control-icon" id="empEmail">
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- end tab-content -->

          <!-- Navigation -->
          <div class="d-flex justify-content-between mt-4">
            <button class="btn btn-outline-secondary previestab" type="button" id="empBtnBack">Back</button>
            <button class="btn btn-primary nexttab ms-auto" type="button" id="empBtnNext">Next</button>
          </div>

        </div>
        <!-- end stepper -->

      </div>
    </div>
  </div>
</div>

<!-- <style>
  .nav-pills .nav-link {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    background-color: var(--bs-secondary-bg, #e9ecef);
    color: var(--bs-secondary, #6c757d);
    border: none;
    transition: background-color 0.3s, color 0.3s;
  }
  .nav-pills .nav-link.active {
    background-color: var(--bs-primary, #696cff);
    color: #fff;
  }
  .nav-pills .nav-link.activeComplete {
    background-color: var(--bs-success, #71dd37);
    color: #fff;
  }
</style> -->