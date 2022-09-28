<header class="header">
  <div class="header__inner flex">
    <div class="header__item before">
      <x-nav-link
        :href="route('dashboard')"
        :active="request()->routeIs('dashboard')"
      >
        {{ __("顧客管理システム シノパイ") }}
      </x-nav-link>
    </div>
    <div class="header__item after">
      <x-dropdown align="right" width="48">
        <x-slot name="trigger">
          <button class="header__btn">
            {{ Auth::user()->name }}
          </button>
        </x-slot>
        <x-slot name="content">
          <!-- Authentication -->
          <form
            method="POST"
            action="{{ route('logout') }}"
            class="header__form"
          >
            @csrf
            <x-dropdown-link
              :href="route('logout')"
              onclick="event.preventDefault();
                                                this.closest('form').submit();"
            >
              {{ __("ログアウト") }}
            </x-dropdown-link>
          </form>
        </x-slot>
      </x-dropdown>
    </div>
  </div>
</header>
