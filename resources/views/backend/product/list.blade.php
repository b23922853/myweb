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
        table{
            width: 100%;

        }
        td{
            border: 1px solid black;
        }
        img{
            width: 250px;
        }

        .create-btn{
            color: white;
            background-color: green;
            display: inline-block;
            margin-block: 30px;
        }
        .edit-btn{
            color: white;
            background-color: skyblue;
            display: inline-block;
            margin-block: 30px;
        }
        .delete-btn{
            color: white;
            background-color: crimson;
            display: inline-block;
            margin-block: 30px;
        }
    </style>

@endsection



@section('main')
    <div >
        <a href="/admin/product/create" class="create-btn font-bold py-2 px-4 border rounded">新增產品</a>
        <table>
            <tr>
                <td>商品編號</td>
                <td>商品名稱</td>
                <td>商品圖片</td>
                <td>操作</td>
            </tr>
            @foreach ($product as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td><img src="{{$item->img_path }}" alt=""></td>
                <td>
                    <a href="" class="edit-btn font-bold py-2 px-4 border rounded">編輯產品</a>
                    <a href="" class="delete-btn font-bold py-2 px-4 border rounded">刪除產品</a>
                </td>
            </tr>
            @endforeach


        </table>

    </div>
@endsection