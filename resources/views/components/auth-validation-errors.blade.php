@props(['errors']) @if ($errors->any())
<div class="err-msg">
  <ul class="err-msg__list">
    @foreach ($errors->all() as $error)
    <li class="err-msg__item">{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
