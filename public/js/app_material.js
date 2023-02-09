// mdc.textField.MDCTextField.attachTo(document.querySelector('.mdc-text-field'));
// mdc.textField.MDCTextField.attachTo(document.querySelector<HTMLElement>('.mdc-text-field'));

const form_material = [].map.call(document.querySelectorAll('.mdc-text-field'), function (el){
    return new mdc.textField.MDCTextField.attachTo(el);
    // return new MDCTextField(document.querySelector<HTMLElement>('.mdc-text-field'));
});