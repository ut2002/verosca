<main>
    <div class="main-wrapper">
        <div class="contact-page">
            <div class="main-banner" style="background-image: url(<?= $text['banner']['image'] ?>)">
                <div class="container">
                    <div class="heading">
                        <?= $text['banner']['heading'] ?>
                    </div>
                </div>
            </div>
            <div class="section-contact">
                <div class="container">
                    <div class="info">
                        <div class="d-flex flex-wrap">
                            <?php foreach ($text['info'] as $info): ?>
                                <div class="item">
                                    <?= $info ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="contact-form">
                        <div class="title">
                            <?= $text['form']['title'] ?>
                        </div>
                        <form method="POST" action="#" id="formContent">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <input type="text" id="floatingName" maxlength="255" class="w-100" placeholder="<?= $text['form']['name']['title'] ?>" />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <input type="text" id="floatingEmail" maxlength="255" class="w-100" placeholder="<?= $text['form']['email']['title'] ?>" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <input type="text" id="floatingSubject" maxlength="255" class="w-100" placeholder="<?= $text['form']['subject']['title'] ?>" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <textarea rows="5" id="floatingMessage" maxlength="1000" class="w-100" placeholder="<?= $text['form']['message']['title'] ?>"></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="button" onClick="sendContact();" class="btn btn-href"><?= $text['form']['button'] ?></button>
                                </div>
                            </div>
                        </form>
                        <div id="formAlert" class="d-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php $this->start('script'); ?>
<script>
function sendContact() {
    let valid;
    valid = validateContact();
    if(valid) {
        $.ajax({
            type:"POST",
            data:{
                name : $("#floatingName").val(),
                email : $("#floatingEmail").val(),
                subject : $("#floatingSubject").val(),
                message : $("#floatingMessage").val(),
            },
            url:"/contact/store",
            beforeSend: function () {
                $('#formContent').remove();
                $('#formAlert').removeClass('d-none').html('<?= $text['form']['progress_mes']; ?>');
            },
            success : function () {
                $('#formAlert').html('<?= $text['form']['success_mes']; ?>');
            },
            error:function (){
                $('#formAlert').html('<?= $text['form']['success_mes']; ?>');
            }
        });
    }
}

function validateContact() {
    let valid = true;
    if(!$("#floatingName").val()) {
        $("#floatingName").addClass("is-invalid");
        valid = false;
    }
    else {
        $("#floatingName").removeClass("is-invalid");
    }
    if(!$("#floatingEmail").val() || !$("#floatingEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#floatingEmail").addClass("is-invalid");
        valid = false;
    }
    else {
        $("#floatingEmail").removeClass("is-invalid");
    }
    if(!$("#floatingSubject").val()) {
        $("#floatingSubject").addClass("is-invalid");
        valid = false;
    }
    else {
        $("#floatingSubject").removeClass("is-invalid");
    }
    if(!$("#floatingMessage").val()) {
        $("#floatingMessage").addClass("is-invalid");
        valid = false;
    }
    else {
        $("#floatingMessage").removeClass("is-invalid");
    }
    return valid;
}
</script>
<?php $this->end(); ?>
