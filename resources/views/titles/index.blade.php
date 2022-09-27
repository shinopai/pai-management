<x-app-layout>
  <!-- 役職一覧 -->
  <div class="list">
    <div class="list__inner">
      <h2 class="list__heading">役職一覧</h2>
      <table class="list__table">
        <thead>
          <tr>
            <th>ID</th>
            <th>役職</th>
          </tr>
        </thead>
        <tbody>
          @foreach($titles as $title)
          <tr>
            <td>{{ $title->id }}</td>
            <td>{{ $title->name }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-app-layout>
