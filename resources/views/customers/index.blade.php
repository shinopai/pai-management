<x-app-layout>
  <!-- 顧客一覧 -->
  <div class="list">
    <div class="list__inner">
      <h2 class="list__heading">顧客一覧</h2>
      {{ $customers->links('vendor.pagination.showing') }}
      <table class="list__table">
        <thead>
          <tr>
            <th>指名</th>
            <th>店舗</th>
            <th>郵便番号</th>
            <th>住所</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->store->name }}</td>
            <td>{{ $customer->post_code }}</td>
            <td>{{ $customer->address }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $customers->links() }}
    </div>
  </div>
</x-app-layout>
