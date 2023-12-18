<form method="POST" action="{{route('setLocale', $lang)}}">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" alt="" width="28" height="28">
    </button>
</form>