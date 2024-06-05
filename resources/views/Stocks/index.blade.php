
@section('content')

<div id="showStock">
    {{-- code de la fenetre modale --}}


</div>
<div class='n'>
    <div class="n">
        <div class="n">
           
        </div>
        <form id="searchForm" onsubmit="return submitForm(event)" >
            @csrf
            <input  class="n"
            type="text"  id="search" name="search" placeholder="Search something.." />
        </form>
    </div>
</div>





<div id="divResult">
    @include('stocks.search')
</div>

<div id="divDelete">
    @include('stocks.delete')
</div>


@endsection

@section('scripts')
    <script>
    function submitForm(event){
        event.preventDefault();
        var formData = $('#searchForm').serialize();
        var url = "{{ route('stocks.search')}}"   //  $("#searchForm").attr("action");

         //troisième methode de recherche sans actualisation de la page avec axios
        axios.post(url, formData)
        .then(response => {
                $("#divResult").html(response.data);
        })
        .catch(error => {
            console.log(error);
        });



 /*
 //deuxième methode de recherche sans actualisation de la page avec ajax
 $.ajax({
            type:'POST',
            url: url,
            data:formData,
            success: function(data) {
                $("#divResult").html(data);
            }
            error: function(error) {
                console.log(error);
            }
    });
*/




    }

/*
// soit vous traitez le clique ici avec $(document) ou avec $('.btnShow') dans la partial view products.search

    $(document).on('click',".btnShow",function(){
                    var product_id = $(this).attr('v');
                    alert(product_id);
            })
*/
        $(document).ready(function() {

/*

//première methode de recherche avec actualisation de la page sans ajax ou axios
            $("#btnSearch").on('click',function(){
                $.ajax({
                    url: "/products/test",
                    success: function(data) {
                        $("#divResult").html(data);
                    }
                });
            })
*/
        })
    </script>
@endsection