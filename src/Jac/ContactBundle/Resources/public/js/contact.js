$(function() {
    function Field(args) {
        var settings = $.extend({
            container: '#field'
        }, args||{});

        this.container = $(settings.container);
    }

    $.extend(Field.prototype, {
        isEmpty: function() {
            var value = this.container.find('input').val();
            if (value) {
                return false;
            }
            return true;
        },
        hideError: function() {
            this.container.find('.error').hide();
        },
        showError: function() {
            this.container.find('.error').css('display', 'inline-block');
        },
        validate: function() {
            this.hideError();
            if (!this.isEmpty()) {
                return true;
            }
            else {
                this.showError();
                return false;
            }
        }
    });

    function Form() {
        this.container = $('#contact-form');
        this.fullName = new Field({container: '#contact-form-full-name', error: ''});
        this.address = new Field({container: '#contact-form-address'});
        this.phoneNumber = new Field({container: '#contact-form-phone-number'});
        this.email = new Field({container: '#contact-form-email-address'});

        this.onSubmit();
    };

    $.extend(Form.prototype, {
        isValid: function() {
            var valid = true;
            for (var key in this) {
                var field = this[key];
                if (field instanceof Field) {
                    if (!field.validate()) {
                        valid = false;
                    }
                }
            }
            return valid;
        },
        onSubmit: function() {
            var self = this;
            this.container.submit(function() {
                if (self.isValid()) {
                    console.log('is valid');
                    return true;
                }
                else {
                    console.log('is not valid');
                    return false;
                }
            });
        }
    });

    var form = new Form();
});