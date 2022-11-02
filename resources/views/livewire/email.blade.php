<div>
    <form wire:submit.prevent="sendEmail">
        <div class="d-flex full-width form-responsive">
            <div class="input-text d-flex align-center" required>
                <input type="text" id="subject" placeholder="Subject" wire:model="subject" value="">
            </div>
        </div>
        <div class="d-flex full-width form-responsive">
            <div class="input-textarea" wire:ignore>
                <label style="font-size: 14px">Message</label>
                <textarea id="message"  wire:model.debounce.5000ms="message"></textarea>
            </div>
        </div>
        <div class="d-flex justify-between align-center">
            <div class="d-flex">
                <div class="button-primary">
                    <button type="submit" id="send-mail" onclick="$(this).html('Sending...')">Send</button>
                </div>
                @if(!$draftId)
                <div class="button-secondary">
                    <button type="button" wire:click="saveDraft">Draft</button>
                </div>
                @endif
            </div>
            <div>
                @if($draftId)
                <div class="is-draft">
                    <span class="fa fa-check-circle"></span> Draft
                </div>
                @endif
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.tiny.cloud/1/r9a5eqnpeueslw19rsf5ks22sfrzthxxjeikv8mclszcl7s6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/r9a5eqnpeueslw19rsf5ks22sfrzthxxjeikv8mclszcl7s6/tinymce/6/plugins.min.js" referrerpolicy="origin"></script>

<script>
let saveMessage=0;
let timeSave;
let editorElm;
tinymce.init({
    selector:'textarea#message',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tableofcontents footnotes mergetags autocorrect',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    width: '100%',
    height: 400,
    forced_root_block: false,
    setup: function (editor) {
        editorElm=editor;
        editor.on('init change', function () {
            editor.save();
        });
        editor.on('keyup', function (e) {
            if(saveMessage==1){
                saveMessage=0;
                clearTimeout(timeSave);
                timeSave=null;
            }else{
                if(!timeSave){
                    timeSave=setTimeout(function(){
                        saveMessage=1;
                        @this.set('message', editorElm.getContent());
                    },15000);
                }
            }
        });
    }
});

let autoSaveInterval;
if(autoSaveInterval){
    clearInterval(autoSaveInterval);
    autoSaveInterval=null;
}
autoSaveInterval=setInterval(function(){
    @this.emit('saveDraft', true);
},30000);

$('#send-mail').click(function(e){
    let contentTextLength = $('.content-text').children(':not(:hidden)').length;
    let userCheckedLength = $('.user-checked-container').children(':not(:hidden)').length;
    let fixedRecipient = $('.fixed-recipients').length;
    if(contentTextLength==0 && userCheckedLength==0 && fixedRecipient==0){
        openDialog('Error', 'Please specify at least one recipient.');
        e.preventDefault();
    }
    @this.set('message', editorElm.getContent());
})
</script>