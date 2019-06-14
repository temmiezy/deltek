<h2>Spaced Number Sort</h2>
<form method="POST" action="/process">
    {{ csrf_field() }}

    <label for="main">Insert Numbers</label>
    <input type="text" name="main" id="main">

    <input type="submit" class="btn btn-primary" value="Process Numbers">
</form>

@if($values)

    <h3>Result</h3>

    @foreach($values as $value)
        <p>{{ $value }}</p>
    @endforeach

@endif