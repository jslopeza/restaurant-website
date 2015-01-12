$(document).ready(function() {
    simpleCart({
        cartColumns: [{
            attr: 'name',
            label: 'Name'
        }, {
            view: 'currency',
            attr: 'price',
            label: 'Price'
        }, {
            view: 'decrement',
        }, {
            attr: 'quantity',
            label: 'Qty'
        }, {
            view: 'increment',
        }, {
            view: 'currency',
            attr: 'total',
            label: 'SubTotal',
        }, {
            view: 'remove',
            text: 'Remove',
            label: false
        }],
        cartStyle: 'table',
    });

    
    $('.submit-form').click(function(e) {
        e.preventDefault();
        $('input[name=grandTotal]').val(simpleCart.grandTotal());
        $('#checkoutForm').submit();
    });
});
