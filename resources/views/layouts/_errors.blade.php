@if(count($errors))

    <hr>

    <div class="form-group">

        <ul class="alert alert-danger text-center w-50 mx-auto" id="errors" style="list-style: none;">

            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach

        </ul>

    </div>

@endif