function addToCart(event) {
    event.preventDefault();
    let urlCart = $(this).data('url');
    
    $.ajax({
        type: "GET", // Change to "POST" if your route requires it
        url: urlCart,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        dataType: 'json',
        success: function(data) {
            alert('Thêm sản phẩm thành công');
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Log error details to console for debugging
            alert('Thêm sản phẩm thất bại');
        }
    });
}

$(function() {
    $('.add_to_cart').on('click', addToCart);
});

$(document).ready(function() {
    // Function to remove item from cart
    function removeItem(button) {
        let url = $(button).data('url');
    
        $.ajax({
            type: "DELETE",
            url: url,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            dataType: 'json',
            success: function(response) {
                alert(response.message);  // Display success message
    
                // Remove the item row from the DOM
                $(button).closest('.row').remove();
    
                // Update total cart price
                updateCartTotal();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Failed to remove item from cart');
            }
        });
    }
    

    // Bind remove button click event
    $('.remove-btn').on('click', function(event) {
        event.preventDefault();
        removeItem(this);
    });
});

function updateCartTotal() {
    let total = 0;

    $('.quantity_input').each(function() {
        let quantity = $(this).val();
        let price = $(this).closest('.row').find('.price').data('price');
        total += quantity * price;
    });

    $('#total_price').text(total.toLocaleString());
}

$(document).ready(function() {
    function updateQuantity(input) {
        let url = $(input).data('url');
        let newQuantity = $(input).val();
    
        $.ajax({
            type: "POST",
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                quantity: newQuantity
            },
            dataType: 'json',
            success: function(response) {
                // alert('Quantity updated!');
    
                // Update item price
                let price = $(input).closest('.row').find('.price').data('price');
                let itemTotal = newQuantity * price;
                $(input).closest('.row').find('.item-total').text(itemTotal.toLocaleString());
    
                // Update total cart price
                updateCartTotal();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);alert('Failed to update quantity');
            }
        });
    }
    
    

    // Listen for changes in the quantity input field
    $('.quantity_input').on('change', function() {
        updateQuantity(this);
    });

    // Decrease quantity on button click
    $('.decrease-btn').on('click', function(event) {
        event.preventDefault();
        let input = $(this).siblings('.quantity_input')[0];
        input.stepDown();
        updateQuantity(input);
    });

    // Increase quantity on button click
    $('.increase-btn').on('click', function(event) {
        event.preventDefault();
        let input = $(this).siblings('.quantity_input')[0];
        input.stepUp();
        updateQuantity(input);
    });
});