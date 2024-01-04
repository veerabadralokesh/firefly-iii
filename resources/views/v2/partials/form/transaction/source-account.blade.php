<div class="row mb-3">
    <label :for="'source_' + index"
           class="col-sm-1 col-form-label d-none d-sm-block">
        <em title="{{ __('firefly.source_account') }}" class="fa-solid fa-arrow-right"></em>
    </label>
    <div class="col-sm-10">
        <input type="text"
               class="form-control ac-source"
               :id="'source_' + index"
               x-model="transaction.source_account.alpine_name"
               :data-index="index"
               @changed="changedSourceAccount"
               placeholder="{{ __('firefly.source_account')  }}">
    </div>
</div>