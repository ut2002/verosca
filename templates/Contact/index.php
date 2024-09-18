<main>
    <div class="main-wrapper">
        <div class="contact-page">
            <div class="main-banner">
                <div class="container">
                    <div class="heading">
                        Contact with us
                    </div>
                </div>
            </div>
            <div class="section-contact">
                <div class="container">
                    <div class="info">
                        <div class="d-flex flex-wrap">
                            <div class="item">
                                Europe Contact:
                                <br>
                                Europe@verosca.com
                            </div>
                            <div class="item">
                                Africa Contact:
                                <br>
                                Africa@verosca.com
                            </div>
                            <div class="item">
                                America Contact:
                                <br>
                                America@verosca.com
                            </div>
                            <div class="item">
                                Asia Contact:
                                <br>
                                Asia@verosca.com
                            </div>
                            <div class="item">
                                Internation Sales Dept.:
                                <br>
                                International@verosca.com
                            </div>
                            <div class="item">
                                For more information:
                                <br>
                                Info@verosca.com
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <div class="title">
                            Leave a message
                        </div>
                        <form method="POST" action="#" id="formContent">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <input type="text" id="floatingName" maxlength="255" class="w-100" placeholder="Your name" />
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <input type="text" id="floatingEmail" maxlength="255" class="w-100" placeholder="Your email" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <input type="text" id="floatingSubject" maxlength="255" class="w-100" placeholder="Subject" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="w-100">
                                            <textarea rows="5" id="floatingMessage" maxlength="1000" class="w-100" placeholder="Message"></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="button" onClick="sendContact();" class="btn btn-href">Send a message</button>
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
