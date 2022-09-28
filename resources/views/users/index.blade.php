<x-app-layout>
  <!-- 社員一覧 -->
  <div class="list">
    <div class="list__inner">
      <h2 class="list__heading">社員一覧</h2>
      {{ $users->links('vendor.pagination.showing') }}
      <table class="list__table">
        <thead>
          <tr>
            <th>指名</th>
            <th>所属店舗</th>
            <th>役職</th>
            <th>メール</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->store->name }}</td>
            <td>{{ $user->title->name }}</td>
            <td>{{ $user->email }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $users->links() }}
    </div>
  </div>
</x-app-layout>
