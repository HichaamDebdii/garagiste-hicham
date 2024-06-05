@extends("Stocks.index2")
@section('content')
<div class="container-fluid">
    <!-- Example table for content yield -->
   <div>
    <h1>LISTE DE STOCK</h1>
   </div>
   <div class="relative overflow-x-auto">

    <table id="lstProducts">
        <tr class="hed">
            <th class="">ID</th>
            <th class="">part Name</th>
            <th class="">part Referenc</th>
            <th class="">Supplier</th>
            <th class="">Price</th>
            <th class="">Action</th>
        </tr>
        @foreach ($stocks as $stock)
            <tr id="row{{$stock->id}}" class="body">
                <td class="ID">{{ $stock->id}}</td>
                <td>{{ $stock->partName}}</td>
                <td>{!! $stock->partReference !!}</td>
                <td>{{ $stock->supplier}}</td>
                <td>{{ $stock->price}}</td>
                <td>
                    <button class="show" v="{{$stock->id}}">Show</button>
                    <button class="updat" v="{{$stock->id}}">{{ __('Edit')}}</button>
                    <button class="delete" v="{{$stock->id}}">{{ trans('Delete')}}</button>
                </td>
            </tr>
                    <style>
                       
                h1{ font-size: 30px;
                margin-top: 30px;
            margin-left: 40px;}
                body {
                    font-family: 'Figtree', sans-serif;
                    background-color: #f8f9fa;
                    margin: 0;
                    padding: 0;
                    width: 1000px;
                }
            
                
                
                .show {
                    background-color: #007bff;
                   
                }
            
                .add:hover {
                    background-color: #0056b3;
                }
            
                .relative {
                    margin: 30px auto;
                    width: 1000px;
                    background-color: #fff;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 10px;
                    overflow: hidden;
                    margin-left: 5px;
                }
            
                .table {
                    width: 1000px;
                    border-collapse: collapse;
                }
            
                .hed {
                    background-color: #343a40;
                    color: #fff;
                    text-align: left;
                }
            
                .hed th {
                    padding: 15px;
                }
            
                .body {
                    background-color: #fff;
                }
            
                .body td, .body th {
                    padding: 25px;
                    border: 1px solid #ddd;
                }
            
                .body tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
            
                .body tr:hover {
                    background-color: #e2e2e2;
                }
            
                .ID {
                    font-weight: bold;
                }
            
                .updat, .delete ,.show {
               
                    color: #fff;
                    border: none;
                    padding: 5px 10px;
                    border-radius: 3px;
                    cursor: pointer;
                    margin-right: 5px;
                }
                .updat {
                    background-color: #ffc107;
                }
                .delete {
                    background-color: #dc3545;
                }
            
                .updat:hover {
                    background-color: #e0a800;
                }
            
                .delete:hover {
                    background-color: #c82333;
                }
            </style>
                    </style>
                
           
        @endforeach
    </table>
</div>
</div>
<script>
    $("#lstLangues").on("change",function(){
        var locale = $(this).val();
        window.location.href = "/changeLocale/"+locale;
    })
</script>
@endsection

