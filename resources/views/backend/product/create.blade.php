@extends('layouts.app')

@section('css')

    <style>
        main{
            padding-top: 30px;
        }
        main div{
            width: 80%;
            background-color: white;
            padding: 30px;
            border-radius: 30px;
            border: 2px solid black;
            margin: auto
        }
        form{
            display: flex;
            flex-direction: column;
        }

        .create-btn{
            color: white;
            background-color: green;
            display: inline-block;
            margin-block: 30px;
        }

    </style>

@endsection



@section('main')
    <div >
        <form action="/admin/product/store" method="post">
            @csrf

            <label for="title">商品標題</label>
            <input type="text" name="title" id="title">

            <label for="content">商品內容</label>
            <input type="text" name="content" id="content">

            <label for="img_path">圖片路徑</label>
            <input type="text" name="img_path" id="img_path">

            <button type="submit" class="create-btn font-bold py-2 px-4 border rounded">新增商品</button>
        </form>

    </div>
@endsection