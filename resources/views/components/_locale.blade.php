<form method="POST" action="{{route('setLocale', $lang)}}">
    @csrf
    <button type="submit" >
        <img src="{{asset("/vendor/blade-flags/language-it.svg")}}" alt="">
    </button>
</form>