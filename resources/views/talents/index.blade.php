@extends('layouts.layout')

@section('title', 'talents')

@section('script')
    <script>
        let $elSearchResult = $('#search-result');

        var $searchFunction = function($form){
            //Show loader
            $elSearchResult.html('<div class="text-center mt-3"><i class="fa fa-spinner fa-2x fa-pulse"></i></div>');
            //Let's check if search query is not empty
            let $inputQuery = $form.find('#q');
            let query = $inputQuery.val();
            if(query === ''){
                $elSearchResult.html('');
                $inputQuery.focus();
                return false;
            }
            
            $.ajax({
                url: $form.attr('action'),
                method: $form.attr('method'),
                data: query,
                error: function(error){
                    console.log(error);
                    alert('An error occured');
                }
            }).then(function(response){
                let total = response.length;
                if(total > 0){
                    //Remove whatever is in the element
                    $elSearchResult.html('');

                    for(let i = 0; i < total; i++){
                        let talent = response[i];
                        let html = '<a href="talents/'+talent.id+'" class="list-group-item list-group-item-action mb-2 shadow-3">'+
                            '<div class="d-flex justify-content-between">'+
                            '<span><b>Name: </b>'+talent.name+'</span>'+
                            '<span><b>Address: </b>'+talent.address+'</span>'+
                            '</div>'+
                            '<div><b>Profession: </b>'+talent.profession+'</div>'+
                            '</a>';
                        //Display
                        $elSearchResult.append(html);
                    }
                }else{
                    //Display no results found message
                    $elSearchResult.html('<div class="alert alert-info">No results found.</div>');
                }
            });
        };

        $formSearch = $('#form-search');

        $('#form-search').submit(function(event){
            event.preventDefault(); 
            $searchFunction($formSearch)
        });

        $('#q').on('input', function(){
            $searchFunction($formSearch);
        });
    </script>
@endsection

@section('content')

<div class="w3-row w3-section">
    <div class="w3-col">
        <p class="mssg w3-large w3-text-indigo w3-center">
            {{ session('mssg') }}
        </p>

        <div class="d-flex justify-content-center my-2">
            <form id="form-search" method="get" action="{{route('api.talent.search')}}">
                <div class="input-group">
                    <div class="input-group-append">
                        <input type="search" name="q" id="q" class="form-control " placeholder="search talents...">
                        <button type="submit" class="btn btn-md d-inline btn-primary m-0">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div id="search-result" class="list-group mx-5"></div>

        <div class="w3-container w3-responsive w3-centered mr-5">
            <table class="w3-table w3-section w3-striped w3-card-3 w3-margin">
                <thead>
                    <tr class="w3-light-blue w3-text-indigo">
                        <th>Full Name</th>
                        <th>State</th>
                        <th>Trade</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Disapprove</th>
                        <th>Approve</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($talents as $talent)
                    <tr>
                        <td>{{ $talent['name']}}</td>
                        <td>{{ $talent['state']}}</td>
                        <td>{{ $talent['profession']}}</td>
                        <td><div class="w3-btn w3-button w3-blue w3-small w3-round w3-hover-indigo w3-border">
                            <a href="/talents/{{ $talent->id }}" class="w3-text-black">View</a>
                        </div>
                        </td>
                        <td><a href="/talents/{{ $talent->id}}/edit" class="w3-button w3-small w3-btn w3-round w3-yellow">Edit</a></td>
                        <td>
                            <!-- <form action="/talents/ {{ $talent->id }}" class="delete_form" method="POST">
                                                                                                                                                        @csrf
                                                                                                                                                        @method('DELETE')
                                                                                                                                                        <button type="submit" class="w3-red w3-btn w3-button w3-round">Reject</button> <br><br>
                                                                                                                                                    </form> -->
                        </td>
                        <td><form action="/talents/ {{ $talent->id }}" method="POST">
                            @csrf

                            <button type="submit" class="approve_user">Approve</button>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.delete_form').on('submit', function() {
            if (confirm("Are you sure you want to Approve it?")) {
                return true;
            } else
            {
                return false;
            }
        });
    });

</script>

@endsection