<?php include('header.php') ?>
<div class="container " style ="margin-top: var(--header-mg);" >
    <div class="row">
        <div class="col-md-12">
            <div class = "manager-header d-flex justify-content-between">
                <div class ="heading_title">Quản lý đơn hàng</div>
                <div class ="tour d-flex ">
                <p><i class="fa fa-plane"></i> Vé máy bay</p>
                </div>
            </div>
            <div aria-label="tour info" class="MuiTabs-flexContainer" role="tablist"><button class="MuiButtonBase-root MuiTab-root jss103 MuiTab-textColorInherit" tabindex="-1" type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Tất cả</span></button><button class="MuiButtonBase-root MuiTab-root jss103 MuiTab-textColorInherit" tabindex="-1" type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Đang chờ phục vụ</span></button><button class="MuiButtonBase-root MuiTab-root jss103 MuiTab-textColorInherit Mui-selected jss104" tabindex="0" type="button" role="tab" aria-selected="true"><span class="MuiTab-wrapper">Đang phục vụ</span></button><button class="MuiButtonBase-root MuiTab-root jss103 MuiTab-textColorInherit" tabindex="-1" type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Hoàn thành</span></button><button class="MuiButtonBase-root MuiTab-root jss103 MuiTab-textColorInherit" tabindex="-1" type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Chờ xử lý huỷ</span></button></div>
            <div class="item"><div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-3"><div class="MuiAutocomplete-root MuiAutocomplete-hasClearIcon MuiAutocomplete-hasPopupIcon" role="combobox" aria-expanded="false"><div class="MuiFormControl-root MuiTextField-root jss109 jss108 MuiFormControl-fullWidth"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiFormLabel-filled" data-shrink="true" for="timeFilterOptions" id="timeFilterOptions-label">Thời gian</label><div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiAutocomplete-inputRoot MuiInputBase-fullWidth MuiInput-fullWidth MuiInputBase-formControl MuiInput-formControl MuiInputBase-adornedEnd"><input aria-invalid="false" autocomplete="off" id="timeFilterOptions" placeholder="Chọn khoảng thời gian" type="text" class="MuiInputBase-input MuiInput-input MuiAutocomplete-input MuiAutocomplete-inputFocused MuiInputBase-inputAdornedEnd" aria-autocomplete="list" autocapitalize="none" spellcheck="false" value="Tất cả"><div class="MuiAutocomplete-endAdornment"><button class="MuiButtonBase-root MuiIconButton-root MuiAutocomplete-clearIndicator MuiAutocomplete-clearIndicatorDirty" tabindex="-1" type="button" aria-label="Clear" title="Clear"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></span><span class="MuiTouchRipple-root"></span></button><button class="MuiButtonBase-root MuiIconButton-root MuiAutocomplete-popupIndicator" tabindex="-1" type="button" aria-label="Open" title="Open"><span class="MuiIconButton-label"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"></path></svg></span><span class="MuiTouchRipple-root"></span></button></div></div></div></div></div>
        
        </div>
        </div>
        <div class="view">
            <img src="nofligth.png" alt="">
        </div>
    </div>
</div>



<?php include('footer.php') ?>