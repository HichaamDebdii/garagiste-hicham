

<div class="container-fluid">

</div>

<script>
    $(document).on('click',".btnShow",function(){
        var stock_id = $(this).attr('v');
        var myData = {'stock_id': product_id};
        var url = '{{ route('stocks.show') }}';

        axios.post(url, myData)
        .then(response => {
                $("#showStock").html(response.data);
                $("#myModalShowStock").show();
        })
        .catch(error => {
            console.log(error);
        });
    })


    $(document).on("click",".btnDelete",function(){
        $("#id").val($(this).attr('v'));
        $("#myModalDeleteStock").show();
    })
</script>