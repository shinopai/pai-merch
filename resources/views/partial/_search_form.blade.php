<form action="{{ route('items.search') }}" method="get" class="form">
  @csrf
  <h2 class="form__heading">商品検索</h2>
  <div class="form__body">
    <div class="form__item">
      <label class="form__label" for="category">カテゴリー</label><br />
      <select name="category" id="category" class="form__select">
        <option value=""></option>
        @foreach (Functions::getCategories() as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form__item">
      <label class="form__label" for="maker">メーカー</label><br />
      <select name="maker" id="maker" class="form__select">
        <option value=""></option>
        @foreach (Functions::getMakers() as $maker)
        <option value="{{ $maker->id }}">{{ $maker->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form__item">
      <label class="form__label" for="keyword">キーワード</label><br />
      <input
        type="text"
        name="keyword"
        id="keyword"
        value=""
        class="form__input"
        placeholder="商品名"
      />
    </div>
    <div class="form__item">
      <label class="form__label" for="price">価格帯</label><br />
      <div class="form__inputs flex">
        <input
          type="number"
          name="from"
          id="price"
          value=""
          min="300"
          max="999"
          placeholder="円"
        />
        <p>～</p>
        <input
          type="number"
          name="to"
          id="price"
          value=""
          min="300"
          max="999"
          placeholder="円"
        />
      </div>
    </div>
    <div class="form__item">
      <label class="form__label" for="order">並び順</label><br />
      <select name="order" id="order" class="form__select">
        <option value=""></option>
        <option value="1">登録順</option>
        <option value="2">価格順</option>
      </select>
    </div>
  </div>
  <div class="form__footer">
    <input type="submit" value="検索" class="form__input--submit" />
  </div>
</form>
