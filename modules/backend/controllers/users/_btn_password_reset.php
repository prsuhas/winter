<div class="loading-indicator-container">
    <button
        type="button"
        data-request="onManualPasswordReset"
        data-load-indicator="<?= e(trans('backend::lang.account.working')) ?>"
        data-request-confirm="<?= e(trans('backend::lang.account.manual_password_reset_confirm')) ?>"
        class="btn btn-warning wn-icon-key"
        style="width: 100%; text-align: center"
    >
        <?= e(trans('backend::lang.account.password_reset_email')) ?>
    </button>
</div>