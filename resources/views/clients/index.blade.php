@extends("Stocks.index2")
@section("content")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<div>
    <h1>LISTE DES CLIENTS</h1>
    <button
                    type="button"
                    id="btnAddClient"
                    class="add">
                        Add client
                    </button>
</div>

<div class="relative overflow-x-auto">
    <table class="table">
        <thead class="hed">
            <tr>
                <th scope="col" class="px-6 py-3">
                   ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Prenom
                </th>
                <th scope="col" class="px-6 py-3">
                    Adress
                </th>
                <th scope="col" class="px-6 py-3">
                    Telephone
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client )
            <tr id="{{$client->id}}" class=" body">
                <th scope="row" class="ID">
                    {{$client->id}}
                </th>
                <td class="px-6 py-4">
                    {{$client->firstName}}
                </td>
                <td class="px-6 py-4">
                    {{$client->lastName}}
                </td>
                <td class="px-6 py-4">
                    {{$client->address}}
                </td>
                <td class="px-6 py-4">
                    {{$client->phoneNumber}}
                </td>
                <td class="px-6 py-4">
                    <button
                    v="{{$client->id}}"
                    type="button"
                    class="updat">
                        Update
                    </button>
                    <button
                    v="{{$client->id}}"
                    type="button"
                    class="delete">
                        Delete
                    </button>
                    <button
                    type="button"
                    id="btnShowCient"
                    class="show">
                        Show client
                    </button>
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
                }
            
                .add {
                    background-color: #18191a;
                    color: white;
                    margin-left: 900px;
                    border: none;
                    height: 40px;
                    width: 100px;
                    border-radius: 3px;
                    cursor: pointer;
                 
                   
                }
                .show {
                    background-color: #007bff;
                   
                }
            
                .add:hover {
                    background-color: #0056b3;
                }
            
                .relative {
                    margin: 10px auto;
                    width: 100%;
                    background-color: #fff;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 10px;
                    overflow: hidden;
                    margin-left: 5px;
                }
            
                .table {
                    width: 100%;
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
                    padding: 15px;
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
            
            @endforeach
        </tbody>
    </table>
</div>
<script>
$(".deletebtn").on("click",function() {
    const id = $(this).attr("v")
    axios.post("{{route('modal.delete')}}",{id}).then((result) => {
        $(".deleteModal").html(result.data);
    })
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
})
$("#btnAddClient").on("click",function() {
    axios.get("{{route('client.add')}}").then((result) => {
        $(".addModal").html(result.data);
    })
})
$(".btnUpdateClient").on("click", function() {
    try {
        const id = $(this).attr("v");
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        axios.get("{{ route('client.ModifyModal') }}", { params: { id: id } }).then((result) => {
            $(".modifymodal").html(result.data);
        });
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred while updating the client.');
    }
});


</script>
@endsection
