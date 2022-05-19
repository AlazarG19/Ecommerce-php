$(document).ready(function(){
    // banner owl carouse
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1
    })
    $("#top-sale .owl-carousel").owlCarousel({
        loop : true,
        nav : true,
        dots : false,
        responsive : {
            0:{
                items : 1
            },
            600:{
                items: 3
            },
            1000:{
                items : 5
            }
        }
    })
    // isotope filter 
    var $grid = $('.grid').isotope({
        itemSelector : '.grid-items',
        layoutMode : "fitRows"})
    // filter items on button click
    $(".button-group").on("click", "button", function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
    $("#new-phones .owl-carousel").owlCarousel({
        loop : true,
        nav : false,
        dots : true,
        responsive : {
            0:{
                items : 1
            },
            600:{
                items: 3
            },
            1000:{
                items : 5
            }
        }
    })
    $("#blogs .owl-carousel").owlCarousel({
        loop : true,
        nav : false,
        dots : true,
        responsive : {
            0:{
                items : 1
            },
            800:{
                items: 3
            }}
    })
    // product qty sectoin
    let $qtyup = $(".qty .qty-up")
    let $qtydown = $(".qty .qty-down")
    $qtyup.click(function () {

        let $input = $(`.qty-input[data-id = '${$(this).data("id")}']`)
        let $price = $(`.product_price[data-id = '${$(this).data("id")}']`)
        let $deal_price = $(`#deal-price`)
        $.ajax({
            url: "Template/ajax.php",
            type: "post",
            data: {
                itemid : $(this).data("id"),
            },
            success: function (data) {
                // console.log("this is the data",data)
                let obj = JSON.parse(data)
                let item_price = obj[0]['item_price']
                if($input.val() >= 1 && $input.val() < 10){
                    $input.val(+$input.val() + 1)
                    // increase price of the prodcut 
                    $price.text(parseInt(item_price * $input.val()).toFixed(2))
                
                    //change the price of total
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price)
                    $deal_price.text(subtotal.toFixed(2))
                }

            }
        })
    }) 
    $qtydown.click(function () {
        let $input = $(`.qty-input[data-id = '${$(this).data("id")}']`)
        let $price = $(`.product_price[data-id = '${$(this).data("id")}']`)
        let $deal_price = $(`#deal-price`)
        $.ajax({
            url: "Template/ajax.php",
            type: "post",
            data: {
                itemid : $(this).data("id"),
            },
            success: function (data) {
                // console.log("this is the data",data)
                let obj = JSON.parse(data)
                let item_price = obj[0]['item_price']
                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(+$input.val() - 1)
                     
                    // decrease price of the prodcut 
                    $price.text(parseInt(item_price * $input.val()).toFixed(2))
                
                    //change the price of total
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price)
                    $deal_price.text(subtotal.toFixed(2))
                }

            }
        })
        
    }) 
})