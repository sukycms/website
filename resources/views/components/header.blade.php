<header class="header">
    <div class="container mx-auto">
        <div class="flex flex-row justify-between">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>

            <nav>
                <ul class="flex flex-row">
                    <x-header.link :url="url('/')" :title="__('page.sections.shelters')"/>
                    <x-header.link :url="url('/')" :title="__('page.sections.blog')"/>
                    <x-header.link :url="config('sukycms.social.facebook')" title="" _target="blank">
                        <i class="fab fa-facebook"></i>
                    </x-header.link>
                    <x-header.link :url="config('sukycms.social.twitter')" title="" _target="blank">
                        <i class="fab fa-twitter"></i>
                    </x-header.link>
                    <x-header.link :url="config('sukycms.social.github')" title="" _target="blank">
                        <i class="fab fa-github"></i>
                    </x-header.link>
                </ul>
            </nav>
        </div>
    </div>
</header>
