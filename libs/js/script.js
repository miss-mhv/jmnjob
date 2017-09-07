/**
 * Created by Miss Mhv on 30/08/2017.
 */

$(document).ready(function(){
    $('.collapsible').collapsible({
        accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
});

function materializeSelects() {
    var label, parentEl;
    document.querySelectorAll('select').forEach(function(control) {
        parentEl = control.parentElement;
        control.classList.add('mdl-selectfield__select');
        if (parentEl.tagName !== 'DIV') {
            return;
        }
        parentEl.classList.add('mdl-selectfield', 'mdl-js-selectfield');
        label = parentEl.querySelector('label');
        if (label) {
            label.setAttribute('for', control.id || control.name)
            label.classList.add('mdl-selectfield__label');
        }
    });
}

function materializeControls() {
    materializeTextInputs();
    materializeSelects();
}