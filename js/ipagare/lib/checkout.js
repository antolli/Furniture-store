var IpgValidatorGratis = Class.create({
    initialize : function(setup) {
        this.paymentMethod = 'payment_form_' + setup.paymentMethod;
    },
    cpf: function(element){
        element.value = this._mcpf(element.value);
    },
    numeric: function(element){
        element.value = this._mnum(element.value);
    },
    _mcpf: function(v){
        v=v.replace(/\D/g,'')
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
        return v
    },
    _mnum: function(v){
        v=v.replace(/\D/g,'');
        return v;
    }
});

var IpgToggleToolTipGratis = Class.create({
    initialize : function() {
        this.tip = $('ipagare-payment-tool-tip');
    },
    insert: function(event) {
        if(this.tip) {
            this.tip.setStyle({
                left: (Event.pointerX(event)-100)+'px',
                top: (Event.pointerY(event)-300)+'px'
            });
            this.tip.toggle();
        }
        Event.stop(event);
    }
});