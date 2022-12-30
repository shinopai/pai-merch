@extends('layouts.app') @section('content')
<div class="flex-wrap flex">
  @include('partial._search_form')
  <div class="list-wrap">
    <table class="list">
      <caption class="list__heading">
        検索結果
      </caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>カテゴリ</th>
          <th>メーカー</th>
          <th>商品名</th>
          <th>価格</th>
          <th>登録日</th>
        </tr>
      </thead>
      <tbody>
        @forelse($items as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->category->name }}</td>
          <td>{{ $item->maker->name }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->price }}</td>
          <td>{{ $item->created_at->format('Y年m月d日') }}</td>
        </tr>
        @empty
        <tr>
          <td rowspan="6">概要の商品はありません</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        @endforelse
      </tbody>
    </table>
    {{ $items->appends(request()->query())->links() }}
  </div>
</div>
@endsection
