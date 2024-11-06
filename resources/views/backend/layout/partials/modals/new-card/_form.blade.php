<!--begin::Input group-->
<div class="d-flex flex-column mb-8 fv-row">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
        <span class="required">Target Title</span>
        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
    </label>
    <!--end::Label-->
    <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row g-9 mb-8">
    <!--begin::Col-->
    <div class="col-md-6 fv-row">
        <label class="required fs-6 fw-semibold mb-2">Assign</label>
        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
            <option value="">Select user...</option>
            <option value="1">Karina Clark</option>
            <option value="2">Robert Doe</option>
            <option value="3">Niel Owen</option>
            <option value="4">Olivia Wild</option>
            <option value="5">Sean Bean</option>
        </select>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6 fv-row">
        <label class="required fs-6 fw-semibold mb-2">Due Date</label>
        <!--begin::Input-->
        <div class="position-relative d-flex align-items-center">
            <!--begin::Icon-->
            <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
                <span class="path5"></span>
                <span class="path6"></span>
            </i>
            <!--end::Icon-->
            <!--begin::Datepicker-->
            <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
            <!--end::Datepicker-->
        </div>
        <!--end::Input-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-8">
    <label class="fs-6 fw-semibold mb-2">Target Details</label>
    <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-8 fv-row">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
        <span class="required">Tags</span>
        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
    </label>
    <!--end::Label-->
    <input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-stack mb-8">
    <!--begin::Label-->
    <div class="me-5">
        <label class="fs-6 fw-semibold">Adding Users by Team Members</label>
        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
    </div>
    <!--end::Label-->
    <!--begin::Switch-->
    <label class="form-check form-switch form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
        <span class="form-check-label fw-semibold text-muted">Allowed</span>
    </label>
    <!--end::Switch-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="mb-15 fv-row">
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack">
        <!--begin::Label-->
        <div class="fw-semibold me-5">
            <label class="fs-6">Notifications</label>
            <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
        </div>
        <!--end::Label-->
        <!--begin::Checkboxes-->
        <div class="d-flex align-items-center">
            <!--begin::Checkbox-->
            <label class="form-check form-check-custom form-check-solid me-10">
                <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
                <span class="form-check-label fw-semibold">Email</span>
            </label>
            <!--end::Checkbox-->
            <!--begin::Checkbox-->
            <label class="form-check form-check-custom form-check-solid">
                <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
                <span class="form-check-label fw-semibold">Phone</span>
            </label>
            <!--end::Checkbox-->
        </div>
        <!--end::Checkboxes-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Input group-->
