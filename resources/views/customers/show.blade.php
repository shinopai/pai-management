<x-app-layout>
  <!-- 顧客詳細 -->
  <div class="detail">
    <div class="detail__inner">
      <a href="{{ route('customers.index') }}" class="detail__link">前へ戻る</a>
      <h2 class="detail__heading">{{ $customer->name }}</h2>
      <dl class="detail__list">
        <dt>店舗</dt>
        <dd>{{ $customer->store->name }}</dd>
        <dt>郵便番号</dt>
        <dd>{{ $customer->post_code }}</dd>
        <dt>住所</dt>
        <dd>{{ $customer->address }}</dd>
        <dt>メール</dt>
        <dd>{{ $customer->email }}</dd>
        <dt>生年月日</dt>
        <dd>{{ $customer->birthday }}</dd>
        <dt>電話番号</dt>
        <dd>{{ $customer->phone }}</dd>
        <dt>更新日</dt>
        <dd>{{ $customer->updated_at }}</dd>
        <dt>登録日</dt>
        <dd>{{ $customer->created_at }}</dd>
      </dl>
      @if(session('flash'))
      <p class="flash-msg">{{ session("flash") }}</p>
      @endif
      <ul class="err-msg">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      <form
        action="{{ route('users.logs.store', ['user' => Auth::id(), 'customer_id' => $customer->id]) }}"
        class="detail__form"
        method="post"
      >
        @csrf
        <label for="log" class="detail__form-label">Log:</label>
        <textarea
          name="log"
          id="log"
          cols="30"
          rows="10"
          class="detail__form-textarea"
        ></textarea>
        <input type="submit" class="detail__form-submit" />
      </form>
      <ul class="detail__log-list">
        @forelse($customer->logs as $log)
        <li class="detail__log-item existing">
          <p>{{ $log->log }}</p>
          <span>記入日時:&nbsp;{{ $log->created_at }}</span>
          <span>記入者:&nbsp;{{ $log->user->name }}</span>
        </li>
        @empty
        <li class="detail__log-item">この顧客のログはありません</li>
        @endforelse
      </ul>
    </div>
  </div>
</x-app-layout>
