    // Autogrow Textarea

function expandTextarea(id) {
    var $element = $('textarea.autosize').get(0);  
    
    $element.addEventListener('keyup', function() {
        this.style.overflow = 'hidden';
        this.style.height = 0;
        this.style.height = this.scrollHeight + 'px';
    }, false);
}

expandTextarea('txtarea');

