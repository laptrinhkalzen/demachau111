R.BlogDetail = {
    Init: function() {
        R.BlogDetail.location_id = R.CurrentLocationId();
        R.BlogDetail.culture = R.Culture();
        R.BlogDetail.LoadListProduct();
        R.BlogDetail.AddViewCountArticle();
        R.BlogDetail.RegisterEvent();
    },
    RegisterEvent: function () {
        $('.toc_title').off('click').on('click', function () {
            $('.toc_list').toggle();
        })

    },
    LoadListProduct: function() {

        $('product').each(function(element) {
            var el = $(this);
            var product_list = $(this).data('id-list');
            var params = {
                product_ids: product_list,
                location_id: R.BlogDetail.location_id
            }
            var url = R.BlogDetail.culture + "/Blog/ProductsInArticle";
            $.post(url, params, function(response) {
                console.log(response);
                el.replaceWith(response);
                R.Extra.BindingExtraToProduct();
                R.BlogDetail.RegisterEvent();
            })
        })
    },
    AddViewCountArticle: function() {

        var id_san_pham = $('.detail-container').data('id');
        var url = "/Extra/CreateViewCount";
        var params = {
            objectId: id_san_pham,
            type: 'article'
        }
        $.post(url, params, function(response) {
            console.log(response);
        })

    },
}



$(function() {
    R.BlogDetail.Init()
})