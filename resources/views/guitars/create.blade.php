@extends('layouts.main')


@section('content')
<div>
    <form action="" method="">
        <div>
            <label for="name"></label>
            <input type="text" id="name" name="name" placeholder="Guitar Name"
            style="padding: 20px;width: 100%;margin-bottom: 10px;">
        </div>

        <div>
            <label for="brand"></label>
            <input type="text" id="brand" name="brand" placeholder="Brand"
            style="padding: 20px;width: 100%;margin-bottom: 10px;">
        </div>

        <div>
            <label for="year"></label>
            <input type="text" id="year" name="year" placeholder="Year Made"
            style="padding: 20px;width: 100%;margin-bottom: 10px;">
        </div>

        <div>
            <button type="submit"
            style="padding: 20px;width: 100%;margin-bottom: 10px;">Submit</button>
        </div>
    </form>
</div>

@endsection
