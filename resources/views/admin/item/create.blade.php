<h2>商品入力</h2>
<form action="{{ route('admin.item.add') }}" method="post">
    @csrf

    <button>更新</button>
    <a href="{{ route('admin.item.index') }}">戻る</a>
</form>