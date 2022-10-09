<x-app-layout>
  <div class="dashboard">
    <ul class="dashboard__inner">
      @canany('viewAny', auth()->user())
      <li><a href="{{ route('users.index') }}">社員一覧</a></li>
      @endcanany
      <li><a href="">役員一覧</a></li>
      <li><a href="{{ route('titles.index') }}">役職一覧</a></li>
      <li><a href="{{ route('customers.index') }}">顧客一覧</a></li>
      <li><a href="">顧客検索</a></li>
      <li><a href="{{ route('customers.create') }}">新規顧客登録</a></li>
    </ul>
  </div>
</x-app-layout>
