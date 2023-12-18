<form method="POST" action="{{route('setLocale', $lang)}}">
    @csrf
    <button type="submit" class="btn">
        <img class="nav-link" style='background-color:transparent;' src="{{asset("vendor/blade-flags/language-" . $lang . '.svg')}}" alt="">
    </button>
</form>