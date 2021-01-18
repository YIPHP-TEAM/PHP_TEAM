@extends('layouts.app')

@section('content')
    <div class="">
        <h1>ユーザー情報画面</h1>
        <div class="">
            <a src="/image/{{$items->image}}" alt="" href="#"></a>
            {{$items->name}} <br>
            {{$items->content}} <br>
            {{$items->point}}
            @if(($items-stock) > 4)
            ●
            @elseif(($items-stock) > 0)
            ▲
            @else
            ×
        </div>

        <div class="">
        <form action="{{ action('') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
        <div class="form-group row">
            <label class="col-md-2" for="priority">重要度</label>
            <div class="col-md-10">
                <select class="form-control" name="priority" min="1" max="10" value="{{ old('orders') }}">
                <?php
                for ($i = 1; $i <=10; $i++) {
                    print ('<option value="' . $i. '">' . $i . '</option>');
                    }
                    ?>
                </select>
            </div>
        </div>


{{ csrf_field() }}
<input type="submit" class="create-btn" value="購入する">
</form>
        </div>
    </div>
@endsection